<?php

if (isset($_GET["excluir"])) {
	$id = $_GET["excluir"];
	$sql = "DELETE FROM usuarios WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if ($query === TRUE) {
		echo "Registro $id excluído com sucesso!";
	}
}

$sql = "SELECT * FROM usuarios";

$query = mysqli_query($link, $sql);


// echo "<table>";

// while($row = mysqli_fetch_assoc($query)) 
// {
// 	$email = $row["email"];
// 	echo "<tr>";

// 	echo "<td>";
// 	echo $row["nome"];
// 	echo "</td>";

// 	echo "<td>$email</td>";

// 	echo "</tr>";
// }

// echo "</table>";

echo "<h1>Lista de Cadastros</h1>";
echo "<table id='tabela'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "<th>Senha</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr>
		<td>
			<?= $row["id"] ?>
		</td>
		<td>
			<?= $row["nome"] ?>
		</td>
		<td>			
			<?= $row["email"] ?>
		</td>
		<td>			
			<?= $row["senha"] ?>
		</td>
		<td>
			<a 
			href="?pg=cadastro&editar=<?= $row["id"] ?>"
			>
				Editar
			</a>
		</td>
		<td>
			<a 
			href="?pg=listagem&excluir=<?= $row["id"] ?>"
			>
				Excluir
			</a>
		</td>
	</tr>

<?php 

}

echo "</table>";

?>

<p>Listagem de Usuários</p>