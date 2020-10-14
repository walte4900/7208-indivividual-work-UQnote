<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div id='container'>
        <div id='body'>
            <?php include(ROOT_PATH . "/app/inlcude/header.php"); ?>
        </div>

        <div class="auth-content">
            <form action="login.php" method="post">
                <h2 class="form-title">Login</h2>

                <?php include(ROOT_PATH . "/app/msgs/formErrors.php");?>

                <div>
                    <label for="">Username</label><br>
                    <input type="text" name="name" class="text-input">
                </div>
                <div>
                    <label for="">Password</label><br>
                    <input type="password" name="password" class="text-input">
                </div>
                <div>
                    <button type="submit" name='login-btn' class='btn btn-big'>Login</button>
                </div>
                <p>Or  <a href="register.php">Register</a></p>
            </form>
        </div>
        
    
        <!--Footer-->
        <?php include(ROOT_PATH . "/app/inlcude/footer.php"); ?>
    </div>
    
    

    
</body>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/script.js"></script>
</html>