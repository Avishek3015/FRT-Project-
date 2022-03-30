<?php
error_reporting(0);
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

$sql="SELECT * FROM student";

$result=mysqli_query($data,$sql);


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

        .table_th
        {
            padding: 12px;
            font-size: 18px;
        }
        .table_td
        {
            padding: 11px;
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

<h1>Student Data</h1>
<?php
if($_SESSION['message'])
{
    echo $_SESSION['message'];
}
unset($_SESSION['message']);

?>

<br></br>

<table border="1px">
    <tr>
        <th class="table_th">Name</th>
        <th class="table_th">Email</th>
        <th class="table_th">Phone</th>
        <th class="table_th">Subject</th>
        <th class="table_th">Password</th>
        <th class="table_th">Delete</th>
        <th class="table_th">Update</th>
    </tr>
    <?php

        while($info=$result->fetch_assoc())
        {
            
        

    ?>
    <tr>
        <td class="table_td">
            <?php echo "{$info['Name']}"?>
        </td>

        <td class="table_td">
        <?php echo "{$info['Email']}"?>
        </td>

        <td class="table_td">
        <?php echo "{$info['Phone']}"?>
        </td>

        <td class="table_td">
        <?php echo "{$info['Subject']}"?>
        </td>
        <td class="table_td">
        <?php echo "{$info['Password']}"?>
        </td>
        <td class="table_td">
        <?php echo "<a class='btn btn-danger' onClick=\"javascript:return confirm('Are you sure to delete this student?');\" href='delete.php?student_id={$info['Id']}'>Delete</a>"; ?>
        </td>
        <td class="table_td">
        <?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>"?>
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