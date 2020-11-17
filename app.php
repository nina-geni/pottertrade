<?php
    session_start();

    require 'config.php';
    require 'db.php';
    require 'models/BaseModel.php';
    require 'models/Category.php';
    require 'models/Article.php';
    require 'models/Picture.php';
    require 'models/Review.php';
    require 'models/User.php';

    $user_id = $_SESSION['user_id'] ?? 0;

    $sql = 'SELECT * FROM `user` WHERE `id` = :p_id';
    $pdo_statement = $db->prepare($sql);
    $pdo_statement->execute( [ ':p_id' => $user_id ] );
    $userDb = $pdo_statement->fetchObject();

    $user = ($user_id) ? $userDb : false;
