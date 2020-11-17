<?php
    
    class User extends BaseModel {

        protected $table = 'user';
        protected $pk = 'id';

        public static function getUserByEmail($email) {
            global $db;

            $sql = 'SELECT * FROM `user` WHERE `email` = :email';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute( [ ':email' => $email ] );
            return $pdo_statement->fetchObject();
                
        }

        public static function addUser($user_name, $first_name, $email, $street_number, $zipcode, $city, $bankaccount, $password) {
            global $db;

            $sql = 'INSERT INTO `user` (`user_name`, `first_name`, `last_name`, `email`, `street_number`, `zipcode`, `city`, `bankaccount`, `password`, `admin`)
                    VALUES (:user_name, :first_name, :last_name, :email, :street_number, :zipcode, :city, :bankaccount, :password, :admin)';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement-> execute([
                ':user_name' => $_POST['user_name'] ?? '',
                ':first_name' => $_POST['first_name'] ?? '',
                ':last_name' => $_POST['last_name'] ?? '',
                ':email' => $_POST['email'] ?? '',
                ':street_number' => $_POST['street_number'] ?? '',
                ':zipcode' => $_POST['zipcode'] ?? '',
                ':city' => $_POST['city'] ?? '',
                ':bankaccount' => $_POST['bankaccount'] ?? '',
                ':password' => password_hash( $_POST['password'], PASSWORD_DEFAULT ),
                ':admin' => 0
            ]);
                
        }

        public static function checkEmail($email) {
            global $db;

            $sql = 'SELECT COUNT(`email`) as total from `user` WHERE `email` = :email';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute([
                ':email' => $_POST['email'] ?? '',
            ]);
            return (int) $pdo_statement->fetchColumn();
                
        }

        public static function getUserByUsername() {
            global $db;

            $sql = 'SELECT `id`, `user_name` FROM `user`';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute();
            return $pdo_statement->fetchAll();
                
        }
    }