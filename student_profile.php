<?php
session_start();

if(!isset($_SESSION['Username']))
{
    header("location:login.php");
}
elseif($_SESSION['Usertype']=='admin')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data= mysqli_connect($host,$user,$password,$db);

$name= $_SESSION['Username'];
$sql= "SELECT * FROM users WHERE Username='$name'";
$result= mysqli_query($data,$sql);
$info= mysqli_fetch_assoc($result);


if(isset($_POST['update']))
{
    $s_email= $_POST['email'];
    $s_phone= $_POST['phone'];
    $s_password= $_POST['password'];

    $sql= "UPDATE users SET email='$s_email', phone='$s_phone', password='$s_password' WHERE Username='$name'";
    $result2= mysqli_query($data,$sql);

    if($result2)
    {
       header("location: student_profile.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="studenthome.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="studenthome.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">

        .div_deg
        {
            background-color: skyblue;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
</style>
</head>
<body>
    <?php
        include 'student_sidebar.php'
    ?>

    <div class="content">
        <center>
            <h1>Update Your Profile</h1>
            <br></br>
    <form action="#" method="POST">
        <div class="div_deg">

    
    <div>
    <label for="">Email</label>
   <input type="email" name="email" value=<?php echo "{$info['Email']}" ?> >
    </div>
    <div>
    <label for="">Phone</label>
   <input type="number" name="phone" value=<?php echo "{$info['Phone']}" ?>>
    </div>
    <div>
    <label for="">Password</label>
   <input type="text" name="password" value=<?php echo "{$info['Password']}" ?>>
    </div>
    
   <input class="btn btn-warning" type="submit" name="update" value="Update" >
    </div>
    </div>
    </form>
    </center>   

    </div>
</body>
</html>