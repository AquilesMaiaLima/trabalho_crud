<?php
include ('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Novo Relatório</title>
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
    <h2>Cadastrar Novo Relatório</h2>
    <form action="salvar_relatorio.php" method="POST">
      <label>Peso (kg)</label>
      <input type="number" step="0.01" name="peso" required>

      <label>Altura (cm)</label>
      <input type="number" name="altura" required>

      <label>Gordura (%)</label>
      <input type="number" step="0.01" name="gordura" required>

      <button type="submit">Salvar</button>
    </form>
  </div>
</body>
</html>