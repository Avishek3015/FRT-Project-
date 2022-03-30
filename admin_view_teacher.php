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
$sql= "SELECT * FROM teacher";

$result= mysqli_query($data,$sql);

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
    <style>
        .table_th
        {
            padding: 15px;
            font-size: 15px;
        }
        .table_td
        {
            padding:22px;
            background-color: skyblue;
        }
    </style>
</head>
<body>
<?php

include 'admin_sidebar.php'

?>

<div class="content">
    <center>

<h1>All teachers</h1>
    <table border="1px" >
        <tr>
            <th class="table_th">Name</th>
            <th class="table_th">About</th>
            <th class="table_th">Image</th>
        </tr>
        <?php 
        while($info=$result->fetch_assoc())
        {
        ?>


        <tr>
            <td class="table_td">
                <?php echo"{$info['name']}" ?>
            </td>
            <td class="table_td">
            <?php echo"{$info['Description']}" ?>
            </td>
            <td class="table_td">
                <img height="100px" width="100px" src=" <?php echo "{$info['image']}" ?>" alt="img">
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    </center>
</div>

</body>
</html>