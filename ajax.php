<?php
session_start();
error_reporting(0);
include "connect.php";
foreach ($_GET as $name => $value) { $$name = $value; }
foreach ($_POST as $name => $value) { $$name = $value; }


function getdata($query)
{
$con=mysqli_connect("localhost","root","","foodordering");
    if(!mysqli_query($con,$query)){echo mysqli_error($con)." ".$query;}
    $getdata=mysqli_fetch_array(mysqli_query($con,$query));
    return $getdata;
}

if($act=="savepass")
{

    $pass=getdata("select password from registration where id=".$_SESSION['userid']);
   // echo $pass[0];
    if($pass[0]==$old_pass)
    {
        if(mysqli_query($con,"update registration set password='$new_pass' where id=".$_SESSION['userid']))
        {
            echo "ok";
        }
        else
        {
            echo "Error";
        }
    }
    else
    {
        echo "Wrong old password.";
    }
}
?>

