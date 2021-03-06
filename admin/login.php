
<?php
session_start();
include_once 'dbconnect.php';
    $con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if(!$con){
    die("Connection Error: ".mysqli_connect_error());

    }
    else{

        $str="SELECT * FROM admin_pnl WHERE email='".$_POST['email']."' and password='".$_POST['password']."';";
        $result=mysqli_query($con,$str);
     
        if(mysqli_num_rows($result)>0)
        {

            $row=mysqli_fetch_array($result);
            $_SESSION['usrnm']=$row['email'];
            header("Location:upload.html");

         }
         else{
         	echo '<h1>incorect username or password</h1>';


         }
    }



?>