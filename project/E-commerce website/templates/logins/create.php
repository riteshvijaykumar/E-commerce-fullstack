<!DOCTYPE html>
<html>
    <head>
        <title>E-commerce</title>
        <style>

            body{
                background-color: rgb(112, 189, 199);
                font-family: sans-serif;
            }
            .container {
                width: 300px;
                height: 320px;
                margin: 150px auto;
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow:10px 10px 10px rgba(0, 0, 0, 0.1);
                
            }

            .container button{
                background-color: rgb(112, 189, 199);
                color: white;
                border-radius: 5px;
                padding: 5px;
                padding-left: 40%;
                padding-right: 40%;
                border-width: 0px;
                margin-top: 20px;
            }

            .container input{
                border-radius: 5px;
                border-width: 1px;
                padding: 5px;
                padding-left: 20px;
                padding-right: 28px;
                margin-left: 20px;
                width: 200px;
            }
            .container button{
                margin-left: 10px;
            }
            h1{
                text-align: center;
            }
            h4{
                margin-left: 20px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <form action="create.php" method="post">
                <h1>CREATE ACCOUNT</h1>
                <h4>username</h4>
                <input type="text" name="username" placeholder="Username" class="user"><br><br>
                <h4>password</h4>
                <input type="password" name="password" placeholder="Password" class="user"><br><br>
                <button type="submit">SUBMIT</button>
            </form>
        </div>

        <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "login";

            $conn = new mysqli($servername, $username, $password, $dbname);

            $name = $_POST['username'];
            $pass = $_POST['password'];

            $sql = "INSERT INTO users (username, password) VALUES ('$name', '$pass')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>console.log('New record created successfully')</script>";
                echo "<script>alert('Account created successfully!')</script>";
                echo "<script>console.log('Redirecting to login page...')</script>";
                echo "<script>window.location.href = '/project/E-commerce website/templates/logins/login.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        ?>
    </body>
</html>

