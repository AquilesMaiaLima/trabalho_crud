<?php
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } elseif (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try {
            $stmt = $pdo->prepare("SELECT * FROM avaliador WHERE email = :email AND senha = :senha");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                $avaliador = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $avaliador['id'];
                $_SESSION['nome'] = $avaliador['nome'];

                header("Location: index_paginainicial.php");
                exit();
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos.";
            }
        } catch (PDOException $e) {
            echo "Erro no banco de dados: " . $e->getMessage();
        }
    }
}
?>