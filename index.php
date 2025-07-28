<?php
include 'conexao.php';
$stmt = $pdo->query("SELECT * FROM usuarios");
?>

<h2>Usuários</h2>
<a href="adicionar.php" style="text-decoration:none;">
        <button style="padding:8px 12px; margin-bottom:10px; background-color: #28a745; color: white; border:none; border-radius:4px; cursor:pointer;">
        Adicionar
        </button>
        </a>


<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
    <tr style="background-color: #f2f2f2;">
        <th>ID</th><th>Nome</th><th>Email</th><th>Ações</th>
    </tr>
    <?php while ($row = $stmt->fetch()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['nome']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td>

            <a href="editar.php?id=<?= $row['id'] ?>" style="text-decoration:none;">
                <button style="padding:5px 10px; background-color: #007bff; color: white; border:none; border-radius:4px; cursor:pointer;">
                    Editar
                </button>
            </a>
            <a href="deletar.php?id=<?= $row['id'] ?>" onclick="return confirm('Confirmar exclusão?')" style="text-decoration:none;">
                <button style="padding:5px 10px; background-color: #dc3545; color: white; border:none; border-radius:4px; cursor:pointer;">
                    Excluir
                </button>
            </a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
