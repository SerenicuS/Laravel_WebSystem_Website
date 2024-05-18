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
                    <h4><em> Providing Extraordinary to Unique Individuals</em></h4>
                    <h2>Login</h2>
                    <form action="{{ route('custom.login') }}" method="POST">
                    @csrf 
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
                            </div>
                            <input type="submit" value="Login">
                        </div>
                    </form>

                <div class="otherlinks-container">
                    <h5>Don't have an account? Register <a href="{{ route('registration') }}">here</a></h5>
                </div>
            </div>
          
        </div>
</body>
</html>