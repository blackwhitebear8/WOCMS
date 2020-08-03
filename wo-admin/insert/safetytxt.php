<?php
require_once $_SERVER['DOCUMENT_ROOT']."/config/wocms-config.php";

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

 
 
$link = mysqli_connect($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']);
 
 
$dbsafetytxt = $link->real_escape_string($_POST['dbsafetytxt']);
 
$sql = "UPDATE texts SET safetyblock='{$dbsafetytxt}' WHERE id=0";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
<html>
<script type="text/javascript">location.href = '/wo-admin/main.php';</script>
</html>