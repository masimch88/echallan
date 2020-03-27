<?php
    include "database.php";
    include '../../functions/validationf.php';


    if(isset($_POST['submit']))
        {
            $dep_name=mysqli_real_escape_string($conn,$_POST['dep_name']);



            if($a=isempty($_POST))
            {
                session_start();
                $_SESSION['error']=$a;
                //print_r($a);
                header("location:../department.php");
                exit();
            }

            if(!preg_match("/^([a-zA-Z&' ]+)$/", $dep_name))
            {
                header("location:../department.php?msg=1");
                exit();
            }

        

            $sql= "INSERT INTO dept(dep_name) 
            VALUES ('$dep_name')";
            $data=mysqli_query($conn,$sql);
            

            if($data)
            {
                header("location:../department.php?msg=2");
                exit();
            }
            else
            {
                header("location:../department.php?msg=3");
                exit();

            }
            
        }
        else
        {
            header("location:../department.php");
            exit();

        }
   
    



?>