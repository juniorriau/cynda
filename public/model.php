<?php

require 'system/pdo.php';

class model {

    public function getUser($id) {
        
        $db 	= Database::getLink();
        $stmt 	= $db->prepare('SELECT * FROM `users` WHERE `id` = ? LIMIT 1');
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

}