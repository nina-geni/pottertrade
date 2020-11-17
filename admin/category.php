<?php
    require '../app.php';

    $categories = Category::getAll();

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
    <title>Category</title>
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
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <nav>
                            <a href="category.php">category</a>
                            <a href="article.php">article</a>
                            <a  href="users.php">users</a>
                            <a href="index.php">profile</a>
                        </nav>
                    </div>
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
                    <h1>Category</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <?php 
                    foreach($categories as $category):
                ?>
                    <h2><?= $category['title'] ?></h2>           
                    <form action="../actions/delete_category.php" class="form-under" method="GET">
                        <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
                        <button type="submit" class="button" name="delete_category">Delete</button>
                    </form>            
                    <form action="../actions/edit_category.php" class="form-under" method="POST">
                        <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
                        <input type="text" name="title" placeholder="Edit Category">
                        <button type="submit" class="button" name="edit_category">Edit</button>
                    </form>
                    <div class="filter-line"></div>
                <?php endforeach ?>
                </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="../actions/add_category.php" class="form-under" method="POST">
                    <input type="text" name="new_category" placeholder="New Category">
                    <button type="submit" class="button" name="create_category">Submit</button>
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
</body>
</html>