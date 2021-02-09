<?php

/**
*  Class Product. create new product and return product name.
*/
 class Product{

  private $productName;	    
  
  /**
  * sets product name on instantiation of a 'Product'
  * @param $name
  */
  public function __construct($name){
    $this->productName   = $name;    
  }


  /**
  * returns the product name
  * @return string
  */
  public function getProductName(){
    return $this->productName;
  }


}