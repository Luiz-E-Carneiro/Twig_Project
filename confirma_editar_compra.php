<?php

require_once('inc/banco.php');

$id = $_POST['id'] ?? null;

if($id){

    $query = $pdo->prepare('UPDATE compras SET item = :item WHERE id = :id');

    // Associa os valores dentro da consulta
    $query->bindValue(':item', $_POST['item']);
    $query->bindValue(':id', $id);

    $query->execute();
    
    header('location:compras.php');
}
