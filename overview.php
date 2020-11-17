<?php
    require 'app.php';


    $sell_articles = Article::getOwnedArticles($user_id);

    $bought_articles = Article::getBoughtArticles($user_id);

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
    <title>Profile</title>
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
            <img src="images/overview.jpg" alt="">
        </div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <div class="banner-text">
                <h1><?= $user->first_name?> <?= $user->last_name?></h1>
                <a href="signout.php" class="button">Sign Out</a>
                <?php if ($user->admin == 1): ?>
                    <a href="admin/index.php" class="button button-hidden">Go admin</a>
                <?php endif ?>
            </div>
        </div>
    </div>
   <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>What you sell</h2>
                <div class="cards">
                    <?php
                        foreach($sell_articles as $sell_article):
                    ?>
                    <a href="detail.php?article_id=<?=$sell_article['Id']?>" class="card">
                        <div class="card-img">
                            <img src="images/<?= $sell_article["thumbnail"]?>" alt="">
                        </div>
                        <div class="card-text">
                            <h2><?= $sell_article["title"]?></h2>
                            <div class="line"></div> 
                        </div> 
                        <div class="card-overlay"></div>                 
                    </a>
                    <?php endforeach ?>
                </div>
                <a href="sell.php" class="button-new-article button">New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>What you have bought</h2>
                <div class="cards">
                    <?php
                        foreach($bought_articles as $bought_article):
                    ?>
                    <a href="detail.php?article_id=<?=$bought_article['Id']?>" class="card">
                        <div class="card-img">
                            <img src="images/<?= $bought_article["thumbnail"]?>" alt="">
                        </div>
                        <div class="card-text">
                            <h2><?= $bought_article["title"]?></h2>
                            <div class="line"></div> 
                        </div> 
                        <div class="card-overlay"></div>                 
                    </a>
                    <?php endforeach ?>
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