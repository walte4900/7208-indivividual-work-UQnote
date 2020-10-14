<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>
<?php include(ROOT_PATH . "/app/controllers/post.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap"
        rel="stylesheet">
    <title>UQNote</title>
</head>

<body>
    <div id='container'>
        <div id='body'>

            <!--Insert header-->
            <?php include(ROOT_PATH . "/app/inlcude/header.php"); ?>

            <?php if(isset($_SESSION['msg'])):?>
                <div class="msg <?php echo $_SESSION['type']; ?>">
                    <li><?php echo $_SESSION['msg']; ?></li>
                    <?php unset($_SESSION['msg']);
                            unset($_SESSION['type']);
                    ?>
                </div>
            <?php endif;?>

            <section class="content clearfix">
                <h1 class='recent-post-title'>Explore the Notes</h1>

                <!--div class="topbar">
                    <div class="section search">
                        <form action="index.html">
                            <input class="search-term" type="text" placeholder="Search notes by keywords">
                        </form>
                    </div>
                    <div class="section topics">
                        <ul>
                            <li><a href="#">INFS7208</a></li>
                            <li><a href="#">INFS7907</a></li>
                            <li><a href="#">INFS7903</a></li>
                            <li><a href="#">CSSE7201</a></li>
                            <li><a href="#">All</a></li>
                        </ul>
                    </div>
                </div-->
                <div class="main-content">
                    <?php if(count($all)>0):?>
                        <?php foreach ($all as $post):?>
                            <div class="post">
                                <div style="background-image: url('assets/images/note.jpg');
                                background-size: 100% auto;" alt="" class="post-image"></div>
                                <div class="post-preview">
                                    <h2 class='post-preview-title'><a href="single.php"><?php echo $post['title'];?></a></h2>
                                    <i class="fa fa-user"><?php echo $post['uname'];?></i>
                                    &nbsp
                                    <i class="fa fa-calendar"></i><?php echo $post['date'];?>
                                    &nbsp
                                    <?php echo $post['subject'];?>
                                    <p class="preview-text">
                                        <?php echo $post['content'];?>
                                    </p>
                                    <a href="single.php?id=<?php echo $post['id'];?>" class='btn read-more'>Read more!</a>
                                </div>
                            </div>
                    <?php endforeach; ?>
                    <?php else:?>
                    <div class="post">
                        <div style="background-image: url('assets/images/note.jpg');
                        background-size: 100% auto;" alt="" class="post-image"></div>
                        <div class="post-preview">
                            <h2 class='post-preview-title'><a href="heading.php">Let's start!</a></h2>
                            <i class="fa fa-user">Ziwen Wang</i>
                            &nbsp
                            <i class="fa fa-calendar"></i>Today!
                            &nbsp
                            Intro
                            <p class="preview-text">
                                Start the first note!
                            </p>
                        </div>
                    </div>
                    <?php endif;?>
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