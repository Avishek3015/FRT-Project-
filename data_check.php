<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("Connection error");
}

if(isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_city=$_POST['city'];
    $data_message=$_POST['message'];

    $sql="INSERT INTO admission(name,email,city,message) VALUES( '$data_name','$data_email',' $data_city',' $data_message')";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']="your application submitted successfully";
        header("location:index.php");
    }
    else
    {
        echo "Appy Failed";
    }
}

?>