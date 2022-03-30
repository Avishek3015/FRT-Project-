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
$data= mysqli_connect($host,$user,$password,$db);

if(isset($_POST['Add_teacher']))
{
    $t_name= $_POST['name'];
    $t_Description= $_POST['Description'];
    $file= $_FILES['image']['name'];
    $dst= "./image/".$file;

    $dst_db="image/".$file;
    move_uploaded_file($_FILES['image']['name'],$dst);

    $sql= "INSERT INTO teacher (name,Description,image) VALUES('$t_name','$t_Description', '$dst_db')";

    
    $result= mysqli_query($data,$sql);

    if($result)
    {
        header('location: admin_add_teacher.php');
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
    <title>Admin Dashboard</title>
    <style type="text/css">
        .div_deg
        {
            background-color: skyblue;
            padding-top: 70px;
            padding-bottom: 30px;
            width: 500px;
        }

    </style>
</head>
<body>
<?php

include 'admin_sidebar.php'

?>

<div class="content">
    <center>

<h1>Add Teacher</h1>
<br></br>

<div class="div_deg">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">Teacher Name</label>
            <input type="text" name="name">
        </div>
        <br></br>
        <div>
            <label for="">Description</label>
             <textarea name="Description"></textarea>

        </div>
        <br></br>
        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>
        <br></br>
        <div>
            
            <input type="submit" name="Add_teacher" value="Add" class="btn btn-primary">
        </div>
    </form>
</div>
</center>

</div>

</body>
</html>