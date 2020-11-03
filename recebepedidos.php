<?php
            require_once('conexao.php');

            if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) 
            &&isset($_POST['nome_produto']) && isset($_POST['valor_unitario']) && isset($_POST['quantidade']) && isset($_POST['valor_total'])){
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $nome_produto = $_POST['nome_produto'];
                $valor_unitario = $_POST['valor_unitario'];
                $quantidade = $_POST['quantidade'];
                $valor_total = $_POST['valor_total'];

                $sql = "insert into pedidos (nome, endereco, telefone, nome_produto, valor_unitario, quantidade, valor_total)
                values ('$nome', '$endereco', '$telefone', '$nome_produto', '$valor_unitario', '$quantidade', '$valor_total')";
                $result = $conn->query($sql);
                $show = "select * from pedidos";
                $showResult = $conn->query($show);

            
            } else{
                $show = "select * from pedidos";
                $showResult = $conn->query($show);
            }
        ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar pediddo</title>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
     
        <div class=" table=responsive">
            <table class="mt-5 mb-5 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nome Completo</th>
                        <th>Endereço Para Envio</th>
                        <th>Número de Celular ou Telefone</th>
                        <th>Nome do Produto</th>
                        <th>Valor Unitario</th>
                        <th>Quantidade</th>
                        <th>Valor Total</th>
                    </tr>
                </thead>
                

                    <tbody>
                            <?php while($rows = $showResult->fetch_assoc()){?>
                        <tr>
                            <td><?php echo $rows["nome"];?></td>
                            <td><?php echo $rows["endereco"];?></td>
                            <td><?php echo $rows["telefone"];?></td>
                            <td><?php echo $rows["nome_produto"];?></td>
                            <td><?php echo $rows["valor_unitario"];?></td>
                            <td><?php echo $rows["quantidade"];?></td>
                            <td><?php echo $rows["valor_total"]?></td>
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>

            <button class="mb-5 btn btn-success btn-lg"><a class="text-white" href="obrigado.php">Confirmar Pedido</a></button>
            <button class="mb-5 btn btn-primary btn-lg" type="button"><a class="text-white"
                    href="pedidos.php">Voltar</a></button>
            <button class="mb-5 btn btn-primary btn-lg"><a class="text-white" href="index.php">Voltar a Navegação</a></button>

        
    </div>
  
</body>

</html>