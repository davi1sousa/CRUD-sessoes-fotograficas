<?php include 'db_config.php'; ?>

<?php
$id = $_GET['id'];
$conn->query("DELETE FROM sessions WHERE id=$id");
header('Location: index.php');
?>

