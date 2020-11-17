<?php
    
    class Category extends BaseModel {

        protected $table = 'category';
        protected $pk = 'id';

        public static function addCategory($new_category) {
            global $db;

            $sql = "INSERT INTO category (`title`) VALUES (:title)";

            $sth = $db->prepare($sql);
            $sth->execute([
                ':title' => $new_category,
            ]);
        }

        public static function editCategory($title, $id) {
            global $db;

            $sql = "UPDATE category SET `title` = :title WHERE `id` = :id";

            $sth = $db->prepare($sql);
            $sth->execute([
                ':title' => $title,
                ':id' =>$id
            ]);
        }
    }