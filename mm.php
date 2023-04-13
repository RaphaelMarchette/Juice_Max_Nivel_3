<?php

    include_once('config.php');

    $data = $_GET["pesquisar"];

    $sqlSelect = "SELECT * FROM sucos WHERE id=$data";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $valor = $user_data['valor'];
        }

        $sqlInsert = "UPDATE marcado SET id='1',nome='$nome',valor='$valor' WHERE id='1'";
        $result = $conexao->query($sqlInsert);
        header('Location: sistema.php');
    }
    else
    {
        header('Location: sistema.php');
    }

?>