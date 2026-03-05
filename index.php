<?php
include("conexao.php");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>
<title>Produtos</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Lista de Produtos</h1>

<a href="adicionar.php">Adicionar Produto</a>

<br><br>

<?php

while($row = $result->fetch_assoc()){

echo $row['nome']." - R$ ".$row['preco'];

echo " <a href='deletar.php?id=".$row['id']."'>Excluir</a>";

echo "<br>";

}

?>

</body>
</html>