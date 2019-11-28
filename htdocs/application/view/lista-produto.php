<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produto</title>
</head>
<body>
    <h1>Listagem de Produto</h1>
    <hr>
    <a href="/index.php/Pessoa/forminsere">Cadastrar</a>
    <table border=1>
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Quantidade</th>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>

                    <td><a href="/index.php/Produto/formaltera?id=<?= $u->id ?>">Editar</a></td>
                    <td><a href="/index.php/Produto/deleteDb?id=<?= $u->id ?>">Excluir</a></td>
                </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>
</html>
