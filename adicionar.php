<?php
include 'conexao.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $stmt->execute([$nome, $email]);

    header("Location: index.php");
}
?>

<h2>Adicionar Usuário</h2>
<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit">Salvar</button>
</form>
