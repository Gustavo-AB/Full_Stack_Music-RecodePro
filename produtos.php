<?php
  require_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produtos</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/produtos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>


  <script src="./JS/funcoes.js"></script>


</head>

<body background="./imagens/fundo_produtos.jpg">
  <?php
    require_once('menu.html');
  ?>

  <div class="container">
    <div class="categoria">
      <nav>
        <ul>
          <li>CATEGORIAS</li>
          <li onclick="exibir_todos()">TODOS (12)</li>
          <li onclick="exibir_categoria('guitarra')">GUITARRAS (3)</li>
          <li onclick="exibir_categoria('violao')">VIOLÕES (2)</li>
          <li onclick="exibir_categoria('baixo')">CONTRA BAIXOS (3)</li>
          <li onclick="exibir_categoria('piano')">PIANOS DIGITAIS (2)</li>
          <li onclick="exibir_categoria('bateria')">BATERIAS ACUSTICAS (2)</li>
        </ul>
      </nav>
    </div>
  
    <!--categorias-->

    <section>
      <?php 
        $sql = "select * from produtos";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
          while($rows = $result->fetch_assoc()){
      ?>
      <div class="box_produtos" id="<?php echo $rows["categoria"];?>">
        <div>
          <img src="<?php echo $rows["imagem"];?>" onclick="destaque(this)" width="200px"><br>
          <p><?php echo $rows["descricao"];?></p>
          <p style="color: red"><strike>R$<?php echo $rows["preco"];?></strike></p>
          <p>R$<?php echo $rows["precoantigo"];?></p>
          <button><a href="pedidos.php">COMPRAR</a></button>
          <button>DETALHES</button>
          <button>CARRINHO</button>
          
        </div>
      </div>
      <?php
          }
        } else{
          echo "Nenhum produto cadastrado!";
        }
      ?>    
    </section>
    <div id="footer">
        <p>Formas de Pagamento</p>
    
    </div>
  </div>
    
</body>