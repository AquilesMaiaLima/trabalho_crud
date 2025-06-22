<?php
require 'conexao.php';

$stmt = $pdo->prepare("UPDATE relatorio_avaliacao SET peso = :peso, altura = :altura, gordura = :gordura WHERE id = :id");

$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':peso', $_POST['peso']);
$stmt->bindParam(':altura', $_POST['altura']);
$stmt->bindParam(':gordura', $_POST['gordura']);

if ($stmt->execute()) {
  header("Location: index_relatorio.php");
} else {
  echo "Erro ao atualizar relatório.";
}
?>