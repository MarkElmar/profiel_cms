<?php
//voeg het bestand config.php toe;
require 'includes/config.inc.php';

$query = "SELECT * FROM contentposts WHERE pagename = 'over'";


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
<nav class="navbar navbar-expand-lg navbar-light bg-primary"> <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown link </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
            </li>
        </ul>
    </div>
</nav>	
	<?php
		$resultaat = mysqli_query( $conn, $query );
		if ( mysqli_num_rows( $resultaat ) == 0 ) {
			echo 'No content to display, please contact this portfolio owner...';
		} else {
			while ( $rij = mysqli_fetch_array( $resultaat ) ) {
				if ($rij[ 'templatename' ] == 01){
					echo '<div class="container padding-top-3 margin-bot-1">';
						echo '<div class="row">';
							echo '<div class="col-12 text-center">';
							echo '<h1>' . $rij[ 'headtext' ] . '</h1>';
							echo '<p>' . $rij[ 'content' ] . '</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
				if ($rij[ 'templatename' ] == 02){
					echo '<div class="container padding-top-2 padding-bot-2 margin-bot-1" style="background-color: aqua;">';
						echo '<div class="row">';
							echo '<div class="col-12 text-center">';
							echo '<h1>' . $rij[ 'headtext' ] . '</h1>';
							echo '<p>' . $rij[ 'content' ] . '</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
				if ($rij[ 'templatename' ] == 03){
					echo '<div class="container padding-top-2 padding-bot-2 margin-bot-1" style="background: linear-gradient(to left,  #9c9e9f 0%,#9c9e9f 50%,#fff 50%,#fff 100%)">';
						echo '<div class="row">';
					echo '<div class="col-6 text-center">';
							echo '<p>' . $rij[ 'content' ] . '</p>';
							echo '</div>';
							echo '<div class="col-6 text-center">';
							echo '<h1>' . $rij[ 'headtext' ] . '</h1>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
				if ($rij[ 'templatename' ] == 03){
					echo '<div class="container padding-top-2 padding-bot-2" style="background: linear-gradient(to right,  #9c9e9f 0%,#9c9e9f 50%,#fff 50%,#fff 100%)">';
						echo '<div class="row">';
							echo '<div class="col-6 text-center">';
							echo '<h1>' . $rij[ 'headtext' ] . '</h1>';
							echo '</div>';
							echo '<div class="col-6 text-center">';
							echo '<p>' . $rij[ 'content' ] . '</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
			}
		}
	?>
</div>
<script type="text/javascript" src="js/sb-admin.min.js"></script> 
<script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/popper.min.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>