<?php
require '../app.php';

if (isset($_POST['create-review'])) {
    $article_id = $_POST['article_id'] ?? '';
    $review_title = $_POST['review_title'] ?? '';
    $review_text = $_POST['review_text'] ?? '';
    $user_id = $_SESSION['user_id'];
    $create_date = date("Y-m-d");

    $sql = "INSERT INTO review (title, description, create_date, user_id, article_id) VALUES (:title, :description, :create_date, :user_id, :article_id)";

    $sth = $db->prepare($sql);
    $sth->execute([
        ':article_id' => $article_id,
        ':title'=>$review_title,
        ':description'=>$review_text,
        ':create_date'=>$create_date,
        ':user_id'=>$user_id,
    ]);
}

header('location: ../detail.php?article_id=' . $article_id);