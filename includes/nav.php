<!-- <nav>
<a href="index.php">Home</a>&nbsp;|&nbsp;
<a href="about.php">About</a>&nbsp;|&nbsp;
<a href="loops.php">Loops</a>
</nav> -->
<header>
    <nav>
        <div class="container">
            <h1 id="brand">NobleSmart Academy</h1>
            <?php
                // echo "SESSION: ";
                // print_r ($_SESSION);
                // echo "<br/>COOKIE: ";
                // print_r ($_COOKIE);
                if (isset($_COOKIE["fullname"])) echo "Welcome ".$_COOKIE["fullname"];
            ?>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="classes.php">Classes</a></li>
                <?php
                    if(!isset($_COOKIE["fullname"])) {
                        // echo "Cookie named '" . $cookie_name . "' is not set!";
                        // $cookie_name = "user";
                        // $cookie_value = "John Doe";
                        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                        echo "<li><a href='login.php'>Login</a></li>";
                    } else {
                        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                        // var_dump($_COOKIE);
                        $cookie_name = "fullname";                        
                        $cookie_value = $_COOKIE[$cookie_name];
                        // $cookie_value = "John Doe";
                        // echo "Cookie '" . $cookie_name . "' is set!<br>";
                        // echo "Value is: " . $_COOKIE[$cookie_name]; 
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>
</header>