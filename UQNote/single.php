<?php include("path.php");?>
<?php include(ROOT_PATH . "\app\controllers\users.php");?>
<?php include(ROOT_PATH . "\app\controllers\post.php");?>
<?php //dd($posts);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Note Detail</title>
</head>

<body>
    <div id="container">
        <div id="body">
            <?php include(ROOT_PATH . "\app\inlcude\header.php"); ?>
        
            <section class="content clearfix">
                <h1 class='recent-post-title'>Note Detail</h1>
                
                <div class="main-content single">
                    <h2><?php echo $posts['title']?></h2>
                    <p class="post-info"><i class="fa fa-user"><?php echo $posts['uname']?></i>
                        &nbsp
                        <i class="fa fa-calendar"></i><?php echo $posts['date']?>
                        &nbsp
                        <?php echo $posts['subject']?></p>
                    <div class="post-content">
                        <p><?php echo $posts['content']?></p>
                        
                    </div>
                </div>
            </section>
        </div>
        <!--Footer-->
        <?php include(ROOT_PATH . "/app/inlcude/footer.php"); ?>
    </div>
</body>
<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/script.js"></script>
</html>