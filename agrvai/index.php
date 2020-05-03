<?php
	include "conn/conn.php";
?>
<html>
<head>
	<title>Horário Escolar</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<header class="cabecalho">
		<ul>
		  <li><a href="#turmas">Turmas</a></li>
		  <li><a href="#professores">Professores</a></li>
		  <li><a href="#materias">Matérias</a></li>
		  <li><a href="#horario">Horário</a></li>
		</ul>
	</header>
	<div class="tudo">
		<section class="coisas">
			<div id="turmas" class="coisas">
				<center><h2>Gerenciamento de turmas</h2>
					<table>
						<form action="cadastro/cadTur.php" method="POST">
							<tr>
								<td><b>Curso:</b> </td>
								<td><input type="text" name="curso" placeholder="Digite o curso"></td>
							</tr>
							<tr><td><b>Série:</b></td> 
								<td><select name="serie">
									<option>SELECIONAR</option>
									<option value="1">1° ano</option>
									<option value="2">2° ano</option>
									<option value="3">3° ano</option>
								</select></td>
							</tr>
							<tr>
								<td>
									<input type="reset" value="Limpar" class="r">
							 	</td>
								<td>
									<input type="submit" value="Salvar" class="s">
								</td>
							</tr>
						</form>
					</table>
					<table class="result">
						<thead>
							<th>Id</th>
							<th>Curso</th>
							<th>Série</th>
							<th>Deletar</th>
						</thead>
						<tbody>
							<?php
								$query = "SELECT * FROM turma";
								$sql = mysqli_query($conn, $query);

								while($dados = mysqli_fetch_assoc($sql)){
									echo "<tr><td>".$dados['tur_id']."</td><td>".$dados['tur_curso']."</td><td>".$dados['tur_serie']."</td><td><a href='excluir.php?id=".$dados['tur_id'].">Deletar</a></td>";
								}
							?>
						</tbody>
					</table>
					</center>
			</div>
		</section><br>
		<section class="coisas">
			<div id="professores">
				<center><h2>Gerenciamento de professores</h2>
				<table>
					<form action="cadastro/cadPro.php" method="POST">
						<tr> 
							<td><b>Nome:</b></td>
							<td><input type="text" name="nome" placeholder="Digite o nome"></td>
						</tr>
						<tr>
							<td><b>Dia da folga:</b></td> 
							<td><select name="diaFolga">
								<option>SELECIONAR</option>
								<option value="1">Segunda-feira</option>
								<option value="2">Terça-feira</option>
								<option value="3">Quarta-feira</option>
								<option value="4">Quinta-feira</option>
								<option value="5">Sexta-feira</option>
							</select></td>
						</tr>
						<tr>
							<td><b>Turno da folga:</b></td>
							<td><select name="turnoFolga">
								<option>SELECIONAR</option>
								<option value="M">Manhã</option>
								<option value="T">Tarde</option>
								<option value="I">Integral</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><input type="reset" value="Limpar" class="r"></td>
							<td><input type="submit" value="Salvar" class="s"></td>
						</tr>
					</form>
				</table>
				<table class="result">
						<thead>
							<th>Id</th>
							<th>Nome</th>
							<th>Dia da Folga</th>
							<th>Turno da Folga</th>
						</thead>
						<tbody>
							<?php
								$query = "SELECT * FROM professor";
								$sql = mysqli_query($conn, $query);

								while($dados = mysqli_fetch_assoc($sql)){
									echo "<tr><td>".$dados['pro_id']."</td><td>".$dados['pro_nome']."</td><td>".$dados['pro_diaFolga']."</td><td>".$dados['pro_turnoFolga']."</td><td><a href="."deletar.php?id='".$dados['pro_id']."'</a></td>";
								}
							?>
						</tbody>
					</table>
				</center>
			</div>
		</section><br>
		<section class="coisas">
			<div id="materias">
				<center><h2>Gerenciamento de matérias</h2>
				<table>
					<form action="cadastro/cadMat.php" method="POST">
						<tr> 
							<td><b>Nome:</b></td>
							<td><input type="text" name="nome" placeholder="Nome da matéria"></td>
						</tr>
						<tr>
							<td><b>Série:</b></td>
							<td><select name="serie">
								<option>SELECIONAR</option>
								<option value="1">1° ano</option>
								<option value="2">2° ano</option>
								<option value="3">3° ano</option>
							</select></td>
						</tr>
						<tr>
							<td><b>Base:</b></td>
							<td><select name="base">
								<option>SELECIONAR</option>
								<option value="C">Comum</option>
								<option value="D">Diversificada</option>
								<option value="T">Técnica</option>
							</select></td>
						</tr>
						<tr>
							<td><b>Carga horária semanal:</b></td>
							<td><input type="number" name="carga"></td>
						</tr>
						<tr>
							<td><b>Turma:</b></td>
						<td><select name="turma">
							<option>SELECIONAR</option>
							<?php
								$query = "SELECT * FROM turma";
								$sql = mysqli_query($conn, $query);

								while($dados = mysqli_fetch_assoc($sql)){
									echo "<option value='".$dados['tur_id']."'>".$dados['tur_curso']." - ".$dados['tur_serie']."° ano </option>";
								}
							?>
						</select></td>
						</tr>
						<tr>
							<td><b>Professor:</b></td>
							<td><select name="prof">
							<option>SELECIONAR</option>
							<?php
								$query = "SELECT pro_id, pro_nome FROM professor";
								$sql = mysqli_query($conn, $query);

								while($dados = mysqli_fetch_assoc($sql)){
									echo "<option value='".$dados['pro_id']."'>".$dados['pro_nome']."</option>";
								}
							?>
						</select></td>
						</tr>
						<tr>
							<td><input type="reset" value="Limpar" class="r"></td>
							<td><input type="submit" value="Salvar" class="s"></td>
						</tr>
					</form>
				</table>
				</center>
			</div>
		</section><br>
	</div>
</body>
</html>