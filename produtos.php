<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos-Full Stack Eletro</title>  
        <link href="./css/estilos.css" rel="stylesheet" >
        <script src="./JavaScript/funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->
        <section class="geral">
            <header>
                <div class="menu">
                    <nav>
                        <div class="pgin" >
                            <ul>
                                <li><a href="index.php">FULL STACK MUSIC</a></li>
                            </ul>
                        </div>
                        <ul id="itensdomenu">
                            <li><a href="produtos.php">PRODUTOS</a></li>
                            <li><a href="loja.php">NOSSAS LOJAS</a></li>
                            <li><a href="contatos.php">FALE CONOSCO</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <!--Fim do Menu-->
            <hr>
            <section  class="categorias">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (12)</li>
                        <li onclick="exibir_categoria('guitarra')">Guitarras (3)</li>
                        <li onclick="exibir_categoria('violao')">Violões (2)</li>
                        <li onclick="exibir_categoria('baixo')">Contra Baixos (3)</li>
                        <li onclick="exibir_categoria('piano')">Pianos Digitais (2)</li>
                        <li onclick="exibir_categoria('bateria')">Baterias Acusticas (2)</li>
                    </ul>
            </section><!--categorias--> 

            <section class="produtos">
                <div class="box" id="guitarra" >
                    <div class="box2" >
                        <img src="./imagens/gt1.png" width = "200px" onclick="destaque(this)"><br>
                        <p onclick="confirmar()" >Guitarra Les Paul Special Ve Epiphone</p>
                        <p><strike>R$ 2.899,00</strike></p>
                        <p class="preconovo">R$ 2.609,10</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div><!--box-->
                </div>

                <div class="box" id="guitarra" >
                    <div class="box2">
                        <img src="./imagens/gt2.png" width = "200px" onclick="destaque(this)"><br>
                        <p onclick="confirmar()">GUITARRA SG SPECIAL VE VINTAGE Epiphone</p>
                        <p><strike>R$ 2.890,00</strike></p>
                        <p class="preconovo" >R$ 2.601,00</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div><!--box2-->
                </div>

                <div class="box" id="guitarra" >
                    <div class="box2">
                        <img src="./imagens/gt3 (1).png" width = "200px" onclick="destaque(this)"><br>
                        <p onclick="confirmar()">GUITARRA TG 500 MGY Tagima</p>
                        <p><strike>R$ 1.190,00</strike></p>
                        <p class="preconovo">R$ 1.071,00</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="violao" >
                    <div class="box2">
                        <img src="./imagens/vl1.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/violao-martin-dx1rae-com-captacao-fishman-sonitone-martin-69939" >Violão Martin Dx1rae com Captação Fishman</a>
                        <p><strike>R$ 8.990,00</strike></p>
                        <p class="preconovo">R$ 8.091,00</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="violao" >
                    <div class="box2">
                        <img src="./imagens/vl2.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/violao-eletroacustico-nl39lcnt-phx-69815">Violão Eletroacústico Nl39lcnt PHX</a>
                        <p><strike>R$ 1.169,00</strike></p>
                        <p class="preconovo">R$ 1.099,00</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="baixo" >
                    <div class="box2">
                        <img src="./imagens/cb1.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/baixo-squier-deluxe-jazz-bass-v-active-squier-by-fender-preto-black-506-69633">Baixo Squier Deluxe Squier By Fender</a>
                        <p><strike>R$ 5.290,00</strike></p>
                        <p class="preconovo">R$ 4.761,00 </p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                
                
                
                <div class="box" id="baixo" >
                    <div class="box2">
                        <img src="./imagens/cb2.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/contrabaixo-6-cordas-millenium-tagima-natural-na-69674">Contrabaixo 6 Cordas Millenium Tagima</a>
                        <p><strike>R$ 1.849,00</strike></p>
                        <p class="preconovo">R$ 1.664,10</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="baixo" >
                    <div class="box2">
                        <img src="./imagens/cb3.png" width = "200px" onclick="destaque(this)"><br>
                        <a onclick="alert('Fora de Estoque!')"  href="">Baixo Sx Sjb-75 4 Cordas Sx</a>
                        <p><strike>R$ 2.999,00</strike></p>
                        <p class="preconovo">R$ 2.699,10</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="piano" >
                    <div class="box2">
                        <img src="./imagens/pd.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/piano-digital-fp-30-preto-roland-preto-bk-127733">Piano Digital FP 30 Preto Roland</a>
                        <p><strike>R$ 7.199,00</strike></p>
                        <p class="preconovo">R$ 6.479,10</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="piano" >
                    <div class="box2">
                        <img src="./imagens/pd2.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/piano-digital-hp704-ch-com-ksh-704-2ch-e-bnc-05-bk2-roland-charcoal-black-ch-127851">PIANO DIGITAL HP704 Roland</a>
                        <p"><strike>R$ 21.999,00</strike></p>
                        <p class="preconovo">R$ 19.799,10</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>

                <div class="box" id="bateria" >
                    <div class="box2">
                        <img src="./imagens/ba1.png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/bateria-decade-dmp984p-c-18121414-c-hwp-830-225-pearl-classic-satin-amburst-225-127838">BATERIA DECADE DMP984P/C 18"12"14"14"</a>
                        <p><strike>R$ 8.339,00</strike></p>
                        <p class="preconovo">R$ 7.505,10</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>
    

                <div class="box" id="bateria" >
                    <div class="box2">
                        <img src="./imagens/ba2 (1).png" width = "200px" onclick="destaque(this)"><br>
                        <a href="https://www.madeinbrazil.com.br/produto/bateria-garage-fusion-20-nc-nagano-natural-clear-nc-126443">Bateria Garage Fusion 20 Nc Nagano - Natural Clear</a>
                        <p><strike>R$ 3.290,00</strike></p>
                        <p class="preconovo">R$ 2.961,00</p>
                        <button class="botao1" onclick="alerta()">COMPRAR</button><br>
                        <button class="botao1" onclick="alerta()">DETALHES</button><br>
                        <button class="botao1" onclick="alerta()">CARRINHO</button><br>
                    </div>
                </div>
        </div>
            </section>
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