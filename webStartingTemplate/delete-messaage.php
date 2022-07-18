<?php
require_once('logics/dbconnection.php');

$sqlDeleteMessage=mysqli_query($conn,"DELETE FROM contactus WHERE no ='".$_GET['id']."'");
if($sqlDeleteMessage)
{
    echo "User records deleted";
    header('location:students.php');
}
else
{
    echo "Error occured";
}
?>