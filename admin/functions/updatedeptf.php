<?php
    include "database.php";

    $id=$_GET['id'];

    $dep_name=mysqli_real_escape_string($conn,$_POST['dep_name']);
    
    if(!preg_match("/^([a-zA-Z&' ]+)$/", $dep_name))
            {
                header("location:../department.php?msg=1");
                exit();
            }

    $sql= "UPDATE dept SET   dep_name ='$dep_name' WHERE dept_id='$id'";
    $data=mysqli_query($conn,$sql);
    
if($data)
    {
        header("location:../department.php?msg=4");
    }
    else
    {
       /* header("location:../updateemp.php?id=<?php echo $id; ?>");*/
       echo("Error description: " . mysqli_error($conn));
    }

?>