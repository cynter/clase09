<?php

setcookie("usuario", $_POST['usuario'], time() + (86400 * 30), "/");


/*
setcookie(name, value, expire, path, domain, secure, httponly);

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
*/

?>