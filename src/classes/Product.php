<?php

namespace Store;

class Product {

    public function getImages($id) {
        $query = $this->db->prepare("SELECT `imageFilePath` FROM `images` WHERE `productId` = :id");

        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll();
    }
}