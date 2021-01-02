<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mid-term-su");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE catalog(
    sid INT(9),
    pid INT(9),
    cost FLOAT(10),
    PRIMARY KEY(sid,pid),
    FOREIGN KEY(sid) REFERENCES suppliers(sid),
    FOREIGN KEY(pid) REFERENCES parts(pid)
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>