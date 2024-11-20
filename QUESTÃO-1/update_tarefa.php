<?php
// update_book.php

include 'database.php';

if (isset($_POST['id']) && isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['ano_publicacao'])) {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano_publicacao = $_POST['ano_publicacao'];

    $stmt = $db->prepare("UPDATE livros SET titulo = ?, autor = ?, ano_publicacao = ? WHERE id = ?");
    $stmt->execute([$titulo, $autor, $ano_publicacao, $id]);

    header('Location: index.php');
}
?>
