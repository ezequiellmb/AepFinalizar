<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <hr>
    <form action="/index.php/pessoa/<?= $acao ?>" method="POST">
        <?php if ($alteraDb) : ?>
            Nome:  <input type="text" name="idade" value="<?= $usuarios[0]->nome ?>"> <br>
            Descricao:  <input type="text" name="idade" value="<?= $usuarios[0]->descricao ?>"> <br>
            Quantidade:  <input type="text" name="idade" value="<?= $usuarios[0]->quantidade?>"> <br>
        <?php else: ?>
            Nome: <input type="text" name="nome"> <br>
            Descricao: <input type="int" name="descricao"> <br>
            Quantidade:<input type="int" name="quantidade"> <br>
        <?php endif ?>

        <input type="submit" value="Salvar">

    </form>
</body>
</html>
