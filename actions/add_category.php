<?php
require '../app.php';

if (isset($_POST['create_category'])) {
    $new_category = $_POST['new_category'] ?? '';

    Category::addCategory($new_category);
}

header('location: ../admin/category.php');