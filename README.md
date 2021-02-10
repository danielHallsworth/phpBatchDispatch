Changes on this branch are included an autoloader using psr-4.

Worked to be picked up by another developer:
1. Improve the code architecture by implementing MCV
2. '/model/courierMovements.php' the function viewBatch() needs functionality adding to send data to the views where the information will be presented in a more user friendly way. the function currently returns an array of all movements for the batch ID passed in.
3. '/model/courierMovements.php' the function sendBatch() needs functionality to send data to the user either by Email/API etc.., the users preferred data transport method. this information is found in /model/courier/php'.
