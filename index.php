 <?php



include 'includes/loadClasses.php';

 // example data  

// 	instantiate new batch
$batch = new Batch();

// start new batch
$batch->setNewBatch();

// examples of how to alter batch number

//$batch->setCustomBatch(4);
//$batch->setReverseBatch(); 

// 	instantiate new products ($productName)
$toaster  = new Product('Toaster');
$kettle   = new Product('Kettle');
$tv       = new Product('TV');
$pillow   = new Product('Pillow');

// 	instantiate new Couriers ($courierName, $customAlgorithm, $dataTransportMethod)
$royalMail = new Courier('Royal Mail'
	                    ,'RM-algorithm'
	                    ,'Email');

$DPD       = new Courier('DPD'
						,'DPD-algorithm'
						,'API');

// 	instantiate new Courier Movements
$courierMovements = new CourierMovements();

// create movements using product name, current batch number, and courier object ($productName, $batchId, Courier $courier)
$courierMovements->createMovement($toaster->getProductName()
								 ,$batch->getCurrentBatch()
								 ,$royalMail);

$courierMovements->createMovement($kettle->getProductName()
								 ,$batch->getCurrentBatch()
								 ,$royalMail);

$courierMovements->createMovement($tv->getProductName()
								 ,$batch->getCurrentBatch()
								 ,$DPD);

$courierMovements->createMovement($pillow->getProductName()
								 ,$batch->getCurrentBatch()
								 ,$DPD);

// view all courier movements for a specific batch. ($selector, $batch)
var_dump($courierMovements->viewBatch($batch->getCurrentBatch()));

// can be hard coded to see specific batch.
//$courierMovements->viewBatch(4);


// send all courier movements for a specific batch ($selector, $batch). uses Courier specific method for sending data.
//$courierMovements->sendBatch($batch->getCurrentBatch());
echo "first git commit";

?>