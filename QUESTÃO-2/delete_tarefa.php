<?php

require 'database.php';

if (isset($_GET['id'])) {
    $stmt = $db->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->execute([$_GET['id']]);

    header('Location: index.php');
    exit();
} else {
    echo "ID da tarefa não fornecido.";
}
?>