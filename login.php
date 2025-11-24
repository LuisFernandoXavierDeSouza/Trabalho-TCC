<?php
session_start();
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = $_POST['email']; // corresponde ao input name="email"
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE user = '$login'";
    $res = mysqli_query($conexao, $sql);
    $usuario = mysqli_fetch_assoc($res);

    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario'] = $usuario['nome']; // nome da sessão compatível com painel.php
        header("Location: pagina.php");
        exit;
    } else {
        $erro = "Algo de errado, senha incorreta ou email!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .center-login {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #206fbe;
      padding: 20px;
    }

    .card {
      width: 100%;
      max-width: 400px;
      border-radius: 20px;
      padding: 25px;
      border: none;
    }

    .btn-primary {
      background-color: #4CAF50;
      border: none;
    }

    .btn-primary:hover {
      background-color: #45a049;
    }

    .donate-btn {
      background-color: #ffc107;
      color: #212529;
      margin-top: 10px;
    }

    .donate-btn:hover {
      background-color: #e0a800;
      color: white;
    }

    h1 {
      font-weight: bold;
      color: #333;
    }
  </style>
</head>
<body>

  <div class="center-login">
    <div class="card shadow-lg">
      <h1 class="text-center mb-4"><i class="bi bi-heart-fill text-danger"></i> Juntos por você</h1>
      <p class="text-center mb-4">Aqueça vidas com sua solidariedade</p>

      <?php if(isset($erro)): ?>
        <div class="alert alert-danger" role="alert">
          <?= $erro ?>
        </div>
      <?php endif; ?>

      <form method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Endereço de e-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" required>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
          <label class="form-check-label" for="lembrar">Lembrar de mim</label>
        </div>

        <button type="submit" class="btn btn-success w-100">Entrar</button>
        <a href="contatos.html" class="btn donate-btn w-100 mt-2">Quero doar <i class="bi bi-box-seam"></i></a>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

