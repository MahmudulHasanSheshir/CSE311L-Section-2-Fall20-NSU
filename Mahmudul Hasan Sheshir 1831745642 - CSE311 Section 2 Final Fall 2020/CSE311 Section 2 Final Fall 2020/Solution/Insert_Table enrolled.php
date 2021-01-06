<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "final");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO suppliers VALUES 
(1,'Acme Widget Suppliers','1 Grub St., Potemkin Village, IL 61801');
(2,'Big Red Tool and Die','4 My Way, Bermuda Shorts, OR 90305');
(3,'Perfunctory Parts','99999 Short Pier, Terra Del Fuego, TX 41299');
(4,'Alien Aircaft Inc.','2 Groom Lake, Rachel, NV 51902')
";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>