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
					<!-- Start formulier -->
					<div id="sectionBox">
						<form method="post" action="proces/profiel_verwerk.php">
							<div class="form-group">
								<label for="naam">Naam</label>
								<input type="text" class="form-control" placeholder="Voornaam Achternaam" name="naam" id="naam" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" placeholder="info@info.com" name="email" id="email" required>
							</div>
							<div class="form-group">
								<label for="telefoon">Telefoon nummer</label>
								<input type="text" class="form-control" placeholder="088 200 1500" name="telefoon" id="telefoon" required>
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