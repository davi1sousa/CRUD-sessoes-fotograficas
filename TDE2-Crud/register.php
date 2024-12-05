<?php
session_start();
include('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "As senhas não correspondem.";
    } else {
        // Verifica se o usuário já existe
        $query = "SELECT * FROM photographers WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "O nome de usuário já está em uso.";
        } else {
            // Insere no banco de dados
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO photographers (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($insert_query);
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                $success = "Cadastro realizado com sucesso! Faça login.";
                header('Location: login.php');
                exit();
            } else {
                $error = "Erro ao cadastrar. Tente novamente.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <form method="POST" action="register.php">
        <h1>Cadastro</h1>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirm_password">Confirme a senha:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Cadastrar</button>
        <p>Já possui uma conta? <a href="login.php">Faça login</a></p>
    </form>
</body>
</html>
