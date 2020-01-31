<?php
if (isset($_POST['submit']))
{
	require '../includes/config.inc.php';

	$id = $_POST['postid'];
	$head = $_POST['headtext'];
	$content = $_POST['contenttext'];

	$query = "UPDATE contentposts SET headtext = '$head', content = '$content' WHERE postid = $id";
	echo $query;

	if(mysqli_query($conn, $query))
	{
		header('location: ../pages-edit-over.php');
		exit;
	}
	else
	{
		echo "<p>FOUT bij toevoegen van $head.</p>";
		echo mysqli_error($conn);
	}
}
else
{
	echo "<p>Geen gegevens ontvangen...</p>";
}


