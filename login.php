<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<style>

.form-deg
{
    padding-top: 100px;
}

.label_deg
{
    display: inline-block;
    color: rgb(42, 116, 226);
    width: 100px;
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
    

}

.Login_form
{
    background-color: bisque;
    width: 350px;
    padding-top: 70px;
    padding-bottom: 70px;
}

.title_deg
{
     background-color: rgb(107, 75, 75);
     color: rgb(238, 227, 227);
     width: 350px;
     text-align: center;
     font-weight: bold;
     padding-top: 10px;
     padding-bottom: 10px;
     font-size:20px;
}
.back
{
    padding-left: 10px;
    padding-top: 10px;
}
</style>

<body>
    <div class="back">
        <a class="btn btn-primary" href="index.php">Back</a>
    </div>
    <center>

        <div class="form-deg">
            <center class="title_deg">
                Login
                <h4>
                    <?php

                    error_reporting(0);
                    session_start();
                    session_destroy();

                    echo $_SESSION['loginMessage'];

                    ?>

                </h4>
            </center>

            <form class="Login_form" action="login_check.php" method="POST">

                    <div>
                        <label class="label_deg" for="">Username</label>
                        <input type="text" name="username">
                    </div>

                    <div>
                        <label class="label_deg" for="">Password</label>
                        <input type="Password" name="password">
                    </div>

                    <!-- <div >
                    <label for="usertype">Usertype</label>
                    <select name="Usertype" id="Usertype">
                    <option value="admin">admin</option>
                    <option value="student">student</option>
                    </select>
                    </div> -->

                    <div>
                        
                        <input class="btn btn-primary" type="submit" name="submit" value="Login">
                    </div>
                    
                    <br>
                    <a href="Register.php">New user? Register here</a>
            </form>
        </div>

    </center>
    
</body>
</html>