<?php
$mod = $_REQUEST['mod'];
switch ($mod) {
 case "home":
 require("home.php");
 break;
 case "about":
 require("about.php");
 break;

 require("home.php");
}
?>