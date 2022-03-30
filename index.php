<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}

// $host="localhost";
// $user="root";
// $password="";
// $db="schoolproject";
// $data= mysqli_connect($host,$user,$password,$db);

// $sql="SELECT * teacher";
// $result=mysqli_query($data,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
    <title>Student Management System</title>
</head>
<style>
nav
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 80px;
    padding: 10px 71px;
    box-sizing: border-box;
    background: rgba(40, 228, 118, 0.959);
   z-index: 1;
}
nav .Logo
{
    padding: 10px 20px;
    height: 80px;
    float: left;
    font-size: 30px;
    font-weight: bold;
    color: rgb(50, 4, 177);
    font-family:Garamond;
}
nav ul
{
    list-style: none;
    float: right;
    margin: 0;
    padding: 0;
    display: flex;
    font-family: Lucida Handwriting;
}
</style>

<body>
    <nav>
        <label class="Logo">My School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="index.php #Admission">Admission</a></li>
            <li><a href="">About</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="Section1">
        
        <img class="main_img" src="Background.jpg" alt="School">

    </div>

    <div class="container">
        <label class="flabel" for="">About</label>
        <br></br>
        <div class="row">

            <div class="col-md-4">
                <img class="Class_jpg" src="school.jpg" alt="Classroom">
            </div>

            <div class="col-md-8">
                    
                    <h4>Welcome to my Webpage!<br><br>This is the school student management website which is my first web development project, thanks to MS Azure which excited me to learn new things.  </h4>
            </div>
        </div>
    </div>

                <!-- FACILITIES -->

    <center>
        <h1>Our Facilites</h1>
    </center>

    <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img class="park" src="Park.jpg" alt="">
                    <h4 style="font-family:Times New Roman;">Play is a spontaneous activity children engage in to have fun. For that we have a nice playground </h4>
                </div>

                <div class="col-md-4">
                    <img class="class" src="classroom New.jpg" alt="">
                    <h4 style="font-family:Times New Roman;">Reimagining the Modern Classroom</h4>
                </div>

                <div class="col-md-4">
                    <img class="Bus" src="Bus.png" alt="">
                    <h4 style="font-family:Times New Roman;">We provide the gps enabled bus available to your door with utmost security</h4>
                </div>

            </div>
    </div>


    <!-- TEACHER -->

    <center>
        <h1>Our Teachers</h1>
    </center>
<div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <img class="teacher" src="teacher.jpg" alt="teacher">
               <h4 style="font-family:Times New Roman;">Our Maths faculty who has many years of experience of teaching</h4>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="teacher2.jpg" alt="teacher">
            <h4 style="font-family:Times New Roman;">Our physics teacher who makes physics fun</h4>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="teacher3.jpg" alt="teacher">
            <h4 style="font-family:Times New Roman;">Our english teacher having many years of experience</h4>
            </div>
            
            
    
    </div>


</div>



<!-- COURSES -->
<center>
        <h1>Our Courses</h1>
    </center>

<div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="all classes.jpg" alt="teacher">
                <h3>Class V to X</h3>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="personality.png " alt="teacher">
            <h3>Personality Development</h3>
          
            </div>

            <div class="col-md-4">
            <img class="teacher" src="coding.png" alt="teacher">
            <h3>Coding for kids </h3>
          
            </div>
        
    
    </div>


</div>




                  <!-- Admission Form -->
    <center>
        <h1 class="adm" id="Admission">Admission Form</h1>
    </center>

    <div align="center" class="admission_form">


        <form action="data_check.php" method="POST">

            <div class="adm_name">
                <label class="label-text" for="">Name</label>
                <input class="input-deg" type="text" name="name" placeholder="Enter your name here">
            </div>

            <div class="adm_name">
                <label class="label-text" for="">Email</label>
                <input class="input-deg" type="text" name="email" placeholder="Enter your email here">
            </div>

            <div class="adm_name">
                <label class="label-text" for="">City</label>
                <input class="input-deg" type="text" name="city" placeholder="Where do you live in?">
            </div>

            <div class="adm_name">
                <label class="label-text" for="">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div class="adm_btn">
                
                <input class="btn btn-primary" type="submit" id= "submit" value="apply" name="apply">
            </div>

        </form>

    </div>

    <footer>
        <h3 class="footer-text"> copyright@ My School</h3>
    </footer>

   
</body>
</html>