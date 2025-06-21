<?php
include ('verifica_login.php');
include('conexao.php');
$stmt = $pdo->prepare("SELECT * FROM agendamento ORDER BY data DESC");
$stmt->execute();
$agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista de Agendamentos</title>
  <link rel="stylesheet" href="styleagendamento.css">
</head>
<body>
    <header>
    <div class="logo">
      <img src="imagens/logo.png" alt="Logo Checknow" />
      <h1>Checknow</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#">Relatórios</a></li>
        <li><a href="index_agendamento.php">agendamento</a></li>
        <li><a href="#">Disponibilidade</a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <h2>Agendamentos</h2>
    <a href="index__agendar.php" class="botao-verde">+ Nova Avaliação</a>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Cliente</th>
          <th>Horário</th>
          <th>Data</th>
          <th>Data Criação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($agendamentos as $ag): ?>
          <tr>
            <td><?= $ag['id'] ?></td>
            <td><?= htmlspecialchars($ag['nome_cliente']) ?></td>
            <td><?= substr($ag['horario'], 0, 5) ?></td>
            <td><?= date('d/m/Y', strtotime($ag['data'])) ?></td>
            <td><?= date('d/m/Y', strtotime($ag['data_criacao'])) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>