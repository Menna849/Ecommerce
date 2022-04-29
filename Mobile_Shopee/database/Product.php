<?php

// use to fetch product data
class Product
{
 public $dp = null;

 public function __construct(DBController $dp)
 {
 if (!isset($dp->con))return null;
 $this->dp = $dp;
 }

 // fetch product data using getData Method
    public function getData($table = 'product'){
     $result=$this->dp->con->query("SELECT*FROM {$table}");

     $resultArray = array();
     // fetch product  data one by one
     while ( $item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
         $resultArray [] = $item;

     }
     return $resultArray;

    }
}