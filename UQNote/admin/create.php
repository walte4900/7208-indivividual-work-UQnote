<?php include("../path.php");?>
<?php include(ROOT_PATH . "\app\controllers\users.php");?>
<?php include(ROOT_PATH . "\app\controllers\post.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Write Note</title>
</head>

<body>
    <div id='container'>
        <div id='body'>
            <header>
                <div class="logo">
                    <h1 class='logo-text'><span>UQ</span>Note</h1>
                </div>
                <ul class="nav">
                    <li><a href="../index.php">Home</a></li>
                    <?php if (isset($_SESSION['id'])): ?>
                        <li>
                            <a class='toggle'>
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['name']; ?>
                                <i class="fa fa-chevron-down" style="font-size: 0.8em;"></i>
                            </a>
                            <ul class='kid-list'>
                                <li><a href="../logout.php" class='logout'>Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="../login.php" class='toggle'>
                                Login
                            </a>
                        </li>
                        <ul class='kid-list'>
                            <li><a href="../register.php" class='logout'>Sign up</a></li>
                        </ul>
                    <?php endif; ?>
                </ul>
            </header>
        </div>
        <div class="admin-wrapper">
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php">Write A Note</a>
                    <a href="index.php">Manage Notes</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Write Notes</h2>
                    <form action="create.php" method="post">
                        <label>Title</label>
                        <input type="text" name="title" class='text-input'>
                        <div class="subjs">
                            <label>INFS7208</label><input type="radio" name="subject" value="INFS7208" class="subj">
                            <label>INFS7907</label><input type="radio" name="subject" value="INFS7907" class="subj">
                            <label>INFS7903</label><input type="radio" name="subject" value="INFS7903" class="subj">
                            <label>CSSE7201</label><input type="radio" name="subject" value="CSSE7201" class="subj">
                            <label>Other</label><input type="radio" name="subject" value="Other" class="subj">
                        </div>
                    
                        <div class="text">
                            <textarea name="content" id="" ></textarea><br>
                            <button type="submit" class='btn btn-big' name='post-btn' style="margin: 10px 0;">Post</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!--Footer-->
        <?php include(ROOT_PATH . "/app/inlcude/footer.php"); ?>
    </div>




</body>
<script src="../../../assets/js/jquery.js"></script>
<script src="../../../assets/js/script.js"></script>

</html>