<header>
    <div class="logo">
        <a href="index.php"><h1 class='logo-text'><span>UQ</span>Note</h1></a>
    </div>
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="heading.php">MakeNotes</a></li>
        <?php if (isset($_SESSION['id'])): ?>
            <li>
                <a class='toggle'>
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['name']; ?>
                    <i class="fa fa-chevron-down" style="font-size: 0.8em;"></i>
                </a>
                <ul class='kid-list'>
                    <li><a href="logout.php" class='logout'>Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li>
                <a href="login.php" class='toggle'>
                    Login
                </a>
            </li>
            <ul class='kid-list'>
                <li><a href="register.php" class='logout'>Sign up</a></li>
            </ul>
        <?php endif; ?>
    </ul>
</header>