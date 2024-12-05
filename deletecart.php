<?php $id = $_GET['id'];
include "connect.php";
error_reporting(0);
mysqli_query($con,"delete from addcart where id='$id'");
header("location:cart.php");
?>