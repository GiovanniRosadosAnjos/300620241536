<?php

require_once 'config.php';

//Pegando os dados vindos do formulário
$nome = $_POST['nome']; // variável NOME recebe oque esta formulário campo NOME
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
//$data_atual = date('d/m/Y');
//$hora_atual = date('H:i:s');

// $nome, $email, $mensagem, $data_atual, $hora_atual






$smtp = $conn-> prepare ("INSERT INTO tbl_mensagens (nome, email, mensagem) VALUES(?,?,?)");
$smtp -> bind_param ("sss", $nome, $email, $mensagem);

if ($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro no envio da mensagem: ".$smtp->error;
}

$smtp->close();
$conn->close();

?>


