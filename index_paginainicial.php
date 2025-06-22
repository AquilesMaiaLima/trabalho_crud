<?php
include ('verifica_login.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleinicio.css">
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
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main class="dashboard">
    <h2>Bem-vindo, <?php echo $_SESSION['nome'] ?></h2>

    <div class="cards">
      <div class="card">
        <h3>Relatórios de Avaliação</h3>
        <p>Gerencie relatórios de avaliações físicas feitas com seus clientes.</p>
        <a href="index_relatorio.php">Acessar</a>
      </div>

      <div class="card">
        <h3>Agendar Avaliação</h3>
        <p>Cadastrar avaliações feitas pessoalmente.</p>
        <a href="index_agendamento.php">Acessar</a>
      </div>

      <div class="card">
        <h3>Disponibilidade de Horários</h3>
        <p>Defina os horários disponíveis para novos agendamentos.</p>
        <a href="#">Acessar</a>
      </div>
    </div>
  </main>
</body>
</html>