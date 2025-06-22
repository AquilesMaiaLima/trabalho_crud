<?php
include('verifica_login.php');
include('conexao.php');

$stmt = $pdo->query("SELECT * FROM relatorio_avaliacao ORDER BY data_criacao DESC");
$relatorios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Relatórios</title>
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
        <li><a href="index_relatorio.php">Relatórios</a></li>
        <li><a href="index_agendamento.php">agendamento</a></li>
        <li><a href="#">Disponibilidade</a></li>
        <li><a href="index_paginainicial.php">Inicio</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <h2>Relatórios de Avaliação</h2>
    <a href="novo_relatorio.php" class="botao-verde">+ Novo Relatório</a>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Peso</th>
          <th>Altura</th>
          <th>Gordura (%)</th>
          <th>Data Criação</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($relatorios as $r): ?>
          <tr>
            <td><?= $r['id'] ?></td>
            <td><?= $r['peso'] ?> kg</td>
            <td><?= $r['altura'] ?> cm</td>
            <td><?= $r['gordura'] ?>%</td>
            <td><?= date('d/m/Y', strtotime($r['data_criacao'])) ?></td>
            <td>
              <a href="editar_relatorio.php?id=<?= $r['id'] ?>" class="editar">Editar</a>
              <a href="excluir_relatorio.php?id=<?= $r['id'] ?>" class="excluir" onclick="return confirm('Deseja excluir?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>