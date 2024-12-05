<?php include 'db_config.php'; ?>
<?php
session_start();
if (!isset($_SESSION['photographer_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesIndex.css">
   
    <title>Sessões Fotográficas</title>
</head>
<body>
   <h1>Sistema web de Gestão de Sessões Fotográficas</h1> <!-- Conteúdo da agenda ou outras informações --> 
        <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1> 
        <a href="logout.php" class="btn-logout">Sair</a>

    <a href="add_session.php" class="btn">Adicionar Nova Sessão</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM sessions");
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['client_name'] ?></td>
                    <td><?= $row['session_date'] ?></td>
                    <td><?= $row['session_time'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>
                    <a href="edit_session.php?id=<?= $row['id'] ?>" class="btn-action btn-edit">Editar</a>
                    <a href="delete_session.php?id=<?= $row['id'] ?>" class="btn-action btn-delete" onclick="return confirm('Tem certeza?')">Excluir</a>

                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
