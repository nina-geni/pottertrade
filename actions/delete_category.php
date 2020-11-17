<?php
require '../app.php';

$category_id = $_GET['category_id'] ?? 0;

if( $category_id ) {

   Category::deleteById( $category_id );

}

header('location: ../admin/category.php');
die();