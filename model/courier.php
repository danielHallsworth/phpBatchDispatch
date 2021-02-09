<?php

/**
*  Class Courier. create new courier 
*/
 class Courier{

  private $customAlgorithm; 
  private $courierName;
  private $courierDataTransport;  

  /**
  * sets Courier name, customer algorithm for consignment numbers, data transport method on instantiation of a 'Courier'
  * @param $courierName
  * @param $customAlgorithm
  * @param $dataTransportMethod
  */
  public function __construct($courierName, $customAlgorithm, $dataTransportMethod){
    $this->courierName          = $courierName;
    $this->customAlgorithm      = $customAlgorithm;     
    $this->courierDataTransport = $dataTransportMethod;
  }

  /**
  * returns the couriers consignment algorithm
  * @return string
  */
  public function getCourierAlgorithm(){
    return $this->customAlgorithm;
  }   

  /**
  * returns the couriers name
  * @return string
  */
  public function getCourierName(){
    return $this->courierName;
  }

  /**
  * returns the couriers data transport method
  * @return string
  */
  public function getDataTransportMethod(){
    return $this->courierDataTransport;
  }

  /**
  * sends consingnment to Courier depending on their data transport method.
  * further development needed to actually send data to Couriers
  * @return string
  */
  public function sendCourierData($method, $consignmentId){
     return 'Product: ' . $consignmentId . ' Sent via: '. $method;     
  }

 }