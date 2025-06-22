<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Avaliação | Checknow</title>
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
        <li><a href="index_paginainicial.php">Inicio</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <h2>Cadastrar Avaliação</h2>
    <form action="agendar.php" method="POST">
      <label for="nome_cliente">Nome Cliente</label>
      <input type="text" id="nome_cliente" name="nome_cliente" required>

      <label for="data">Data</label>
      <input type="date" id="data" name="data" required>

      <label for="horario">Horário</label>
      <input type="time" id="horario" name="horario" required>

      <button type="submit">Salvar</button>
    </form>
  </div>
</body>
</html>