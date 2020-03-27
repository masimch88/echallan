<?php
session_start();
error_reporting(0);
include "database.php";
include '../../functions/validationf.php';


    if(isset($_POST['submit']))
    {
        
        sanatization($_POST);
        $password=$_POST['password'];
        $email=$_POST['email'];
        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $emp_post=$_POST['emp_post'];
       /* $filename=$_FILES["img"]["name"];
        $tempname=$_FILES["img"]["tmp_name"];
        $folder="img/".$filename;
        move_uploaded_file($tempname,$folder);*/
        $user_type_id=2;

        $_SESSION['test']=3;




        
       if($a=isempty($_POST))
        {
            
            $_SESSION['error']=$a;
            
            //print_r($_SESSION['error']);
           header("location:../addemp.php?msg=2");
            exit();
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            header("location:../addemp.php?msg=3");
            exit();
        }

        if(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password))
        {
            header("location:../addemp.php?msg=7");
            exit();
        }
        if(!preg_match("/^([a-zA-Z' ]+)$/", $name))
        {
            header("location:../addemp.php?msg=4");
            exit();
        }
        if(!preg_match("/^([a-zA-Z' ]+)$/", $emp_post))
        {
            header("location:../addemp.php?msg=5");
            exit();
        }

       /* if (!filter_var($dept, FILTER_VALIDATE_INT)) 
        {
            header("location:../addemp.php?msg=6");
            exit();
        }*/


        $sql= "INSERT INTO user( uemail, upassword, uname, utype_id,udept_id) 
        VALUES ('$email','$password','$name','$user_type_id','$dept')";
        $data=mysqli_query($conn,$sql);
        
        
        $sql="select * from user where uemail='$email'";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);
        $user_id=$row['user_id'];
        
       $sql= "INSERT INTO employee(emp_id, emp_post) 
        VALUES ('$user_id','$emp_post')";
        $data=mysqli_query($conn,$sql);
        
        if($data)
            {

               // echo("Error description: " . mysqli_error($conn));
                header("location:../addemp.php?msg=1");
                exit();
            }
            else
            {
                
                echo("Error description: " . mysqli_error($conn));

            }
        
    }
    else
    {
        header("location:../addemp.php");
        exit();

    }
   
    



?>