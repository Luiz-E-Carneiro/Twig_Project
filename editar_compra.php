<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eidtar</title>
</head>
<body>
    <h2>Editar compra</h2>

    <form action="confirma_editar_compra.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
        <input type="text" name="item" value="<?php echo $_POST['item']?>">
        <button type="submit">Vai</button>
    </form>
    
</body>
</html>
