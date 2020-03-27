<?php
    include "database.php";
    include '../../functions/validationf.php';


    if(isset($_POST['submit']))
        {
           $utype=mysqli_real_escape_string($conn,$_POST['utype']);
           // $utype=$_POST['utype'];
           // $utype=filter_var ($utype , FILTER_SANITIZE_STRING);   


            if($a=isempty($_POST))
            {
                session_start();
                $_SESSION['error']=$a;
                //print_r($a);
                header("location:../usertype.php");
                exit();
            }

            if(!preg_match("/^([a-zA-Z' ]+)$/", $utype))
            {
                header("location:../usertype.php?msg=1");
                exit();
            }

        

            $sql= "INSERT INTO user_type(utype) 
            VALUES ('$utype')";
            $data=mysqli_query($conn,$sql);
            

            if($data)
            {
                header("location:../usertype.php?msg=2");
                exit();
            }
            else
            {
                header("location:../usertype.php?msg=3");
                exit();

            }
            
        }
        else
        {
            header("location:../usertype.php");
            exit();

        }
   
    



?>