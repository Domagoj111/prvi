<?php
$cookie_name = "user";
$cookie_value = "John Doe";
// Postavljanje kolačića
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_name, $cookie_value, time() + (60 * 60  * 24 * 30),"/"); // sec x min x hour x day = month
setcookie("banana","zuto", time() + 10,"/"); // ovaj cookie je ziv 10 sec
setcookie("jagoda","crvena", time() + 86400,"/"); // ovaj cookie je ziv 10 sec

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
// Za brisanje kolačića vrijeme postavite u prošlost
setcookie("user", "", time() - 3600, "/");
echo "Cookie 'user' is deleted.";
?>