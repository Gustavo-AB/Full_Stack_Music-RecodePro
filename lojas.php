<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

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