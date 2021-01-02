<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mid-term-su");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO faculty VALUES (142519864,'Ivana Teach',20),
    (242518965,'James Smith',68),
    (254099823,'Patricia Jones',68),
    (489456522,'Linda Davis',20),
    (287321212,'Michael Miller',12),
    (248965255,'Barbara Wilson',12),
    (090873519,'Elizabeth Taylor',11),
    (489221823,'Richard Jackson',33),
    (548977562,'Ulysses Teach',20)
";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>