<?php

namespace Psr\Models;


/**
  *  Class Batch. start new batch, reverse, set custom and return current batch
  */
  class Batch {

	private $batchNumber = 0;

  /**
  *  increments the current batch by 1, used when a new work day starts
  */
	function setNewBatch(){
		$this->batchNumber += 1;
	}

  /**
  *  ability to reverse the current batch if required
  */
  function setReverseBatch(){
    $this->batchNumber -= 1;
  }

  /**
  *  set custom batch if required
  * @param $customBatch
  */
  function setCustomBatch($customBatch){
    $this->batchNumber = $customBatch;
  }


  /**
  * returns the current batch 
  * @return integer
  */
	function getCurrentBatch(){
		return $this->batchNumber;
	}

}