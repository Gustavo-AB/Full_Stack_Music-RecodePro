<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="./JS/funcoes.js"></script>

    


</head>
<body>
    <?php require_once('menu.html');?>
    <div class="container">
        <div class="jumbotron">
            <form class="form" action="#">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
                <div class="form-group">
                    <label for="msg">Deixe Aqui Sua Mensagem</label>
                    <textarea class="form-control" name="msg" id="msg" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
        
    </div>

</body>
</html>