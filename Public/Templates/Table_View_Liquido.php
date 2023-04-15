<?php
    include_once('../config.php');

    $sql = "SELECT * FROM view_liquido WHERE id=1";

    $result = $conexao->query($sql);

?>

<?php
    include_once('../config.php');

    $sql_6 = "SELECT SUM(peso) as pesototal FROM ingredientes";
    $sql_6 = $conexao->query($sql_6);
    $row = $sql_6->fetch_assoc();
    $soma = $row['pesototal'];
    $soma_peso = number_format($soma, 3, '.', '');
    $peso = 0.500 - $soma_peso;
    $peso = number_format($peso, 3, '.', '');
?>


<table class="table" id="table_batido_ativo">
    <thead>
        <tr>
            <th class="title_table" >Acréscimo</th>
        <tr>
            <th class="id">Id</th>
            <th class="nome">Nome</th>
            <th class="valor">Kg.</th>
            <th class="valor">Valor</th>
            <th class="preenche"   >   </th>
            <th class="botao"   >...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class='id'>".$user_data['id_fk']."</td>";
                    echo "<td class='nome'>".$user_data['nome']."</td>";
                    echo "<td class='valor'>".$peso."</td>";

                    $valor_kg = $user_data['valor'];
                    $valor =  ($valor_kg * $peso) * $lucro ;
                    $valor = number_format($valor, 2, '.', '');
                    echo "<td class='valor'>".$valor."</td>";
                    echo    "<td class='preenche'></td>";    
                    echo "<td class='botao'>
                            <a href='Tools/CRUD_Delete.php?table=view_liquido&id=$user_data[id]' title='Deletar' id='btn-danger'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                        </td>";
                echo "</tr>";
                }
            ?>
    </tbody>
</table>
