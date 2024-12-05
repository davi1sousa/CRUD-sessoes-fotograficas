<?php include 'db_config.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $client_name = $_POST['client_name'];
    $session_date = $_POST['session_date'];
    $session_time = $_POST['session_time'];

    $sql = "INSERT INTO sessions (client_name, session_date, session_time) VALUES ('$client_name', '$session_date', '$session_time')";
    if ($conn->query($sql)) {
        header('Location: index.php');
    } else {
        echo "Erro ao adicionar sessão: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="add_session.css">
    <link rel="stylesheet" href="button.css">
    <title>Adicionar Sessão</title>
</head>
<body>
    <h1>Adicionar Nova Sessão</h1>
    <form method="POST">
        <label>Nome do Cliente:</label>
        <input type="text" name="client_name" required>
        <label>Data da Sessão:</label>
        <input type="date" name="session_date" required>
        <label>Hora da Sessão:</label>
        <input type="time" name="session_time" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php" class="btn-back">Voltar</a>
</body>
</html>
