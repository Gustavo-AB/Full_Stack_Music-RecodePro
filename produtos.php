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
    <title>Produtos-Full Stack Eletro</title>
    <link href="./css/estilos.css" rel="stylesheet">
    <script src="./JavaScript/funcoes.js"></script>
</head>

<body>
    <!--Menu-->
    <?php
            include('menu.html');
        ?>
    <!--Fim do Menu-->
    <hr>
    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('guitarra')">Guitarras (3)</li>
            <li onclick="exibir_categoria('violao')">Violões (2)</li>
            <li onclick="exibir_categoria('baixo')">Contra Baixos (3)</li>
            <li onclick="exibir_categoria('piano')">Pianos Digitais (2)</li>
            <li onclick="exibir_categoria('bateria')">Baterias Acusticas (2)</li>
        </ul>
    </section>
    <!--categorias-->

    <section class="produtos">
        <?php
            $sql = "select * from produtos";
            $result = $conn->query($sql);
        
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
        ?>
                    <div class="box" id="<?php echo $rows["categoria"];?>">
                        <div class="box2">
                            <img src="<?php echo $rows["imagem"];?>" width="200px" onclick="destaque(this)"><br>
                            <p onclick="confirmar()"><?php echo $rows["descricao"];?></p>
                            <p><strike>R$ <?php echo $rows["preco"];?></strike></p>
                            <p class="preconovo">R$ <?php echo $rows["precoantigo"];?></p>
                            <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                            <button class="botao1" onclick="alerta()">DETALHES</button><br>
                            <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                        </div>
                    </div>







        <?php
                }
            }
            else{
                echo "Nenhum produto cadastrado!";
            }
        ?>


        
        <!--box-->

       
    </section>
    <hr>
    <div class="tabfinal">

        <footer class="fdp">Formas de pagamento<br><br>
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
            
</body>

</html>