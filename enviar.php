

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Defina para qual e-mail vai ser enviado
    $destinatario = "seuemail@exemplo.com";  // 🔴 TROQUE pelo seu e-mail real
    $assunto = "Nova mensagem do site - Juntos por Você";

    // Corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos
    $headers = "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envia
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='contato.php';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem. Tente novamente.'); window.location.href='contato.php';</script>";
    }
}
?>