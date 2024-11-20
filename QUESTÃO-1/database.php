<?php
// database.php

// Abrindo ou criando o banco de dados SQLite
$db = new PDO('sqlite:livraria.db');

// Cria a tabela livros se não existir
$query = 'CREATE TABLE IF NOT EXISTS livros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT NOT NULL,
    autor TEXT NOT NULL,
    ano_publicacao INTEGER NOT NULL
)';
$db->exec($query);
?>
