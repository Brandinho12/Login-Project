<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & login</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
            
    <div class="container" id="sigIn" style="display: none;">
        <h1 class="title">Login</h1>
        <form method="post" action="register.php">
            
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input typ="password" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a> 
            </p>
            <input type="submit" class="btn" value="Sign In" name="Sign In">
           <div class="links">
            <p>Don't Have Account Yet?</p>
            <button id="signUpButton">SignUp</button>
            </div>
           </div>
        
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>