<?php include 'db_config.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM sessions WHERE id=$id");
$session = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $client_name = $_POST['client_name'];
    $session_date = $_POST['session_date'];
    $session_time = $_POST['session_time'];
    $status = $_POST['status'];

    $sql = "UPDATE sessions SET client_name='$client_name', session_date='$session_date', session_time='$session_time', status='$status' WHERE id=$id";
    if ($conn->query($sql)) {
        header('Location: index.php');
    } else {
        echo "Erro ao atualizar sessão: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleedit.css">
    <link rel="stylesheet" href="button.css">
    <title>Editar Sessão</title>
</head>
<body>
    <h1>Editar Sessão</h1>
    <form method="POST">
        <label>Nome do Cliente:</label>
        <input type="text" name="client_name" value="<?= $session['client_name'] ?>" required>
        <label>Data da Sessão:</label>
        <input type="date" name="session_date" value="<?= $session['session_date'] ?>" required>
        <label>Hora da Sessão:</label>
        <input type="time" name="session_time" value="<?= $session['session_time'] ?>" required>
        <label>Status:</label>
        <select name="status">
            <option value="Pendente" <?= $session['status'] == 'Pendente' ? 'selected' : '' ?>>Pendente</option>
            <option value="Em Edição" <?= $session['status'] == 'Em Edição' ? 'selected' : '' ?>>Em Edição</option>
            <option value="Concluído" <?= $session['status'] == 'Concluído' ? 'selected' : '' ?>>Concluído</option>
        </select>
        <button type="submit">Salvar</button>

    </form>
    <a href="index.php" class="btn-back">Voltar</a>
</body>
</html>
