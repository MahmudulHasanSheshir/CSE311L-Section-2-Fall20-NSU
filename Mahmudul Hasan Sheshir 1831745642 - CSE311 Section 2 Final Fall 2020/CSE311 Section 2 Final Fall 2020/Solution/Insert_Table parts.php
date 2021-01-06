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
(1,3,0.50),
(1,4,0.50),
(1,8,11.70),
(2,3,0.55),
(2,8,7.95),
(2,1,16.50),
(3,8,12.50),
(3,9,1.00),
(4,5,2.20),
(4,6,1247548.23),
(4,7,1247548.23)
";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>