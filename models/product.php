<?php
class Product extends Database{
    public function getAllProductsInfo(){
        $query = 'SELECT * FROM ap_product';
        $queryObj = $this->dataBase->query($query);
        $products = $queryObj->fetchAll();
        return $products;
    }
}