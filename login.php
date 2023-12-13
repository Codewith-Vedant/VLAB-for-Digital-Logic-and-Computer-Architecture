<?php 
    include("db.php");
    include("connect.php")
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
<meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
.link{
        opacity: 1;
    transform: none;
    backdrop-filter: blur(.1rem);
    background: hsla(0,0%,100%,.05);
    border: .2rem solid rgba(165, 42, 42, 1);
    border-radius: 2rem;
    box-shadow: 0 0 0.3rem 0.01rem #ff8f8f;
    box-sizing: border-box;
    flex-direction: column;
    height: 20rem;
    padding: 1rem;
    transition: all .2s ease-out;
    width: 15rem;
    align-items: center;
    display: flex;
    justify-content: center;
    
    }
    .link1{
        opacity: 1;
    transform: none;
    backdrop-filter: blur(.1rem);
    background: hsla(0,0%,100%,.05);
    border: .2rem solid rgba(165, 42, 42, 1);
    border-radius: 2rem;
    box-shadow: 0 0 0.3rem 0.01rem #ff8f8f;
    box-sizing: border-box;
    flex-direction: column;
    height: 20rem;
    padding: 0.5rem;
    transition: all .2s ease-out;
    width: 15rem;
    align-items: center;
    display: flex;
    justify-content: center;
    }
 body {
font-family: Arial, sans-serif;
background-color: #f2f2f2;
margin: 0;
background-image: url('./geometric-abstract-light-blue-background-for-website-wallpapers-bussines-templates-vector.jpg');
}
        .red-style{
        background-color: brown; /* color for the top strip */
        height: 150px; /* Height of the strip */
        width: 100vw; /* 100% of the viewport width */
        margin: 0; /* Remove margin to cover entire width */
        padding: 0; /* Remove padding to cover entire width */
        text-align: center;
        position: absolute;
    }
        h1 {
        text-align: left;
        }
        .red-strip {
            background-color: brown; /* Red color for the top strip */
                    height: 190px; /* Height of the strip */
                    width: 100vw; /* 100% of the viewport width */
                    margin: 0; /* Remove margin to cover entire width */
                    padding: 0; /* Remove padding to cover entire width */
        }
        .tab {
        color: white;
        text-decoration: none;
        padding: 20px 20px;
        border-radius: 111px;
        transition: background-color 0.3s ease;
        }
        .tab1{
            color: coral;
        text-decoration: none;
        padding: 20px 20px;
        border-radius: 111px;
        transition: background-color 0.3s ease;
        background-color: brown;
        box-shadow: 10px 10px;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }
        .tab:hover {
        background-color: #900; /* Change the color on hover */
        }
        /* Center the login box */
        .container {
            max-width: 500px;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin: 20px auto;
            padding: 20px;
        }
        .form-group {
            margin: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Red strip at the top -->
    <div class="red-strip">
        <img src="./Somaiya1.png" width="300" height="100">
        <img src="./Trust.png" width="100" height="100" style="position: absolute;left: 93.5%;">
        <br>
        <br>
        <br>
        &nbsp;
        <a href="login.php" class="tab"><b><u>Login</u></b></a>
        &nbsp;
        <a href="signup.php" class="tab">Sign Up</a>
    </div>

    <!-- Your login box -->
    <div class="container">
        <h2 style="position:absolute;left: 46%; color: #e95151;"><b>Welcome</b></h2>
        <br>
        <br>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username" style="color: #e95151;">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password" style="color: #e95151;">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <input type="submit" id="btn" value="Login" name = "submit"/>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
    <br>
    <br>
    <footer>
        <div class="red-style">
            <p>
                Department Of Computer Engineering
            </p>
            
             <p>© 2023-24</p>
           
           <p>Guided by:  Prof. Pradnya Patil</p>
         
           <p>Developed by: Vedant Pillai, Abbas Rajpurwala, Aditya Sahaharkar, Neel Shah</p>
          
        </div>
    </footer>
</body>
</html>