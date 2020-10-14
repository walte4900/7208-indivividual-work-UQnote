<?php include("../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Dashboard</title>
</head>

<body>
    <div id='container'>
        <div id='body'>
            <header>
                <div class="logo">
                    <h1 class='logo-text'><span>UQ</span>Note</h1>
                </div>
                <ul class="nav">
                    <li><a href="../index.html">Home</a></li>
                    <li>
                        <a class='toggle'>
                            <i class="fa fa-user"></i>
                            Sven
                            <i class="fa fa-chevron-down" style="font-size: 0.8em;"></i>
                        </a>
                        <ul class='kid-list'>
                            <li><a href="#" class='logout'>Logout</a></li>
                        </ul>
                    </li>
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
                    <h2 class="page-title">Manage Notes</h2>
                    <table>
                        <thead>
                            <th>Time</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020-10-12</td>
                                <td>Assignment IV</td>
                                <td>Sven</td>
                                <td>INFS7208</td>
                                <td><a href="" class="delete">delete</a></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    
        <!--Footer-->
        <?php include(ROOT_PATH . "/app/inlcude/footer.php"); ?>
    </div>
    
    

    
</body>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/script.js"></script>
</html>