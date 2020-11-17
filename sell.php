<?php
    require 'app.php';

    $categories = Category::getAll();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Sell</title>
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
            <img src="images/singup.jpg" alt="">
        </div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <div class="banner-text">
                <p>What wizarding item would you like to</p>
                <h1>Sell</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="actions/add_article.php" class="form-under" method="POST" enctype="multipart/form-data">
                    <input type="text" name="article_title" placeholder="Title">
                    <input type="text" name="article_price" placeholder="Price">
                    <input type="text" name="article_shipping" placeholder="Shipping">
                    <textarea type="text" name="article_description" placeholder="Description"></textarea>
                    <input type="file" name="Thumbnail" value="Thumbnail">
                    <input type="file" name="Pictures[]" value="Pictures" multiple>
                    <select name="article_category">
                        <?php 
                            foreach($categories as $category) {
                                echo '<option value="' . $category['id'] . '">' . $category['title'] .  '</option>';
                            }
                        ?>
                    </select>
                    </br>
                    <button type="submit" class="button" name="create-article">Add</button>
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