<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'muriloluiz654@gmail.com'; // Insira o seu endereço de e-mail aqui
    $subject = 'Novo contato do formulário';
    $body = "Nome: $name\nEmail: $email\nTelefone: $phone\nMensagem:\n$message";

    // Envie o e-mail
    mail($to, $subject, $body);

    // Redirecione para a página de agradecimento
    header('Location: obrigado.html');
    exit;
}
?>