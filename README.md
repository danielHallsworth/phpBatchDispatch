Changes on this branch is that an autoloader 'psr-4' / composer is now  being used to load classes. Classes are found at src/models/

Worked to be picked up by another developer:
1. Improve the code architecture by implementing MCV
2. 'src/models/courierMovements.php' the function viewBatch() needs functionality adding to send data to the views where the information will be presented in a more user friendly way. the function currently returns an array of all movements for the batch ID passed in.
3. 'src/models/courierMovements.php' the function sendBatch() needs functionality to send data to the user either by Email/API etc.., the users preferred data transport method. this information is found in /model/courier/php'.
