<?php
    require '../app.php';

    if (isset($_POST['create-article'])) {
        $article_title = $_POST['article_title'] ?? '';
        $article_description = $_POST['article_description'] ?? '';
        $article_price = $_POST['article_price'] ?? '';
        $article_shipping = $_POST['article_shipping'] ?? '';
        $article_category = $_POST['article_category'] ?? '';
        $user_id = $_SESSION['user_id'];
        $create_date = date("Y-m-d");
        $thumbnail = '';
        $pictures = '';

        $article_price = (double) $article_price;
        $article_shipping = (double) $article_shipping;

        if( isset($_FILES['Thumbnail']) && $_FILES['Thumbnail']['size'] > 0) {
            $upload_dir = '../images/';
            $tmp_location = $_FILES['Thumbnail']['tmp_name'];
            $old_name = $_FILES['Thumbnail']['name'];
            $file_type = $_FILES['Thumbnail']['type'];
            $file_info = pathinfo($old_name);
            $extension = $file_info['extension'];

            if (in_array($file_type, ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'])) {
                $thumbnail = uniqid() . '-' . $file_info['filename'] . '.' . $extension;
                $new_location = $upload_dir . $thumbnail;
                move_uploaded_file($tmp_location, $new_location);
            }
        }

        $article_id = Article::addNewArticle($article_title, $article_description, $article_price, $create_date, $article_category, $user_id, $article_shipping, $thumbnail);
        
        
        print_r($_FILES['Pictures']);
        if( isset($_FILES['Pictures'])) {
            $upload_dir = '../images/';

            for ($i = 0; $i < count($_FILES['Pictures']['name']); $i++) {
                $tmp_location = $_FILES['Pictures']['tmp_name'][$i];
                $old_name = $_FILES['Pictures']['name'][$i];
                $file_type = $_FILES['Pictures']['type'][$i];
                $file_info = pathinfo($old_name);
                $extension = $file_info['extension'];
                if (in_array($file_type, ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'])) {
                    $photo = uniqid() . '-' . $file_info['filename'] . '.' . $file_info['extension'];
                    $new_location = $upload_dir . $photo;
                    move_uploaded_file($tmp_location, $new_location);
                
                    Picture::addPicturesWithArticle($photo, $article_id);
                }
            }
        }
    }

    header('location: ../detail.php?article_id=' . $article_id);