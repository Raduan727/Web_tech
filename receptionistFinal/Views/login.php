
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background: white;
            color: white;
        }
        .header{
            background: black;
            color: white;

        }
        h1{
                     text-align: center;
        }
        form{
            background: white;
            color: black;
            height: 300px;
            width: 330px;
            text-align: center;
            margin-left: 40%;
        }
        input{
            margin: 10px;
            height: 30px;
            width: 300px;
        }
        .btn{
            background: green;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <h1 class="webName">MyHome</h1>
    <form action="../Controllers/login.php" method="post">
        <div class="subForm">
           <div class="header"><h1>Login Now</h1></div> 
        <input type="text" name="username" placeholder="Enter username" ><br>
        <input type="password" name="password" placeholder="Enter password" ><br>
            <input type="submit" name="submit" value="login now" class="btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </div>
    </form>
</body>
</html>
