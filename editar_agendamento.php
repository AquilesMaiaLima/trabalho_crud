<?php
include('conexao.php');
include('verifica_login.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM agendamento WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $agendamento = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$agendamento) {
        echo "Agendamento não encontrado.";
        exit;
    }
} else {
    echo "ID não informado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Editar Agendamento</title>
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
    <h2>Editar Agendamento</h2>
    <form action="atualizar_agendamento.php" method="POST">
      <input type="hidden" name="id" value="<?= $agendamento['id'] ?>">

      <label>Nome Cliente</label>
      <input type="text" name="nome_cliente" value="<?= htmlspecialchars($agendamento['nome_cliente']) ?>" required>

      <label>Data</label>
      <input type="date" name="data" value="<?= $agendamento['data'] ?>" required>

      <label>Horário</label>
      <input type="time" name="horario" value="<?= substr($agendamento['horario'], 0, 5) ?>" required>

      <button type="submit">Salvar Alterações</button>
    </form>
  </div>
</body>
</html>