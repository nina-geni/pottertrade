<?php
    
    class Review extends BaseModel {

        protected $table = 'review';
        protected $pk = 'id';

        public static function getReviewsForArticle($article_id) {
            global $db;

            $sql = 'SELECT * FROM `review` WHERE `article_id` = :article_id';
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute([
                    ':article_id' => $article_id
                ]);
            return $pdo_statement->fetchAll();
        }
    }