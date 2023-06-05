<?php
$include_page="login.php";
$login=false;
if($_POST)
{
if($_POST['uname']=="admin" && $_POST['psw']=="hy_admin"){
		$include_page="admin_page.php";
		$login=true;
	}
}
include $include_page;
?>
