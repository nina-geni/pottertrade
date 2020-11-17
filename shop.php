<?php
    require 'app.php';

    $category_id = $_GET['category_id'] ?? 0;
    $search = $_GET['zoek'] ?? '';
    $price = $_GET['prijs'] ?? -1;
    $sort = $_GET['sorteer'] ?? '';
    $page = $_GET['page'] ?? 1;
    $price = (int) $price;
    $searching = '';
    $filter = 'WHERE `buyer_id` IS NULL';
    $price_higher = 0;

    $startpage = $page * 9 - 9;
    $link = '';

    if ($category_id > 0) {
        $filter .= ' AND `category_id` = :id';
        $link .= 'category_id=' . $category_id;
    }

    if ($search !== '') {
            $filter .= ' AND `title` LIKE :zoek';
            $link .= '&zoek=' . $search;
        $searching = '%' . $search . '%';
    }

    if ($price !== -1) {
        $price_higher = $price + 50;
        if ($price <= 50) {
            $filter .= ' AND `price` BETWEEN :price AND :price_higher';
        } else {
            $filter .= ' AND `price` > :price';
        }
        $link .= '&prijs=' . $price;
    }

    $order = '';
    if ($sort !== '') {
        if ($sort === 'recent') {
            $order = ' ORDER BY `create_date` DESC';
        } else {
            $order = ' ORDER BY `title` ASC';
        }
        $link .= '&sorteer=' . $sort;
    }

    $results = Article::getArticles($filter, $order, $category_id, $search, $searching, $price, $price_higher, $startpage);

    $countArticles = Article::countArticles($filter, $category_id, $search, $searching, $price, $price_higher)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_package_v0-2/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_package_v0-2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_package_v0-2/favicon-16x16.png">
    <link rel="manifest" href="images/favicon_package_v0-2/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d197925e1.js" crossorigin="anonymous"></script>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/main.css">
    <title>Shop</title>
</head>
<body>
    <header>
        <div class="header-logo">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12">
                         <a href="index.php"><img src="images/logoPT.png"></a>
                     </div>
                 </div>
             </div>
        </div>
        <div class="header-nav">
             <div class="container">
                 <div class="row">
                     <div class="col-12 col-sm-12">
                        <nav>
                            <a class="dropdown-link" id="shop-link" href="shop.php">shop <i class="fas fa-chevron-down"></i></a>
                            <a class="dropdown-link" id="profile-link" href="overview.php">profile <i class="fas fa-chevron-down"></i></a>
                        </nav>
                        <?php include 'navigation.php' ?>
                     </div>
                 </div>
             </div>
        </div>
    </header>
    <main>
    <div class="banner">
        <div class="banner-pic">
            <img src="images/shop.jpg" alt="">
        </div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <div class="banner-text">
                <p>Discover The wizarding world</p>
                <h1>Shop</h1>
            </div>
        </div>
    </div>
   <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="filter">
                    <form method="GET">
                        <input name="category_id" type="hidden" value="<?= $category_id ?>">
                        <div class="input">
                            <input type="text" name="zoek">
                            <i class="fas fa-search"></i>
                        </div>
                        <select name="prijs" id="">
                            <option selected disabled>Prijs</option>
                            <option value="0">€ 0 - 50</option>
                            <option value="50">€ 50 - 100</option>
                            <option value="100">€ 100+</option>
                        </select>
                        <select name="sorteer" id="">
                            <option selected disabled>Sorteer</option>
                            <option value="recent">Recent</option>
                            <option value="alfabetisch">Alfabetisch</option>
                        </select>
                        <input type="submit" value="Filter">
                    </form>
                </div>
                <div class="filter-line"></div>
                <div class="cards">
                    <?php
                    foreach($results as $article):
                    ?>
                    <a href="detail.php?article_id=<?=$article['Id']?>" class="card">
                        <div class="card-img">
                            <img src="images/<?= $article["thumbnail"]?>" alt="">
                        </div>
                        <div class="card-text">
                            <h2><?= $article["title"]?></h2>
                            <div class="line"></div> 
                        </div> 
                        <div class="card-overlay"></div>                 
                    </a>
                    <?php
                    endforeach
                    ?>
                </div>
                <div class="pagination">
                    <?php 
                    $pageLinkNumber = 0;
                    for($i = 0; $i < $countArticles; $i+=9):
                        $pageLinkNumber += 1;
                    ?>
                    <a class="important" href="shop.php?<?= $link ?>&page=<?= $pageLinkNumber ?>"><?= $pageLinkNumber ?></a>
                    <?php
                    endfor
                    ?>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm footer">
                    <h1>Follow us on:</h1>
                    <div class="social">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>