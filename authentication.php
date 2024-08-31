<?php 
require ('connection.php');
session_start();
if ($_COOKIE["ID"] == "") {
    header("location: signin.php");
}


if (!empty($_COOKIE["ID"]))
{
    $mysqlSelect = "select * from signup where ID = '".$_COOKIE['ID']."'";
    $result=mysqli_query($conn,$mysqlSelect);
   while ($row = $result->fetch_assoc())
   {$_SESSION['ID']=$row['id'];
    $_SESSION['username']=$row['username'];
	
}}else{
    header("Location:signin.php");
};

?>


