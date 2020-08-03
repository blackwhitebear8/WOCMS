<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="<?= $config['Assetsurl'] ?>/assets/img/logo.png" />
  <title>Waddle On CMS | Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="blockstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
</html>

			<?php
				if($admin['adminregisterenable'] == true)
				{
				?>

<!DOCTYPE html>
<html>
  	<p>
  		Not yet a admin yet? <a href="register.php">Sign up</a>
  	</p>
</html>

				<?php
				}
			?>	

<html>
  </form>
</body>
</html>