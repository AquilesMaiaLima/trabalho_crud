<?php
include ('verifica_login.php');
include('conexao.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM relatorio_avaliacao WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$r = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Editar Relatório</title>
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
    <h2>Editar Relatório</h2>
    <form action="atualizar_relatorio.php" method="POST">
      <input type="hidden" name="id" value="<?= $r['id'] ?>">

      <label>Peso (kg)</label>
      <input type="number" step="0.01" name="peso" value="<?= $r['peso'] ?>" required>

      <label>Altura (cm)</label>
      <input type="number" name="altura" value="<?= $r['altura'] ?>" required>

      <label>Gordura (%)</label>
      <input type="number" step="0.01" name="gordura" value="<?= $r['gordura'] ?>" required>

      <button type="submit">Salvar Alterações</button>
    </form>
  </div>
</body>
</html>