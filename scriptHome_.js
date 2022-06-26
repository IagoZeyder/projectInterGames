
let explicacao;
let travarJogo = false
let s = 0
let trocar = false
let jogo

/*  Troca de jogo ao passar o tempo, é ativado após mexer o mouse */
function startTimer(){
    if( travarJogo == true){
        
    }
    else if(travarJogo == false){
        timer()
    }
}

/* Quando a variavel s chegar a 100 ele troca de jogo */
function timer(){         
        if (trocar == true){        
            document.getElementById("imagensJogos").src = "img/logo puzzle-depositphotos-bgremover.png";
            if(s <= 100){
            s +=1
            console.log(s)                
            } 
            
            else if(s > 100){              
            s = 0                                                    
            trocar = false
            }                                          
        }                        
        if(trocar == false ){        
            document.getElementById("imagensJogos").src = "img/logo memory-depositphotos-bgremover.png";
            if(s <= 100){
            s +=1    
            console.log(s)        
            }
            else if (s > 100){
            s = 0 
            trocar = true                                                          
            }
            
        }             
       
}
        
// Inicializar Jogo
let img1 = "ft1" //Jogo quebra cabeça
let img2 = "ft2" //Logo do Jogo da memoria
let img = img1 // variavel que recebe nome do jogo
function trocarJogo() {
    travarJogo = true     
    if (img == img1) { 
        img = img2 // Trocando para o img2
        document.getElementById("imagensJogos").src = "http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd75caa3.png";
    }
    else if (img == img2) {
        img = img1 // Trocando para o img1
        document.getElementById("imagensJogos").src = "http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd76eac7.png";
    }
    explicarJogo()
}
//Função que explicar como cada jogo funciona
function explicarJogo() {
    document.getElementById("descricao").style.opacity = "100%";  
    if (img == img1) {        
        document.getElementById("descricao").style.marginLeft = '35%';
        explicacao = document.getElementById("descricao").innerHTML = ' Quebra Cabeça, em produção. ';        
    }
    else if (img == img2) {        
        document.getElementById("descricao").style.marginLeft = '42%';
        explicacao = document.getElementById("descricao").innerHTML = ' Jogo da Memoria ';
    }
}
// Fechar a explicaçao do jogo
function fecharExplicacao() {
    document.getElementById("descricao").style.opacity = "100%";  
}

definir = true

// Quando clicar no jogo fica selecionado
function definirJogo(){   
    travarJogo = true    
    if (img == img1 && definir == true){
        //jogo do quebra cabeça
        document.getElementById("imagensJogos").src = "http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd76eac7.png"; 
        document.getElementById("imagensJogos").style.opacity = '100%';
        document.getElementById("imagensJogos").style.width = '350px';
        document.getElementById("imagensJogos").style.height = '350px';
        definir = false
    }
    
    else if (img == img2 && definir == true){
        //jogo da memoria
        document.getElementById("imagensJogos").src = "http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd75caa3.png"; 
        document.getElementById("imagensJogos").style.opacity = '100%';
        document.getElementById("imagensJogos").style.width = '350px';
        document.getElementById("imagensJogos").style.height = '350px';
        definir = false
    }
    else{
        document.getElementById("imagensJogos").style.opacity = '50%';
        document.getElementById("imagensJogos").style.width = '50%';
        document.getElementById("imagensJogos").style.height = '78%';
        definir = true
        travarJogo = false
    }
}    







