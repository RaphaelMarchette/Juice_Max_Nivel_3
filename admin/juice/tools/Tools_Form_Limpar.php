<?php

    include_once('../../../config.php');

    $sqlDelete = "UPDATE peso_ativo SET id_fk='', peso='' WHERE id= 1 ";
    $resultDelete = $conexao->query($sqlDelete);

    $sqlDelete = "UPDATE create_juice_ativo SET id_fk='', nome='', valor='' WHERE id= 1 ";
    $resultDelete = $conexao->query($sqlDelete);

    $sqlDelete = "DELETE FROM batido_ativo WHERE id=1";
    $resultDelete = $conexao->query($sqlDelete);
    
    header('Location: ../new.php');
   
?>