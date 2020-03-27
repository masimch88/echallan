<?php
    session_start();
    include 'database.php';
    include 'validationf.php';

    if(isset($_POST['submit']))
    {
        ///data collection
        $email=$_POST['email'];
        $password=$_POST['password'];

        ///validation
      if($a=isempty($_POST))
        {
           
            $_SESSION['error']=$a;
            //print_r($a);
           header("location:../login.php");
            exit();
        }
           
        ////query
        $sql="SELECT  * FROM user WHERE uemail = '$email' and upassword='$password'";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);
        echo("Error description: " . mysqli_error($conn));


    if(mysqli_num_rows($data)==1)  /*only one account of email*/
    {
        if($row['utype_id']==1)
        {
            $_SESSION['admin_id']=$row['user_id'];
            $_SESSION['uname']=$row['uname'];
            $_SESSION['img']=$row['img'];
            header("location:../admin/index.php");    /*if true then valid otherwise invalid*/
            exit();
        }
        else if($row['utype_id']==2)
        {
            $_SESSION['emplyee_id']=$row['user_id'];
            $_SESSION['uname']=$row['uname'];
            header("location:../emp/index.php");    /*if true then valid otherwise invalid*/
            exit();
        }
        else
        {
            $_SESSION['id']=$row['user_id'];
            $_SESSION['uname']=$row['uname'];
            header("location:../index.php");    /*if true then valid otherwise invalid*/
            exit(); 
        }
    }
    else
    {
        header("location:../login.php");
    }

    }
    else
    {
        header("location:../login.php");
    }
 



?>