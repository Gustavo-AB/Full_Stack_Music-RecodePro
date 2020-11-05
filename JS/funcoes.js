function exibir_categoria(categoria){
    /*alert(categoria);*/
    
    let elementos = document.getElementsByClassName('box_produtos');
    for(let i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria==elementos[i].id){
            elementos[i].style = "display: inline-block";
        }
        else{
            elementos[i].style = "display: none";
        }
    }
}
let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produtos');
    for(let i=0; i<elementos.length; i++){  
            elementos[i].style = "display: inline-block";
    }
};

let destaque = (imagem) => {
    console.log(imagem)
    if(imagem.width == 200){
        imagem.width = 300;
    }
    else{
        imagem.width = 200
    }
};
/*BOTAO !*/
function alerta(){
    let aler = window.document.getElementsByClassName('botao1');
    alert('Em Construção!')
};
/*
function mudar_cor_padrao(){
    let cor = window.document.getElementById('botao1');
    cor.style.color = 'black'
    cor.style.background = 'whitesmoke'
};
/********************************************************************************* 
BOTAO 2
function mudar_cor_botao2(){
    let cor2 = window.document.getElementById('botao2');
    cor2.style.color = 'white'
    cor2.style.background = 'red'
};

function mudar_cor_padrao2(){
    let cor2 = window.document.getElementById('botao2');
    cor2.style.color = 'black'
    cor2.style.background = 'whitesmoke'
};
/************************************************************************************* */
/*BOTAO 3
function mudar_cor_botao3(){
    let cor3 = window.document.getElementById('botao3');
    cor3.style.color = 'white'
    cor3.style.background = 'red'
};

function mudar_cor_padrao3(){
    let cor3 = window.document.getElementById('botao3');
    cor3.style.color = 'black'
    cor3.style.background = 'whitesmoke'
};
*/

