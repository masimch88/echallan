<?php
include "database.php";

    $id=$_GET['id'];

    $sql="delete from user_type  WHERE utype_id='$id' ";
    $data=mysqli_query($conn, $sql);

    if($data)
    {
        header("location:../usertype.php?msg=5");
    }     
    else
    {
         echo("Error description: " . mysqli_error($conn));
    }
        




?>