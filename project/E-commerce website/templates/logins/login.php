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
                height: 450px;
                margin: 150px auto;
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow:10px 10px 10px rgba(0, 0, 0, 0.1);
                
            }

            .login{
                text-decoration: none;
                color: #fff;
                background-color:  rgb(112, 189, 199);
                padding: 5px;
                padding-left: 40%;
                padding-right: 40%;
                border-radius: 5px;
                border:none;
            }
            .login a{
                text-decoration: none;
                color: #fff;
            }

            .username {
                list-style-type: none;
                padding-left: 3px;
            }

            .user{
                border-radius: 5px;
                border-width: 1px;
                padding: 5px;
                padding-left: 20px;
                padding-right: 28px;
                
            }

            .username li{
                padding: 5px;
                padding-right: 10px;
            }

            .password{
                list-style-type: none;
                padding-left: 3px;
            }

            .password li{
                padding: 5px;
                padding-right: 10px;
            }

            .pass{
                border-radius: 5px;
                border-width: 1px;
                padding: 5px;
                padding-left: 20px;
                padding-right: 28px;
            }

            .button{
                list-style-type: none;
                padding: 20px;
                padding-left: 7px;
                position: relative;
                top: 20px;
            }

            .forgot a{
                position: relative;
                left: 100px;
                top: 10px;
                text-decoration: none;
                color: black;
            }

            label{
                position: relative;
                left: 70px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <h1>LOGIN PAGE</h1>
                <h4>username</h4>
                <input type="text" name="username" placeholder="Username" class="user"><br><br>
                <h4>password</h4>
                <input type="password" name="password" placeholder="Password" class="user"><br><br>
                <a>Forgot password?</a><br><br>
                <button type="submit" class="login">LOGIN</button><br><br>
                <hr>
                <h4>Don't have an account?</h4>
                <button type="button" class="login"><a href="/project/E-commerce website/templates/logins/create.php">CREATE ACCOUNT</a></button><br><br>

            </form>
        </div>

        <?php

            $servername = "localhost";  
            $username = "root";   
            $password = "";       
            $dbname = "login";  

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                echo "<script>console.log('Connected successfully')</script>";  
            }

            $name = $_POST['username'];
            $pass = $_POST['password'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $name, $pass);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                echo "<script>console.log('Login successful')</script>";
                echo "<script>window.location.href='/project/E-commerce website/templates/index.html'</script>";
            } else {
                echo "<script>console.log('Login failed')</script>";
                echo "<script>alert('Invalid username or password')</script>";
            }

            $stmt->close();
            $conn->close();

            
        ?>
    </body>
</html>
