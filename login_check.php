<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject";


// database conncetion 

$data= mysqli_connect($host,$user,$password,$db);


if($data===false)
{
    die("Connection error");
}

 if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name= $_POST['username'];
    $pswrd=$_POST['password'];
   


    $sql="SELECT * FROM users WHERE Username='".$name."' AND Password='".$pswrd."' ";

   $result=mysqli_query($data,$sql);

   $row=mysqli_fetch_array($result);


    if($row["Usertype"]=="student")
    {
      $_SESSION['Username']=$name;
      $_SESSION['Usertype']="student";

      header("location:studenthome.php");
   }
    elseif($row["Usertype"]=="admin")
   {
        $_SESSION['Username']=$name;
        $_SESSION['Usertype']="admin";

        header("location:adminhome.php");
   }
    else 
    {
      
       $message= "Invalid username or password";

       $_SESSION['loginMessage']=$message;
       header("location:login.php");
    }







}   


?>