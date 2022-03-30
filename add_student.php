<?php
session_start();

if(!isset($_SESSION['Username']))
{
    header("location:login.php");
}
elseif($_SESSION['Usertype']=='student')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_subject=$_POST['subject'];
    $user_password=$_POST['password'];
    $usertype="student";

    $check="SELECT * FROM student WHERE Name='$username'";
    $check_user= mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {
        echo "<script type='text/javascript'>  
            alert('Username already exists');
            </script>";
      
    }
    else
    {

        
        $sql="INSERT INTO student(Id, Name, Email, Phone, Subject, Password) VALUES(NULL, '$username',  '$user_email', '$user_phone', '$user_subject', '$user_password')";
        
        $result= mysqli_query($data,$sql);
        
        
        
        if($result)
        {
            echo "<script type='text/javascript'>  
            alert('Data upoloaded successfully');
            </script>";
        }
        else
        {
            echo "Upload Failed";
        }
        
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'admin_css.php';
    ?>
    <title>Add Dashboard</title>
    <style type="text/css">
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .div_deg
        {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
<?php

include 'admin_sidebar.php'

?>

<div class="content">
    <center>

<h1>Add Student</h1>

<div class="div_deg">
    <form action="#" method="POST">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="Email" name="email">
        </div>
        <div>
            <label for="">Phone</label>
            <input type="number" name="phone">
        </div>
       
        <div>
            <label for="">Subject</label>
            <input type="text" name="subject">
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>
        <div>
            
            <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
        </div>
    </form>
</div>

</div>
</center>

</body>
</html>