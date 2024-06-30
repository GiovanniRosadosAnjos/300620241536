
<?php

//configuração de credenciais
$server = 'database-giovanni.cbssa4qs8cj4.us-east-1.rds.amazonaws.com';
$usuario = 'giovanni';
$senha = '34178913Gio$4';
$banco = 'db_inmetro';

//conecta com o banco de dado
$conn = new mysqli ($server, $usuario, $senha, $banco);         //variável conexão


//tes erro de conexão
if($conn -> connect_error){
    die("falha ao se comunicar com o banco de dados: ".$conn -> connect_error);
}



?>
