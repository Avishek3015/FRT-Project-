<?php

session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolproject";

 // connecting to database
 $data=mysqli_connect($host,$user,$password,$db);
// checking the connection

if($data == false)
{
    dir("Error: Can't be connceted");
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];

    $check="SELECT * FROM users WHERE Name='$name'";
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

        $sql="INSERT INTO users(Id, Name, Email, Phone, Username, Password,Usertype) VALUES(NULL, '$name',  '$email', '$phone', '$username', '$password','$usertype')";

        $result= mysqli_query($data,$sql);

        if($result)
        {
            echo "<script type='text/javascript'>  
            alert('Data upoloaded successfully');
            </script>";
            // header("location:login.php");
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
    <title>Registration</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<style>
  label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;

        }
    .Register
    {
        background-color: Violet;
        width: 500px;
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .header{
        font-family: Garamond, serif;
        font-weight: bold;
    }
    body
    {
        background-color: MediumSeaGreen;
       
    }
    .back
    {
        padding-top: 20px;
        padding-left: 10px;
    }
    

        
</style>
<body>
    <div class="back">
        <a class="btn btn-primary" href="login.php">Back</a>
    </div>
    <center>
        <h1 class="header">Register here</h1>
    <div align="center" class="Register">

    <form action="" method= "POST">
        <div>
        <label class="label-text" for="">Name</label>
        <input class="input-deg" type="text" name="name" placeholder="Enter your name here">
        </div>
        
        <div>
        <label class="label-text" for="">Email</label>
        <input class="input-deg" type="text" name="email" placeholder="Enter your email">
        </div>

        <div>
        <label class="label-text" for="">Phone</label>
        <input class="input-deg" type="text" name="phone" placeholder="Enter your phone">
        </div>

        <div>
        <label class="label-text" for="">Username</label>
        <input class="input-deg" type="text" name="username" placeholder="Enter a username">
        </div>

        <div>
        <label for="">Password</label>
        <input type="password" name="password">
        </div>

        <div >
        <label for="usertype">Usertype</label>
        <select name="usertype" id="usertype">
            <option value="admin">admin</option>
            <option value="student">student</option>
        </select>
        </div>
        <br>
        <div>
            <input class="btn btn-danger" type="submit" name="submit" value="Submit">
        </div>
    </form>

    </div>
    </center>
</body>
</html>