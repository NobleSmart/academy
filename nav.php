<!-- <nav>
<a href="index.php">Home</a>&nbsp;|&nbsp;
<a href="about.php">About</a>&nbsp;|&nbsp;
<a href="loops.php">Loops</a>
</nav> -->
<header>
    <nav>
        <div class="container">
            <h1 id="brand">NobleSmart Academy</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="classes.php">Classes</a></li>
                <?php
                if(!isset($_COOKIE[$cookie_name])) {
//                    echo "Cookie named '" . $cookie_name . "' is not set!";
                    ?>
                    <li><a href="account.php">Login</a></li>
                <?php } else {
                    echo "Cookie '" . $cookie_name . "' is set!<br>";
                    echo "Value '" . $cookie_value . "' is set!<br>";
//                    echo "Hello " . $_COOKIE[$cookie_name]; ?>
                    <li><a href="account.php">My Account</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>