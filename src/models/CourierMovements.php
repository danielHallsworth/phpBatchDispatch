<?php


namespace Psr\Models;
 /**
 *  Class CourierMovements. This groups Batch, Product and Courier classes together. I chose to put this into a seperate class to keep class logic seperate e.g. if I added more logic into the Batch class it wouldn't affect this one.
 */

 class CourierMovements{

 	private $courier;
 	private $storeMovements;
 	private $uniqueConsignmentNumber = 1; 	
  private $returnBatchForView;


  /**
  * Add product name, Batch number of the movemet. Courier Object this was done as Courier logic is required such as customer algorithm, data transport method etc.. 
    using the Courier Object made this class more OOP
  * @param $productName  
  * @param $batchId
  * @param $courier (Object)
  */
 	public function createMovement($productName, $batchId, Courier $courier){ 		       
     /* each courier movement is stored in an array. Ideally this would be stored in a database. array format:
        product name
        courier (Object)
        batch (number of the batch number of movement)
        courier algorithm: get the algorithm of the courier and then concat a sequential number seperated by a '-' to the end to keep each movement unique
     */           
 		  $this->courier          = $courier; 		       
 		  $this->storeMovements[] = [$productName, $courier, $batchId, $this->courier->getCourierAlgorithm().'-'.$this->uniqueConsignmentNumber];          
 		  $this->uniqueConsignmentNumber += 1;
 	}


  /**
  * pass in a batch ID. view the movements for that batch
  * @param $batch
  * @return Array of Courier movements per batch
  */
 	 public function viewBatch($batch){

    // Loop through all Courier Movements. ideally this information would come from a database passing in batchId as a parameter then return all records containing that batch number
 	 	foreach ($this->storeMovements as $viewMovement) {
     
      // all records for the batch number passed in. 
 	 		if ($batch === $viewMovement[2]){
        // view all products for batch        
        $this->returnBatchForView[] = [$viewMovement[0],$viewMovement[1]->getCourierName(),$viewMovement[2],$viewMovement[1]->getDataTransportMethod()];        
 	 		} 	 		  		      
 	 	}
      // after all movements for the batch have been stored into an array return
      return $this->returnBatchForView;
 	 }


   /**
  * Process which sends all movements per batch by passing in a batch ID. send the movements for that batch
  * @param $batch
  * 
  */

   public function sendBatch($batch){
      
      foreach ($this->storeMovements as $viewMovement) {
     
      // all records for the batch number passed in. 
      if ($batch === $viewMovement[2]){
          // send all movements to Courier pass in transport method. and consignment id
          $viewMovement[1]->sendCourierData($viewMovement[1]->getDataTransportMethod(), $viewMovement[3]);          
      }
        
   }  
}
}