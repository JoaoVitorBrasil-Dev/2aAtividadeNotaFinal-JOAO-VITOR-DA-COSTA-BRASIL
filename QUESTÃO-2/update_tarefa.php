<?php

require 'database.php';

if (isset($_GET['id'])) {
    $stmt = $db->prepare("UPDATE tasks SET completed = 1 WHERE id = ?");
    $stmt->execute([$_GET['id']]);

    header('Location: index.php');
    exit();
}
?>