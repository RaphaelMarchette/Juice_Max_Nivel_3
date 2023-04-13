<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../Static_17/css/Tela.css"/>
    <link rel="stylesheet" href="../../Static_17/css/Table.css"/>
    <link rel="stylesheet" href="../../Static_17/css/Form_Create_Juice.css" />
    <script src="../../Static/Scripts/View.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Juice Max | New Juice</title>
</head>
<body>

<div class="box">
    <form action="new_juice.php" method="POST">
        <fieldset>
            <legend><b>New Juice</b></legend>
            <br><br>
            <div class="inputBox">
                <input type="text" name="id" id="id" class="inputUser" maxlength="3" size="4" required>
                <label for="id" class="labelInput">Id</label>
            </div>
            <br><br><br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required disabled=true>
                <label for="nome" class="travado">Nome</label>
            </div>
            <br><br><br>
            <div class="inputBox">
                <input type="text" name="valor" id="valor" class="inputUser" required disabled=true>
                <label for="valor" class="travado">Valor</label>
            </div>
            <br><br><br>
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
    <a href="enter.php" id="bt_voltar">Voltar</a>
</div>

