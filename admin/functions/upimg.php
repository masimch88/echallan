<?php
    session_Start();
    include "database.php";

    if(isset($_POST["submit"]))
    {
        
        $id=$_SESSION['id'];
    
        $filename=$_FILES["image"]["name"];
        $tempname=$_FILES["image"]["tmp_name"];
        
        $folder="img/".$filename;
        move_uploaded_file($tempname,$folder);
        

        $sql= "UPDATE user SET img='$folder' WHERE user_id='$id'";
        $data=mysqli_query($conn,$sql);
        //echo("Error description: " . mysqli_error($conn));
        if($data)
           {
               header("location:../viewprofile.php?msg=1");
               exit();
           }
        else    
        echo("Error description: " . mysqli_error($conn));
    }

?>