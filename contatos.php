<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "flmusic";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("A conexão as BD falhou " . mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>  
        <link href="./css/estilos.css" rel="stylesheet" >
    </head>
    <body>
        <!--Menu-->
        <?php
            include('menu.html');
        ?>
        <!--Fim do Menu-->
            <hr>
            <br><br><br><br><br><br>
            <section class="form">
                <form>
                    <div class="box3">
                        <label id="nome"><strong>Nome</label></strong><br><br>
                        <input type="text" class="input"><br><br><br><br>
                    </div>
                    <div class="box4">
                        <label id="msg"><strong>Mensagem</strong></label><br><br>
                        <textarea  class="inputtxa">Deixe sua mensagem para nós aqui!</textarea>
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </section>
            
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr>
            <div class="tabfinal"> 
             
                <footer class="fdp" >Formas de pagamento<br><br>
                    <img class="imfdp" src="./imagens/fdp.jpg" width="25%" alt="Formas de pagamento"><br>
                    <p class="copy">&copy; Recode Pro</p>
                </footer>
                <section class="ncontatos">
                    <div class="divc">
                        <img src="./imagens/email.jpg" width="40px"><br>
                        <font face="Arial" size="4">fullstackmusic@gmail.com</font>
                    </div>
                    <div class="divc">
                        <img src="./imagens/zap.jpg" width="40px"><br>
                        <font face="Arial" size="4">(11)99999-9999</font>
                    </div>
            </section>
            <div>
        </section>
    </body>
</html>