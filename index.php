<html>
<head>
<!-- basic stuff -->
<?php require_once $_SERVER['DOCUMENT_ROOT']."/config/wocms-config.php"; 
$mysqli = new mysqli($db['dburl'], $db['dbusername'], $db['dbpassword'], $db['dbdatabase']);
?> 
<?php 
$query = "SELECT * FROM texts";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cppsname = $row["cppsname"];
 
        echo '<tr> 
                  <td><title>'.$cppsname.' | Home</title></td> 
              </tr>';
    }
    $result->free();
} 
?>
<link rel="icon" type="image/png" href="<?= $config['Assetsurl'] ?>/assets/img/logo.png" />
<!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="<?= $config['CPPSName'] ?> | Play games, Make friends, Waddle On!">
    <meta name="description" content="Welcome to <?= $config['CPPSName'] ?>, a recreation of the original game Club Penguin. Come and play club penguin online with your friends, and discover new adventures!">
    <meta name="keywords" content="club penguin, Club Penguin, club penguin online, Club Penguin Online, club penguin rewritten, Club Penguin Rewritten, play club penguin, play Club Penguin, Waddle On, waddle on, waddleon, wo, waddleon.net, Club Penguin Server, Club Penguin private server, MMO, virtual world, game, fun, virtual world, cpps, kids, play, cp, card, card jitsu, card-jitsu, card jitsu fire, puffles, igloo, clubpenguin ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $config['CPPSURL'] ?>">
    <meta property="og:title" content="<?= $config['CPPSName'] ?> | Play games, Make friends, Waddle On!">
    <meta property="og:description" content="Welcome to <?= $config['CPPSName'] ?>, a recreation of the original game Club Penguin. Come and play club penguin online with your friends, and discover new adventures!">
    <meta property="og:image" content="<?= $config['CPPSURL'] ?>/assets/img/featured-image.png">	
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $config['CPPSURL'] ?>">
    <meta property="twitter:title" content="<?= $config['CPPSName'] ?> | Play games, Make friends, Waddle On!">
    <meta property="twitter:description" content="Welcome to <?= $config['CPPSName'] ?>, a recreation of the original game Club Penguin. Come and play club penguin online with your friends, and discover new adventures!">
    <meta property="twitter:image" content="<?= $config['CPPSURL'] ?>/assets/img/featured-image.png">
<!-- assets -->
<script type="text/javascript" src="<?= $config['Assetsurl'] ?>/assets/js/jquery.slim.min.js"></script>
<script type="text/javascript" src="<?= $config['Assetsurl'] ?>/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= $config['Assetsurl'] ?>/assets/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="<?= $config['Assetsurl'] ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= $config['Assetsurl'] ?>/assets/css/main.css">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg  static-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
          <img src="<?= $config['Assetsurl'] ?>/assets/img/logonav.png" alt="" style="width:200px;height:30px;">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><font color="white"><b>Home</b></font></a>
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://create.waddleon.net"><font color="white"><b>Create a penguin</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://blog.waddleon.net"><font color="white"><b>Blog</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.waddleon.net/donate.html"><font color="white"><b>Donate</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.waddleon.net/safety.html"><font color="white"><b>Safety</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.waddleon.net/legal.html"><font color="white"><b>Legal</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.waddleon.net/rules.html"><font color="white"><b>Rules</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.waddleon.net/help.html"><font color="white"><b>Help</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="discord.php"><font color="white"><b>Discord</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" "><font color="white"><b> </b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" "><font color="white"><b> </b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" "><font color="white"><b> </b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" "><font color="white"><b> </b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" "><font color="white"><b> </b></font></a>
        </li>
        <li class="nav-item">

<?php 
$query = "SELECT * FROM urls";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $playurl = $row["playurl"];
 
        echo '<tr> 
                  <td><a href="'.$playurl.'" class="nav-item playnowbut">Play now!</a> </td> 
              </tr>';
    }
    $result->free();
} 
?>	

        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="img-slider"> 
<img class="mySlides" src="https://partyapi.waddleon.net/en/bg/bg2.png">
<img class="mySlides" src="<?= $config['Assetsurl'] ?>/assets/img/welcome.png">
</div>

