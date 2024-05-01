<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "muriloluiz654@gmail.com";
    $subject = "Nova mensagem do formulário de contato";

    // Validando e sanitizando os dados do formulário
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Verificando se o e-mail é válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Por favor, insira um endereço de e-mail válido.";
        exit;
    }

    // Construindo o corpo do e-mail
    $email_body = "Nova mensagem do formulário de contato:\n\n" .
                  "Nome: $name\n" .
                  "Email: $email\n" .
                  "Telefone: $phone\n" .
                  "Mensagem:\n$message\n";

    // Enviando o e-mail
    if (mail($to, $subject, $email_body)) {
        http_response_code(200);
        echo "Obrigado! Sua mensagem foi enviada com sucesso.";
    } else {
        http_response_code(500);
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    http_response_code(405);
    echo "Método não permitido.";
}
