<?php
//voeg het bestand config.php toe;
require 'includes/config.inc.php';

$query = "SELECT * FROM contentposts WHERE pagename = 'over'";

$postid = $_GET[ 'id'];

$resultaat = mysqli_query($conn, $query);

if (mysqli_num_rows($resultaat) == 0)
{
	echo "<p>Er is geen user met ID $postid.</p>";
}
else
{
	$rij = mysqli_fetch_array($resultaat);
}

?>
<?php require 'includes/header.php'; ?>
	<div id="content-wrapper">
		<div class="container pl-4">
			<div class="row margin-bot-1">
				<a href="pages-edit-over.php" class="btn btn-green mr-2">&lt; Terug naar over</a><a class="btn btn-cyan">Bekijk live &gt;</a>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<!-- Start formulier -->
					<div id="sectionBox">
						<form method="post" action="proces/over_content_bewerk.php">
							<div class="form-group d-none">
								<input type="number" class="form-control" name="postid" id="postid" value="<?php echo $postid; ?>">
							</div>
							<div class="form-group">
								<label for="headtext">Titel</label>
								<input type="text" class="form-control" name="headtext" id="headtext" value="<?php echo $rij['headtext'] ?>">
							</div>
							<div class="form-group">
								<label for="contenttext">Content</label>
								<textarea class="form-control" name="contenttext" id="contenttext" rows="3"><?php echo $rij['content'] ?></textarea>
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