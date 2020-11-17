<?php
require '../app.php';

$user_id = (int) $_GET['user_id'] ?? 0;
var_dump($user_id);

if( $user_id ) {

   User::deleteById( $user_id );

}

header('location: ../admin/users.php');
die();