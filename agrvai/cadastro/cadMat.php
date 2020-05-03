<?php
	include "../conn/conn.php";

	$nome = $_POST['nome'];
	$serie = $_POST['serie'];
	$base = $_POST['base'];
	$carga = $_POST['carga'];
	$turma = $_POST['turma'];
	$prof = $_POST['prof'];

	$query = "INSERT INTO materia (mat_nome, mat_serie, mat_base, mat_cargaSemanal, tur_id, pro_id) VALUES ('$nome', '$serie', '$base', '$carga', '$turma', '$prof')";
	$sql = mysqli_query($conn, $query);

	header("Location:../");
	?>