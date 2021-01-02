<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311l_section_2_fall_20");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "SELECT d.Department_Name , d.Location_id, COUNT(*) AS NUMBER OF PEOPLE , round(avg(e.Salary),2)
 FROM departments d, employees e  
 WHERE e.Department_ID=d.Department_id 
 GROUP BY d.Department_name,d.Location_id;
";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>