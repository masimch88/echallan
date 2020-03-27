<?php
    include "database.php";

    $id=$_GET['id'];
    $utype=mysqli_real_escape_string($conn,$_POST['utype']);

    if(!preg_match("/^([a-zA-Z' ]+)$/", $utype))
            {
                header("location:../usertype.php?msg=1");
                exit();
            }

    $sql= "UPDATE user_type SET   utype ='$utype' WHERE utype_id='$id'";
    $data=mysqli_query($conn,$sql);
    
if($data)
    {
        header("location:../usertype.php?msg=4");
    }
    else
    {
       /* header("location:../updateemp.php?id=<?php echo $id; ?>");*/
       echo("Error description: " . mysqli_error($conn));
    }

?>