<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    <style>
        body {
            background-image: url('https://thumbs.dreamstime.com/b/borrifar-o-fundo-abstrato-do-livro-nas-prateleiras-de-livrarias-estilo-aconchegante-na-livraria-biblioteca-visualiza%C3%A7%C3%A3o-288586659.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h1 {
            color: #2874a6;
            font-family: cursive;
            font-size: 200%;
        }

        .form-section {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 10px;
        }

        table {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Livraria</h1>

        <div class="form-section">
            <h2>Adicionar Livro</h2>
            <form action="add_tarefa.php" method="POST">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required><br><br>

                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" required><br><br>

                <label for="ano_publicacao">Data de Publicação:</label>
                <input type="date" id="ano_publicacao" name="ano_publicacao" required><br><br>

                <input type="submit" value="Adicionar Livro">
            </form>
        </div>

        <div class="form-section">
            <h2>Excluir Livro</h2>
            <form action="delete_tarefa.php" method="POST">
                <label for="id">ID do Livro:</label>
                <input type="number" id="id" name="id" required><br><br>

                <input type="submit" value="Excluir Livro">
            </form>
        </div>

        <h2>Livros Cadastrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Data de Publicação</th>
            </tr>
            <?php
            include 'database.php';
            $result = $db->query('SELECT * FROM livros');
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['titulo']}</td>";
                echo "<td>{$row['autor']}</td>";
                echo "<td>{$row['ano_publicacao']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>