<div class="body-block"> 
   <div class="safety-block"> 
   <img class="safety-img" src="<?= $config['Assetsurl'] ?>/assets/img/sensei.png">
      <div class="safety-block-text">
	  <h4>Safety</h4>
	  <h6>  
<?php 
$query = "SELECT * FROM texts";
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $dbsafetytxt = $row["safetyblock"];
 
        echo '<tr> 
                  <td>'.$dbsafetytxt.'</td> 
              </tr>';
    }
    $result->free();
} 
?>	  
	  </h6>
	  <a href="/safety.html" class="blogbuttontext"><h6>Safety tips</h6></a>
      </div>	  
   </div>  
   <div class="blog-block"> 
   <img class="blog-img" src="<?= $config['Assetsurl'] ?>/assets/img/aunt-arctic.png">
      <div class="blog-block-text">
	  <h4>Blog</h4>
	  <h6>
<?php 
$query = "SELECT * FROM texts";
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $dbblogtxt = $row["blogblock"];
 
        echo '<tr> 
                  <td>'.$dbblogtxt.'</td> 
              </tr>';
    }
    $result->free();
} 
?> 
	  </h6>
	  <a href="https://blog.waddleon.net" class="blogbuttontext"><h6>Go to the blog</h6></a>
      </div>
   </div>
</div>

   <div class="footer-block"> 
      <div class="footer-block-center"> 
      <img class="footer-img" src="<?= $config['Assetsurl'] ?>/assets/img/logo.png">
         <div class="footer-social">
	     <h4>Social media</h4>
		 <p><a href="https://www.youtube.com/channel/UCTbytlM_ZlEECQJlH5CtG_w"><font color="white">Youtube</font></a></p>
		 <p><a href="https://twitter.com/waddleon3"><font color="white">Twitter</font></a></p>
		 <p><a href="https://www.instagram.com/blackwhitebear8/"><font color="white">Instagram</font></a></p>
         <p><a href="/discord.html"><font color="white">Discord</font></a></p>
         </div>
         <div class="footer-links">
	     <h4>Navigate</h4>
		 <p><a href="https://blog.waddleon.net"><font color="white">Blog</font></a></p>
		 <p><a href="/donate.html"><font color="white">Donate</font></a></p>
		 <p><a href="/safety.html"><font color="white">Safety</font></a></p>
         <p><a href="/legal.html"><font color="white">Legal</font></a></p>
         </div>
         <div class="footer-mail">
	     <h4>Mail us</h4>
		 
			<?php
				if($config['CPPSMail1Enable'] == true)
				{
				?>
				
								<?php 
$query = "SELECT * FROM texts";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $mail1 = $row["mail1"];
 
        echo '<tr> 
                  <td><font color="white">'.$mail1.'</font></a></p></td> 
              </tr>';
    }
    $result->free();
} 
?>
				
				<?php
				}
			?>
		 
			<?php
				if($config['CPPSMail2Enable'] == true)
				{
				?>
				
				<?php 
$query = "SELECT * FROM texts";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $mail2 = $row["mail2"];
 
        echo '<tr> 
                  <td><font color="white">'.$mail2.'</font></a></p></td> 
              </tr>';
    }
    $result->free();
} 
?>
				
				<?php
				}
			?>

         </div>
         <div class="footer-extra1">
<?php 
$query = "SELECT * FROM urls";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $accounturl = $row["accounturl"];
 
        echo '<tr> 
                  <td><a href="'.$accounturl.'" class="blogbuttontext"><h6>Account</h6></a></td> 
              </tr>';
    }
    $result->free();
} 
?>	

         </div>
         <div class="footer-extra2">
<?php 
$query = "SELECT * FROM urls";
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $registerurl = $row["registerurl"];
 
        echo '<tr> 
                  <td><a href="'.$registerurl.'" class="blogbuttontext"><h6>Register</h6></a></td> 
              </tr>';
    }
    $result->free();
} 
?>	
         </div>
         <div class="footer-copyright">
<?php 
$query = "SELECT * FROM texts";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $footertxt = $row["footertxt"];
 
        echo '<tr> 
                  <td><center><p><b>'.$footertxt.'</b></p></center></td> 
              </tr>';
    }
    $result->free();
} 
?>	
         </div>
	  </div>
   </div>
   
</body>
</html>