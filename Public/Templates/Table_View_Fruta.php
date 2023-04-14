<?php
    if(!empty($_GET['id']))
    {
        include_once('../config.php');

        $id_2 = $_GET['id'];

        $table_2 = $_GET['table'];
        
    }
?>

<?php
    include_once('../config.php');

    $sql = "SELECT * FROM create_juice_ativo WHERE id=1";

    $result = $conexao->query($sql);

?>

<div class="title_table" id="table_create_juice_ativo">Suco à ser Adicionado</div>

<table class="table" id="table_create_juice_ativo">
    <thead>
        <tr>
            <th class="id">Id</th>
            <th class="nome">Nome</th>
            <th class="valor">Valor</th>
            <th class="preenche"   >   </th>
            <th class="botao"   >   
                    <a href='Go_Select_Frutas.php?table_Insert=create_juice_ativo' title='Editar' id='btn-primary'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                    </a> 
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='id'>".$user_data['id_fk']."</td>";
                echo "<td class='nome'>".$user_data['nome']."</td>";
                echo "<td class='valor'>".$user_data['valor']."</td>";
                echo    "<td class='preenche'></td>";    
                echo "<td class='botao'>
                    <a href='tools/CRUD_Delete.php?table=create_juice_ativo&id=$user_data[id]' title='Deletar' id='btn-danger'>
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

