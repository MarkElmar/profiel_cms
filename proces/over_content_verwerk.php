<?php
if (isset($_POST['submit']))
{
	require '../includes/config.inc.php';

	$template = $_POST['template'];
	$pagename = $_POST['pagename'];
	$head = $_POST['headtext'];
	$content = $_POST['contenttext'];

	$query = "INSERT INTO contentposts ( templatename, pagename, headtext, content)
			VALUES ('$template', '$pagename', '$head', '$content')";
	echo $query;

	if(mysqli_query($conn, $query))
	{
		header('location: ../pages-edit.php');
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


