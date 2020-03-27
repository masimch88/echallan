<?php
    include "database.php";

    $id=$_GET['id'];
    $mail=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $utype=$_POST['utype'];
    $dept=$_POST['dept'];
    $emp_post=$_POST['emp_post'];
    $sql= "UPDATE user SET   upassword ='$password', uemail ='$mail', uname ='$name'  WHERE user_id='$id' ";
    $data=mysqli_query($conn,$sql);
    $sql= "UPDATE employee SET   emp_post='$emp_post' WHERE emp_id='$id' ";
    $data=mysqli_query($conn,$sql);
    
if($data)
    {
        header("location:../viewemp.php");
    }
    else
    {
       /* header("location:../updateemp.php?id=<?php echo $id; ?>");*/
       echo("Error description: " . mysqli_error($conn));
    }

?>