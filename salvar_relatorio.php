<?php
include('conexao.php');

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$gordura = $_POST['gordura'];

$stmt = $pdo->prepare("INSERT INTO relatorio_avaliacao (peso, altura, gordura) VALUES (:peso, :altura, :gordura)");
$stmt->bindParam(':peso', $peso);
$stmt->bindParam(':altura', $altura);
$stmt->bindParam(':gordura', $gordura);

if ($stmt->execute()) {
  header("Location: index_relatorio.php");
} else {
  echo "Erro ao salvar relatório.";
}
?>