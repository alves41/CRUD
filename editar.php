<?php
include 'conexao.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch();

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
    $stmt->execute([$nome, $email, $id]);

    header("Location: index.php");
}
?>

<h2>Editar Usuário</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $usuario['email'] ?>"><br>
    <button type="submit">Atualizar</button>
</form>
