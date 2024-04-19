<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    // Configurações de e-mail
    $to = "seu_email@example.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Novo contato do formulário de contato";
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Telefone: $phone\n\n";
    $body .= "Mensagem:\n$message";
    $headers = "From: $email";
    
    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Redireciona para a página de agradecimento
        header("Location: obrigado.html");
        exit;
    } else {
        // Se houver um erro no envio do e-mail, exibe uma mensagem de erro
        echo "Ocorreu um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
} else {
    // Se o método de requisição não for POST, redireciona para a página inicial
    header("Location: index.html");
    exit;
}
?>
