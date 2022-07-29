<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controllers/CorrentistaController.php" method="post">
        <input type="text" name="razao_social" placeholder="razao" required>
        <input type="text" name="cpf_cnpj" placeholder="cpf" required>
        <input type="text" name="rg_inscSocial" placeholder="rg" required>
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="senha" placeholder="senha" required>
        <br>
        <?php
            echo isset($_SESSION['cliente']) ? $_SESSION['cliente'] : 'nada';
        ?>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
