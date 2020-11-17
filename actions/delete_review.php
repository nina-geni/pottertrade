<?php
require '../app.php';

$review_id = (int) $_GET['review_id'] ?? 0;
$article_id = (int) $_GET['article_id'] ?? 0;

if( $review_id ) {

   Review::deleteById( $review_id );

}

header('location: ../admin/detail.php?article_id=' . $article_id);
die();