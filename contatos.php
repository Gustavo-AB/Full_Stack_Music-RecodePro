<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

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