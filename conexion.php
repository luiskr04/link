<?php
<?php
$hostname_localhost = "localhost";
$database_localhost = "id7352247_link_db";
$username_localhost = "id7352247_enmsilink";
$password_localhost = "evenlink";

$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
$db = mysqli_select_db($database_localhost)or die(mysqli_error());

?>
