<?php
include('conexao.php');

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM relatorio_avaliacao WHERE id = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
  header("Location: index_relatorio.php");
} else {
  echo "Erro ao excluir relatório.";
}
?>