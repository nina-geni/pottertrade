<?php
    require '../app.php';

    $results = Article::getArticleAdmin()

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon_package_v0-2/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon_package_v0-2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon_package_v0-2/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon_package_v0-2/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d197925e1.js" crossorigin="anonymous"></script>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../css/main.css">
    <title>Article</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="index.php"><img src="../images/logoPT.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <nav>
                        <a  href="category.php">category</a>
                        <a  href="article.php">article</a>
                        <a  href="users.php">users</a>
                        <a  href="index.php">profile</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
    <div class="banner">
        <div class="banner-pic">
            <img src="../images/library.jpeg" alt="">
        </div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <div class="banner-text">
                <p>Here you can change the</p>
                <h1>Articles</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cards">
                    <?php
                    foreach($results as $article):
                    ?>
                    <div class="card">
                        <a href="detail.php?article_id=<?=$article['Id']?>" class="card-admin">
                            <div class="card-img">
                                <img src="../images/<?= $article["thumbnail"]?>" alt="">
                            </div>
                            <div class="card-text">
                                <h2><?= $article["title"]?></h2>
                                <div class="line"></div> 
                            </div> 
                            <div class="card-overlay"></div>                 
                        </a>
                        <form action="../actions/delete_article.php" class="form-under" method="GET">
                            <input type="hidden" name="article_id" value="<?= $article['Id'] ?>">
                            <button type="submit" class="button" name="delete_article">Delete</button>
                        </form>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
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
    </footer>
</body>
</html>