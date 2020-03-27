<?php
include "database.php";

    $id=$_GET['id'];

    $sql="delete from dept  WHERE dept_id='$id' ";
    $data=mysqli_query($conn, $sql);

    if($data)
    {
        header("location:../department.php?msg=5");
    }     
    else
    {
         echo("Error description: " . mysqli_error($conn));
    }
        




?>