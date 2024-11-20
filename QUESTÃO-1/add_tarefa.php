<?php
// add_book.php

include 'database.php';

if (isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['ano_publicacao'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano_publicacao = $_POST['ano_publicacao'];

    $stmt = $db->prepare("INSERT INTO livros (titulo, autor, ano_publicacao) VALUES (?, ?, ?)");
    $stmt->execute([$titulo, $autor, $ano_publicacao]);

    header('Location: index.php');
}
?>
