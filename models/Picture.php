<?php
    
    class Picture extends BaseModel {

        protected $table = 'picture';
        protected $pk = 'id';

        public static function getPicturesForArticle($article_id) {
            global $db;

            $sql = 'SELECT * FROM `picture` WHERE `article_id` = :article_id';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute([
                    ':article_id' => $article_id
                ]);
            return $pdo_statement->fetchAll();
        }

        public static function addPicturesWithArticle($photo, $article_id) {
            global $db;

            $sql = "INSERT INTO picture (`path`, `article_id`) VALUES (:path, :article_id)";
            $sth = $db->prepare($sql);
            $sth->execute([
                ':path' => $photo,
                ':article_id' =>$article_id,
            ]);
        }
    }
    