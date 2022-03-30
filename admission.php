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

$sql="SELECT * from admission";
$result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Dashboard</title>

    <?php
        include 'admin_css.php';
    ?>

</head>
<body>
<?php

include 'admin_sidebar.php'

?>
<div class="content">
    <center>
    
<h1>Applied Admissions</h1>

<br></br>
<table border="1px">
    <tr>
        <th style="padding: 10px; font-size: 15px;">Name</th>
        <th style="padding: 10px; font-size: 15px;">Email</th>
        <th style="padding: 10px; font-size: 15px;">City</th>
        <th style="padding: 10px; font-size: 15px;">Message</th>
        
    </tr>

        <?php
            while($info=$result->fetch_assoc())
            {

                
                ?>
        <tr>
            <td style="padding: 10px;">
                <?php echo"{$info['Name']}"; ?>
            </td>
            <td style="padding: 10px;">
            <?php echo"{$info['Email']}"; ?>
            </td>
            <td style="padding: 10px;">
            <?php echo"{$info['City']}"; ?>
            </td>
            <td style="padding: 10px;">
            <?php echo"{$info['Message']}"; ?>
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