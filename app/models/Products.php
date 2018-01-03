<?php
class Products{
    private $db;
    function __construct(){
        $this->db = new Database;
    }

    function getProduct(){
        $sql = "SELECT * FROM foods";
        return $this->db->loadMoreRows($sql);
    }
}
