<?php
    require_once 'config.php'; // chama (call) o arquivo config.php


    $senhaSecreta = "123";

 
    if ($_SERVER ["REQUEST_METHOD"]== "POST"){
        $senhadigitada = $_POST ['senha'];


            if($senhadigitada === $senhaSecreta) {

               
                    $sql = "SELECT * FROM tbl_mensagens";
                    $result = $conn -> query ($sql);
                    

            } else

            echo "<h1> Senha incorreta! </h1>";

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver mensagens</title>
    <link rel="stylesheet" href="estilo.css"> 
    
        <!--esse link puxo a folha de estilos  -->
</head>


<body>
    
        
        <form method="post">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha">
            <button type="submit">Enviar</button>
        </form>
        


        <!--IMPRIMIR NA TELA O RESULTADO QUE ESTA NA MEMORIA XXXX -->
        <div class = "mensagens">
                <?php if (isset($result)) : ?>              <!-- Se a variável RESULT existe e ela for diferente de VAZIO -->
                    <h2> Mensagens </h2>
                    <ul> 
                        <?php while ($row = $result ->fetch_assoc()) : ?>
                            <li> 
                                Nome_______: <?php echo $row ["nome"];?> <br>
                                Email_______: <?php echo $row ["email"];?> <br> 
                                Mensagem___: <?php echo $row ["mensagem"];?> <br> 
                                Data________: <?php echo $row ["data"];?> <br> <br>
                                

                            </li>
                        <?php endwhile; ?>
                    </ul>

                <?php else : ?>  
                        
                    
                    
                        <?php endif; ?> 
        </div>
    
</body>
</html>
