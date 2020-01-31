<?php
if (isset($_POST['submit']))
{
	require '../includes/config.inc.php';

	$naam = $_POST['naam'];
	$email = $_POST['email'];
	$telefoon = $_POST['telefoon'];

	$query = "	UPDATE profiel
				SET 	naam = '$naam', 
						email = '$email', 
						telefoon = '$telefoon'";
	echo $query;

	if(mysqli_query($conn, $query))
	{
		header('location: ../profiel.php');
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


