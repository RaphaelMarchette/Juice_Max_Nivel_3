<?php
    if(!empty($_GET['id']))
    {
        include_once('../../../config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM batido WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        $cont = 0;
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $valor = $user_data['valor'];
                $cont += 1;
            }
            header('Location: ../new.php');

            if($cont == 1)
            {
                $sqlInsert = "INSERT INTO batido_ativo (id, id_fk, nome, valor) VALUES ('1', '$id', '$nome', '$valor') ";
                $result = $conexao->query($sqlInsert);
            }
            header('Location: ../new.php');
        }
        else
        {
            header('Location: ../new.php');
        }
    }
    else
    {
        header('Location: ../new.php');
    }

?>