<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Believe</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://kit.fontawesome.com/9e3b941b5d.js" crossorigin="anonymous"></script>
</head>
<body>
    
       
        <div class="content-container">
                  
            <div class="login-container">
                    <h1> We Believe</h1>
                    <h4><em> Join us now!</em></h4>
                    <h2>Register</h2>
                    <form action="register.php" method="POST">
                        <div class="email-container">
                            <i class="fa-solid fa-envelope"></i>
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div class="password-container">
                            <div class="input-container">
                                <i class="fa-solid fa-key"></i>
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" required>
                               
                                
                                <i class="fa-solid fa-key custom-icon"></i>
                                <label for="Confirm Password">Confirm Password:</label>
                                <input type="confirmPassword" id="confirmPassword" name="confirmPassword" required>
                                </div>
                            <input type="submit" value="Register">
                        </div>
                    </form>
            </div>
          
        </div>
</body>
</html>