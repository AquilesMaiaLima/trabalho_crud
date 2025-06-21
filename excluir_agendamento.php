<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $pdo->prepare("DELETE FROM agendamento WHERE id = :id");
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        header("Location: index_agendamento.php");
        exit;
    } else {
        echo "Erro ao excluir agendamento.";
    }
} else {
    echo "ID inválido.";
}
?>