<?php

    include("connect.php");
    include("functions.php");

    if(logged_in())
    {
        header("location:profile.php");
        exit();
    }

    $error = "";

    if(isset($_POST['submit']))
    {
        $emailID = $_POST['email'];
        $password = $_POST['password'];
        $checkBox = isset($_POST['keep']);
        
        if(email_exists($emailID,$con))
        {
            //$error = "Email exists";
            $result = mysqli_query($con,"SELECT password FROM users WHERE email='$emailID'");
            $retPassword = mysqli_fetch_assoc($result);

            if(md5($password) !== $retPassword['password'])
            {
                $error = "Password is incorrect";
            }
            else
            {
                $_SESSION['email'] = $emailID;

                if($checkBox == "on")
                {
                    setcookie("email",$emailID,time()+3600);
                }

                header("location: profile.php");
            }
        }
        else
        {
            $error = "Email doesnot exists";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
            <title>
                Log In Page
            </title>
            <link rel="stylesheet" href="css/styles.css"/>
    </head>

    <body>
        <div id="error">
            <?php 
                echo $error;
            ?>
        </div>    

        <div id="wrapper">

           

            <div id="form">
                <form method="POST" action="login.php" enctype="multipart/form-data">
                   
                    <label>Email Id:</label><br>                    
                    <input type="text" name="email"/><br><br>

                    <label>Password:</label><br>
                    <input type="password" name="password"/><br><br>

                    <input type="checkbox" name="keep"/>
                    <label>Keep me logged in</label><br><br>
                    
                    <input type="submit" name="submit" value="login"/><br><br>
                      <div id="menu">
                <a href="index.php" class="btn btn-success">Sign Up</a>
                <a href="login.php" class="btn btn-success">Login</a>
            </div>

                </form>
            </div>

        </div>

        <br>
        <br>

        <div class="container ">
            <div class="row justify-content-between">
                <div class="offset-lg-4 col-lg-4 align-self-center"> --
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>