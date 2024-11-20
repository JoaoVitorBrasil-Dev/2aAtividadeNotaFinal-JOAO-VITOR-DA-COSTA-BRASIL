<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $due_time = $_POST['due_time'];

    $stmt = $db->prepare("INSERT INTO tasks (description, due_date, due_time, completed) VALUES (?, ?, ?, 0)");
    $stmt->execute([$description, $due_date, $due_time]);

    header('Location: index.php');
    exit();
}
?>