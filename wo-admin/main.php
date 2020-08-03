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

	<title>Waddle On CMS | Main settings</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="blockstyle.css">
</head>
<body>

<div class="header">
    <h2>Welcome back, <?php echo $_SESSION['username']; ?> </h2>

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

<center><a href="index.php" class="buttons">Back</a></center>
&nbsp;
	<p> <a href="index.php?logout='1'" class="btnlogout">Logout</a> </p>
</div>

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

<!-- php blog txt -->
<div class="blog-css-block">
<center><h3>BLOG Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM texts";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $dbblogtxt = $row["blogblock"];
 
        echo '<tr> 
                  <td>Current BLOG text: '.$dbblogtxt.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/blogtxt.php" class="blog-css-block-form" method="post">
    Edit BLOG text: <input type="text" name = "dbblogtxt" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php safety txt -->
<div class="safety-css-block">
<center><h3>SAFETY Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM texts";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $dbsafetytxt = $row["safetyblock"];
 
        echo '<tr> 
                  <td>Current SAFETY text: '.$dbsafetytxt.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/safetytxt.php" class="safety-css-block-form" method="post">
    Edit SAFETY text: <input type="text" name = "dbsafetytxt" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php discord url txt -->
<div class="discordurl-css-block">
<center><h3>DISCORD Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM urls";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $discordurl = $row["discordurl"];
 
        echo '<tr> 
                  <td>Current DISCORD url: '.$discordurl.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/discordurl.php" class="discordurl-css-block-form" method="post">
    Edit DISCORD url: <input type="text" name = "discordurl" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php register url txt -->
<div class="registerurl-css-block">
<center><h3>REGISTER Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM urls";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $registerurl = $row["registerurl"];
 
        echo '<tr> 
                  <td>Current REGISTER url: '.$registerurl.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/registerurl.php" class="registerurl-css-block-form" method="post">
    Edit REGISTER url: <input type="text" name = "registerurl" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php account url txt -->
<div class="accounturl-css-block">
<center><h3>ACCOUNT Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM urls";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $accounturl = $row["accounturl"];
 
        echo '<tr> 
                  <td>Current ACCOUNT url: '.$accounturl.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/accounturl.php" class="accounturl-css-block-form" method="post">
    Edit ACCOUNT url: <input type="text" name = "accounturl" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php play url txt -->
<div class="playurl-css-block">
<center><h3>PLAY Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM urls";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $playurl = $row["playurl"];
 
        echo '<tr> 
                  <td>Current PLAY url: '.$playurl.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/playurl.php" class="playurl-css-block-form" method="post">
    Edit PLAY url: <input type="text" name = "playurl" /><br/>
    <input type="submit" />
</form>

<!-- php footer txt -->
<div class="footertxt-css-block">
<center><h3>FOOTER Setings:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM texts";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $footertxt = $row["footertxt"];
 
        echo '<tr> 
                  <td>Current FOOTER text: '.$footertxt.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/footertxt.php" class="footertxt-css-block-form" method="post">
    Edit FOOTER text: <input type="text" name = "footertxt" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php cpps name txt -->
<div class="cppsname-css-block">
<center><h3>CPPS name:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM texts";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cppsname = $row["cppsname"];
 
        echo '<tr> 
                  <td>Current CPPS name: '.$cppsname.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/cppsname.php" class="cppsname-css-block-form" method="post">
    Edit CPPS name: <input type="text" name = "cppsname" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php cpps name txt -->
<div class="mail1-css-block">
<center><h3>MAIL 1:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM texts";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $mail1 = $row["mail1"];
 
        echo '<tr> 
                  <td>Current MAIL 1: '.$mail1.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/mail1.php" class="mail1-css-block-form" method="post">
    Edit MAIL 1: <input type="text" name = "mail1" /><br/>
    <input type="submit" />
</form>
</div>

<!-- php footer txt -->
<div class="mail2-css-block">
<center><h3>Mail 2:</h3></center>
<?php 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']); 
$query = "SELECT * FROM texts";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $mail1 = $row["mail2"];
 
        echo '<tr> 
                  <td>Current MAIL 2: '.$mail1.'</td> 
              </tr>';
    }
    $result->free();
} 
  ?>
<form action="insert/mail2.php" class="mail2-css-block-form" method="post">
    Edit MAIL 1: <input type="text" name = "mail2" /><br/>
    <input type="submit" />
</form>
</div>
		
</body>
</html>