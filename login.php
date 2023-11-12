<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./login.css">
    <title>Omori Login Page</title>
</head>
<body>
    <div class="login-container">
        <p class="title">Login</p>
        <p class="welcome-message">Silahkan login untuk melanjutkan</p>
        <form action="sambung.php" method="post" class="login-form">
            <div class="form-control">
                <input type="text" placeholder="Username" id="username" name="username">
                <i class="fas fa-user"></i>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Password" id="password" name="password">
                <i class="fas fa-lock"></i>
            </div>
            <?php 
            if(isset($_GET["login_error"])){
                echo "<h5 style='color:red';>Username atau password salah</h6>";
            }
            ?>
            <button class="submit" value="submit">Login</button>
        </form>
        </div>

    </div>
    
</body>
</html>