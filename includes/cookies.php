<?php
$cookie_name = "user";
$cookie_value = "";
if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value = "";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>
