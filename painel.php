<?php
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}

include 'conexao.php';
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de Controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Painel de Controle</h1>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </div>

    <p>Bem-vindo, <strong><?= $_SESSION['usuario'] ?></strong></p>

    <h2>Produtos</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<tr>
                            <td>{$linha['nome']}</td>
                            <td>R$ {$linha['preco']}</td>
                            <td>{$linha['descricao']}</td>
                            <td>
                                <a href='editar.php?id={$linha['id']}' class='btn btn-warning btn-sm'>Editar</a>
                                <a href='excluir.php?id={$linha['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir?\");'>Excluir</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Nenhum produto encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

