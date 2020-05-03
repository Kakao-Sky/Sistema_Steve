<?php
	include "../conn/conn.php";

	$curso = $_POST['curso'];
	$serie = $_POST['serie'];

	$query = "INSERT INTO turma(tur_curso, tur_serie) VALUES ('$curso', '$serie')";
	$sql = mysqli_query($conn, $query) or die("Erro");
	header("Location:../");
?>