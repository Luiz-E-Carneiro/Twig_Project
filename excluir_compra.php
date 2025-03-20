<?php

require_once('inc/banco.php');

$id = $_POST['id'] ?? null;

if($id){
    $query = $pdo->prepare('DELETE from compras WHERE id = :id');

    // Associa os valores dentro da consulta
    $query->bindValue(':id', $id);

    $query->execute();
}


header('location:compras.php');