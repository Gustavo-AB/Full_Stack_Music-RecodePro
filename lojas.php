<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

    <script src="./JS/funcoes.js"></script>
    <style>
        .jumbotron .divl{
            dislay: inline-block;
        }
    </style>

</head>
<body>
    <?php require_once('menu.html');?>
    <div class="container">
        <section>
            <div class="mt-5 jumbotron">
                <div class="divl">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 500</p>
                    <p>10º Andar</p>
                    <p>Centro</p>
                    <p>(21) 2222-2222</p>
                </div>
                <hr>
                <div class="divl">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3º Andar</p>
                    <p>Jardins</p>
                    <p>(11)3333-3333</p>
                </div>
                <hr>
                <div class="divl">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major Avila, 370</p>
                    <p>Vila Mariana</p>
                    <p>(47)5555-5555</p>
                    <br><br>
                </div>
            </div>
        </section>
    </div>
</body>
</html>