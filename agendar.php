<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_cliente = $_POST['nome_cliente'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    $id_cliente = rand(10, 999);

    $sql = "INSERT INTO agendamento (nome_cliente, horario, data)
            VALUES (:nome_cliente, :horario, :data)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome_cliente', $nome_cliente);
    $stmt->bindParam(':horario', $horario);
    $stmt->bindParam(':data', $data);

    if ($stmt->execute()) {
        header("Location: index_agendamento.php");
        exit;
    } else {
        echo "Erro ao cadastrar agendamento.";
    }
}
?>