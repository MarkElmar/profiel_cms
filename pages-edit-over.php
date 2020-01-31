<?php
//voeg het bestand config.php toe;
require 'includes/config.inc.php';

$query = "SELECT * FROM contentposts WHERE pagename = 'over'";

?>
<?php require 'includes/header.php'; ?>
	<div id="content-wrapper">
		<div class="container pl-4">
			<div class="row margin-bot-1">
				<a href="pages.php" class="btn btn-green mr-2">&lt; Terug naar pagina's</a><a class="btn btn-cyan">Bekijk live &gt;</a>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<!-- If empty -->
					<?php
					$resultaat = mysqli_query($conn, $query);	
					if ( mysqli_num_rows( $resultaat ) == 0 ) {
						echo '<p id="geen-content-message">Er is nog geen content toegevoegd</p>';
						echo '<a class="btn btn-outline-primary" id="showSection">Voeg section toe</a>';
					} else {
						while ( $rij = mysqli_fetch_array( $resultaat ) ) {
							echo '<div class="border margin-bot-2 padding-top-1 padding-bot-1">';
							echo '<p>'.$rij['headtext'].'</p>';
							echo '<a href="content_bewerk.php?id='.$rij['postid'].'">wijzig</a>';
							echo '</div>';
						}
						echo '<a class="btn btn-outline-primary" id="showSection">Voeg nieuwe section toe</a>';
					}
					?>
					
					<!-- Start formulier -->
					<div id="sectionBox" class="d-none">
						<div class="col-12 col-lg-4 offset-lg-4 d-none" id="alleen-tekst"><img src="images/text-only.jpg" class="img-fluid" alt="portfolio - Option text only"></div>
						<div class="col-12 col-lg-4 offset-lg-4 d-none" id="blok-tekst"><img src="images/text-boxed.jpg" class="img-fluid" alt="portfolio - Option text boxed"></div>
						<div class="col-12 col-lg-4 offset-lg-4 d-none" id="links-tekst"><img src="images/text-left.jpg" class="img-fluid" alt="portfolio - Option text left"></div>
						<div class="col-12 col-lg-4 offset-lg-4 d-none" id="rechts-tekst"><img src="images/text-right.jpg" class="img-fluid" alt="portfolio - Option text-right"></div>
						<form method="post" action="proces/over_content_verwerk.php">
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputTemplate">Kies template</label>
									<select id="inputTemplate" name="template" class="form-control">
										<option selected value="99">Template</option>
										<option class="option-1" value="00">Alleen tekst</option>
										<option class="option-2" value="01">Blok met tekst</option>
										<option class="option-3" value="02">Blok rechts tekst links</option>
										<option class="option-4" value="03">Blok links tekst rechts</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="headtext">Titel</label>
								<input type="text" class="form-control" placeholder="titel" name="headtext" id="headtext">
							</div>
							<div class="form-group d-none">
								<input type="text" class="form-control" value="over" name="pagename" id="pagename">
							</div>
							<div class="form-group">
								<label for="contenttext">Content</label>
								<textarea class="form-control" name="contenttext" id="contenttext" rows="3" placeholder="Deze tekst wil ik graag plaatsen"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-primary">
							</div>
						</form>
					</div>
					<!-- End form -->
				</div>
			</div>
		</div>
	</div>
<?php require 'includes/footer.php'; ?>