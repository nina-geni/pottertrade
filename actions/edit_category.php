<?php

require '../app.php';

Category::editCategory($_POST['title'], $_POST['category_id']);

header('location: ../admin/category.php');