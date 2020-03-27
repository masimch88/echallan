<?php
include "database.php";

    $id=$_GET['id'];

    $sql="delete from user  WHERE user_id='$id' ";
    $data=mysqli_query($conn, $sql);

    $sql="delete from employee WHERE emp_id='$id' ";
    $data=mysqli_query($conn, $sql);

    if($data)
    {
        header("location:../viewemp.php");
    }     
    else
    {
         echo("Error description: " . mysqli_error($conn));
    }
        




?>