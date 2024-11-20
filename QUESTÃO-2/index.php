<?php

require 'database.php';

$tarefas_pendentes = $db->query("SELECT * FROM tasks WHERE completed = 0 ORDER BY due_date, due_time");
$tarefas_concluidas = $db->query("SELECT * FROM tasks WHERE completed = 1 ORDER BY due_date, due_time");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Tarefas</title>
    <style>
        body {
            background-image: url('https://wallpapers.com/images/hd/4k-background-c9k23c46gjmmn8cw.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            width: 60%;
            margin: 50px auto;
            text-align: center;
        }

        h1,
        h2 {
            color: #2c3e50;
        }

        form {
            margin-bottom: 20px;
        }

        input,
        button {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #2c3e50;
        }

        button {
            background-color: #2c3e50;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #34495e;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #ecf0f1;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: #2980b9;
            margin-left: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Gerenciamento de Tarefas</h1>

        <h2>Adicionar Tarefa</h2>
        <form action="add_tarefa.php" method="post">
            <input type="text" name="description" placeholder="Descrição" required><br><br>
            <input type="date" name="due_date" required>
            <input type="time" name="due_time" required><br><br>
            <button type="submit">Adicionar</button>
        </form>

        <h2>Tarefas Pendentes</h2>
        <ul>
            <?php foreach ($tarefas_pendentes as $tarefa): ?>
                <li>
                    <?php echo htmlspecialchars($tarefa['description']); ?>
                    - <?php echo htmlspecialchars($tarefa['due_date']); ?>
                    - <?php echo htmlspecialchars($tarefa['due_time']); ?>
                    <a href="update_tarefa.php?id=<?php echo $tarefa['id']; ?>">Concluir</a>
                    <a href="delete_tarefa.php?id=<?php echo $tarefa['id']; ?>">Excluir</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Tarefas Concluídas</h2>
        <ul>
            <?php foreach ($tarefas_concluidas as $tarefa): ?>
                <li>
                    <?php echo htmlspecialchars($tarefa['description']); ?>
                    - <?php echo htmlspecialchars($tarefa['due_date']); ?>
                    - <?php echo htmlspecialchars($tarefa['due_time']); ?>
                    <a href="delete_tarefa.php?id=<?php echo $tarefa['id']; ?>">Excluir</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>