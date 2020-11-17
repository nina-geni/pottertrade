<?php
require '../app.php';

$article_id = $_GET['article_id'] ?? 0;

if( $article_id ) {

   Article::deleteById( $article_id );

}

header('location: ../admin/article.php');
die();