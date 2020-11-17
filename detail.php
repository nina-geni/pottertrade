<?php
    require 'app.php';

    $v_id = $_GET['article_id'] ?? 0;

    if (isset($_POST['buy'])) {

        Article::updateBuyerId($user_id, $v_id);
        
        header('location: overview.php');
    }

    $result = Article::getArticleWithOwner($v_id);

    $pictures = Picture::getPicturesForArticle($v_id);

    $reviews = Review::getReviewsForArticle($v_id)

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
    <title>Detail</title>
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
            <img src="images/<?= $result->thumbnail?>" alt="">
        </div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <div class="banner-text">
                <h1><?= $result->title?></h1>
        </div>
        </div>
   </div>  
   <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="detail-pictures">
                    <div class="detail-picture">
                        <img src="images/<?= $result->thumbnail ?>" alt="">
                    </div>
                    <?php 
                        foreach($pictures as $picture):
                    ?>
                    <div class="detail-picture">
                        <img src="images/<?= $picture['path'] ?>" alt="">
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="row detail-content">
            <div class="col-sm-6">
                <p><?= $result->description?></p>
            </div>
            <div class="col-sm-4">
                <h2 class="important">€ <?= $result->price?></h2>
                <?php if ($user_id !== $result->owner_id && $result->buyer_id === NULL): ?>
                <form action="" method="post">
                    <button type="submit" class="button button-buy-article" name="buy">Buy</button>
                </form>
                <?php endif ?>
                <h2>€ <?= $result->shipping?> Shipping</h2>
                <h2>Sold by: <?= $result->user_name?></h2>
            </div>
            <div class="filter-line"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>Reviews Seller</h2>
                <?php 
                    foreach($reviews as $review):
                ?>
                <div class="review">
                    <p><?=$review['title']?></p>
                    <p><?=$review['description']?></p>
                </div>
                <?php endforeach ?>
            </div>
            <div class="filter-line"></div>
            <div class="col-sm-6">
                <h2>Leave a review on the seller</h2>
                <form action="actions/add_review.php" class="form-under" method="POST">
                    <input type="hidden" name="article_id" value="<?= $v_id ?>">
                    <input type="text" name="review_title" placeholder="Title">
                    <textarea type="text" name="review_text" placeholder="Text"></textarea>
                    <button type="submit" class="button" name="create-review">Post</button>
                </form>
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