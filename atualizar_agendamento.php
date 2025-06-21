<?php
require 'conexao.php';
include('verifica_login.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome_cliente'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    $stmt = $pdo->prepare("UPDATE agendamento SET nome_cliente = :nome, data = :data, horario = :horario WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':horario', $horario);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: index_agendamento.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }
}
?>