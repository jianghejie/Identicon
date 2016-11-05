<?php
require_once(dirname(__FILE__)."/Identicon.php");

$identicon = new Identicon();
$string = 'jcodecraeercom';
$size = 50;
if(isset($_GET['string']))
	$string = $_GET['string'];
if(isset($_GET['size']))
	$size = $_GET['size'];
$identicon->displayImage($string,$size);
?>