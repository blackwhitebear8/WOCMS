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
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="<?= $config['Assetsurl'] ?>/assets/img/logo.png" />
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <?php endif ?>

	<title>Waddle On CMS | Admin Area</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="blockstyle.css">
</head>
<body>

<div class="header">
    <h2>Welcome back, <?php echo $_SESSION['username']; ?> </h2>
	<p> <a href="index.php?logout='1'" class="btnlogout">Logout</a> </p>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

<style>
.buttons {
	box-shadow: 0px 1px 0px 0px #f0f7fa;
	background-color:#33bdef;
	border-radius:6px;
	border:1px solid #057fd0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #5b6178;
}
.buttons:hover {
	background-color:#019ad2;
}
.buttons:active {
	position:relative;
	top:1px;
}

.btnlogout {
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background-color:#f24537;
	border-radius:6px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
	&:hover {
	background-color:#c62d1f;
}
 &:active {
	position:relative;
	top:1px;
}
</style>

<center><a href="main.php" class="buttons">Edit main settings</a></center>

</div>
		
</body>
</html>