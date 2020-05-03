<?php
	include "../conn/conn.php";

	$nome = $_POST['nome'];
	$diaFolga = $_POST['diaFolga'];
	$turnoFolga = $_POST['turnoFolga'];

	$query = "INSERT INTO professor (pro_nome, pro_diaFolga, pro_turnoFolga) VALUES ('$nome', '$diaFolga', '$turnoFolga')";
	$sql = mysqli_query($conn, $query);
	header("Location:../");
?>