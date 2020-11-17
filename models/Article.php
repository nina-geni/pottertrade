<?php
    
    class Article extends BaseModel {

        protected $table = 'article';
        protected $pk = 'Id';

        public static function getAvailableArticles() {
            global $db;

            $sql = 'SELECT * FROM `article` WHERE `buyer_id` IS NULL ORDER BY `create_date` DESC LIMIT 3';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute();
            return $pdo_statement->fetchAll();
        }

        public static function getOwnedArticles($user_id) {
            global $db;

            $sql = 'SELECT * FROM `article` WHERE `owner_id` = :user_id';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute( [ ':user_id' => $user_id ] );
            return $pdo_statement->fetchAll();
        }

        public static function getBoughtArticles($user_id) {
            global $db;

            $sql = 'SELECT * FROM `article` WHERE `buyer_id`= :user_id';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute( [ ':user_id' => $user_id ] );
            return $pdo_statement->fetchAll();
        }

        public static function updateBuyerId($user_id, $article_id) {
            global $db;

            $sql = 'UPDATE `article` SET `buyer_id` = :user_id WHERE `Id` = :article_id';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute([
                    ':user_id' => $user_id,
                    ':article_id' => $article_id
                ]);
        }

        public static function getArticleWithOwner($article_id) {
            global $db;

            $sql = 'SELECT * FROM `article` INNER JOIN `user` ON `article`.`owner_id` = `user`.`id` WHERE `article`.`Id` = :article_id ';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute([
                    ':article_id' => $article_id
                ]);
            return $pdo_statement->fetchObject();
        }

        public static function addNewArticle($article_title, $article_description, $article_price, $create_date, $article_category, $user_id, $article_shipping, $thumbnail) {
            global $db;

            $sql = "INSERT INTO article (title, description, price , create_date, category_id , owner_id, shipping, thumbnail) VALUES (:title, :description, :price , :create_date, :category_id , :owner_id, :shipping, :thumbnail)";
            $sth = $db->prepare($sql);
            $sth->execute([
                ':title'=>$article_title,
                ':description'=>$article_description,
                ':price'=>$article_price,
                ':create_date'=>$create_date,
                ':category_id'=>$article_category,
                ':owner_id'=>$user_id,
                ':shipping'=>$article_shipping,
                ':thumbnail'=>$thumbnail,
            ]);
            return $db->lastInsertId();
        }

        public static function getArticles($filter, $order, $category_id, $search, $searching, $price, $price_higher, $startpage) {
            global $db;
            $sql = 'SELECT * FROM `article` ' . $filter . $order . ' LIMIT :start, 9';
            $pdo_statement = $db->prepare($sql);
            if ($category_id > 0) {
                $pdo_statement->bindParam(':id', $category_id);
            }
            if ($search !== '') {
                $pdo_statement->bindParam(':zoek', $searching);
            }
            if ($price >= 0) {
                $pdo_statement->bindParam(':price', $price, PDO::PARAM_INT);
            }
            if ($price_higher <= 100 && $price_higher > 0) {
                $pdo_statement->bindParam(':price_higher', $price_higher, PDO::PARAM_INT);
            }
            $pdo_statement->bindParam(':start', $startpage, PDO::PARAM_INT);
            $pdo_statement->execute();
            return $pdo_statement->fetchAll();
        }

        public static function countArticles($filter, $category_id, $search, $searching, $price, $price_higher) {
            global $db;

            $sql = 'SELECT COUNT(*) FROM `article`' . $filter;
            $pdo_statement = $db->prepare($sql);
            if ($category_id > 0) {
                $pdo_statement->bindParam(':id', $category_id);
            }
            if ($search !== '') {
                $pdo_statement->bindParam(':zoek', $searching);
            }
            if ($price >= 0) {
                $pdo_statement->bindParam(':price', $price, PDO::PARAM_INT);
            }
            if ($price_higher <= 100 && $price_higher > 0) {
                $pdo_statement->bindParam(':price_higher', $price_higher, PDO::PARAM_INT);
            }
            $pdo_statement->execute();
            return $pdo_statement->fetchColumn();
        }

        public static function getArticleAdmin() {
            global $db;

            $sql = 'SELECT * FROM `article`';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute();
            return $pdo_statement->fetchAll();
        }
    }
    