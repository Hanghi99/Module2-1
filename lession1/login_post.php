<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
         
        
    
        .login {
            width:230px;
            margin:0 auto;
            padding:10px;
            border:1px #CCC solid;
            min-height: 200px;
            background-color : #FF7F50;
            border-radius : 20px;
            
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px;
             margin:5px;
           
        }
        .nutbam {
            text-align : center;
            background-color: ##F6B297;
            font-size: 12px;
            border-radius:15px;
        }
    </style>
<body >
<form method="POST" >
    <div class="login">
        <h2> Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="25"  placeholder="username" />
        </label>
        <label>
            Password:
            <input type="password" name="password" size="25" placeholder="password" />
        </label>
        <div style ="text-align : center;" ><input type="submit" value="Sign in" class="nutbam"/></div>
    </div>
    
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === "admin" && $password === "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
} 
