<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "final");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO parts VALUES 
(1,'Left Handed Bacon Stretcher Cover','Red'),
(2,'Smoke Shifter End','Black'),
(3,'Acme Widget Washer','Red'),
(4,'Acme Widget Washer','Silver'),
(5,'I Brake for Crop Circles Sticker','Translucent'),
(6,'Anti-Gravity Turbine Generator','Cyan'),
(7,'Anti-Gravity Turbine Generator','Magenta'),
(8,'Fire Hydrant Cap','Red'),
(9,'7 Segment Display','Green')
";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>