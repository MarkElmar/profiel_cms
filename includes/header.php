<?php
//voeg het bestand config.php toe;
require 'includes/config.inc.php';

$query = "SELECT * FROM profiel";

$result = $conn->query($query);	
$rij = $result->fetch_assoc();

$naam = $rij['naam'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard | Portfolio</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link href="css/sb-admin.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div id="wrapper"> 
	<!-- Sidebar -->
	<ul class="sidebar navbar-nav">
		<li class="nav-item active text-center"> 
				<span class="navtextone">Portfolio</span><span class="navtexttwo">CMS</span>
		</li>
		<div class="profilegrey padding-top-1 padding-bot-1">
			<div class="row h-100">
				<div class="col-12 col-lg-5 pl-4 h-100 my-auto">
					<a href="dashboard-profile.html"><img src="images/profile-picture.png" class="img-fluid" alt="Portfolio profile picture"></a>
				</div>
				<div class="col-12 col-lg-7 welcomemsg h-100 my-auto">
					<p><span class="welcomegreen">Welcome,</span><br><?= $naam;?></p>					
				</div>
			</div>
		</div>
		<li class="nav-item"> 
			<a class="nav-link" href="profiel.php"> <i class="fas fa-address-card"></i> <span>Profiel</span></a> 
		</li>
		<li class="nav-item"> 
			<a class="nav-link" href="pages.php"> <i class="fas fa-file-alt"></i> <span>Pagina's</span></a> 
		</li>
		<li class="nav-item"> 
			<a class="nav-link" href="charts.php"> <i class="fas fa-images"></i> <span>Media</span></a> 
		</li>
		<li class="nav-item"> 
			<a class="nav-link" href="charts.php"> <i class="fas fa-clipboard-list"></i> <span>Formulier</span></a> 
		</li>
<!--
		<li class="nav-item"> 
			<a class="nav-link" href="charts.php"> <i class="fas fa-cogs"></i> <span>Instellingen</span></a> 
		</li>
-->
	</ul>