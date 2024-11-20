<?php
try {
    $db = new PDO('sqlite:tasks.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("CREATE TABLE IF NOT EXISTS tasks (
                id INTEGER PRIMARY KEY, 
                description TEXT, 
                due_date TEXT,
                due_time TEXT,
                completed INTEGER)");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>