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
</head>
<body>
<?php

include 'admin_sidebar.php'

?>

<div class="content">

<h1>Admin Dashboard</h1>

</div>

</body>
</html>