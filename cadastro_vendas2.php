<?php 

include('conexao/conexao.php');

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$sql = "INSERT INTO vendas (mes_vendas, qtd_vendas, valor_vendas) VALUES ('$mes',$quantidade,$valor)";

$inserir = mysqli_query($conexao, $sql);

header('Location: dashboard.php?pagina=vendas');

?>