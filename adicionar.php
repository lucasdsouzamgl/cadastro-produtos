<?php
include("conexao.php");

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produtos (nome,preco)
        VALUES ('$nome','$preco')";

$conn->query($sql);
}
?>

<form method="POST">

<input name="nome" placeholder="Produto">
<input name="preco" placeholder="Preço">

<button>Adicionar</button>

</form>