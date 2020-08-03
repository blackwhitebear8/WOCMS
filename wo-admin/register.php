<?php require_once $_SERVER['DOCUMENT_ROOT']."/config/wocms-config.php"; ?>
<?php include('server.php') 
?>

			<?php
				if($admin['adminregisterenable'] == true)
				{
				?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="<?= $config['Assetsurl'] ?>/assets/img/logo.png" />
  <title>Waddle On CMS | Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="blockstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a admin? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

				<?php
				}
			?>
	


			<?php
				if($admin['adminregisterenable'] == false)
				{
				?>

<!DOCTYPE html>
<html>
<style>
h1 { 
    position: absolute;
    width: 100px;
    height: 50px;
    top: 50%;
    left: 50%;
    margin-left: -50px; /* margin is -0.5 * dimension */
    margin-top: -25px; 
}
</style>

<h1><img src="https://i.imgflip.com/2ryaq7.jpg" alt=" " width="200" height="200"></h1>
</html>

				<?php
				}
			?>	