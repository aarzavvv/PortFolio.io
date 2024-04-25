<?php
$cookie_name =  $_POST["Email"];
$cookie_value = $_POST["Psw"];

setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");


if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
