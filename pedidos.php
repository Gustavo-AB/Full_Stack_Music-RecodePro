<?php 
    require_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pedidos</title>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="mt-5 jumbotron">
                <form class="form" action="recebepedidos.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>

                    <div class="form=group">
                        <label for="endereco">Endereço Para Envio</label>
                        <input class="form-control" type="text" name="endereco" id="endereco">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Número de Celular ou Telefone</label>
                        <input class="form-control" type="number" name="telefone" id="telefone">
                    <div>

                    <div class="form-group">
                        <label for="nome_produto">Nome do Produto</label>
                        <select type="text" class="form-control" name="nome_produto" id="nome_produto">
                            <?php
                                $sql = "select * from produtos";
                                $result = $conn->query($sql);

                                if($result->num_rows > 0){
                                    while($rows = $result->fetch_assoc()){
                            ?>
                            <option><?php echo $rows["descricao"], "$",  $rows["preco"];?></option>


                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <div class="from-group">
                        <label for="valor_unitario">Valor Unitario</label>
                        <select class="form-control" name="valor_unitario" id="valor_unitario">
                            <?php
                                $sql = "select * from produtos";
                                $result = $conn->query($sql);

                                if($result->num_rows > 0){
                                    while($rows = $result->fetch_assoc()){
                            ?>
                            <option><?php echo $rows["preco"];?></option>


                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input class="form-control" type="number" name="quantidade" id="quantidade">
                    </div>

                    <div class="form-group">
                        <label for="valor_total">Valor Total</label>
                        <input class="form-control" type="number" name="valor_total" id="valor_total">
                    </div>

                    <input class="btn btn-lg btn-primary" type="submit" value="Finalizar Pedido">

                </form>
            </div>

        </div>
    </body>
</html>