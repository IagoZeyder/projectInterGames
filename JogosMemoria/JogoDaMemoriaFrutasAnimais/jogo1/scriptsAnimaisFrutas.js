const cartas = document.querySelectorAll(".carta-memoria");
let acertos = 0
let cartaGirada = false;
let bloqueioQuadro = false
let cartaPrimaria, cartaSecundaria;

//voltarI para a pagina incial
function voltarInicio(){
    window.location.href = 'http://localhost/interJogos/home/indexHome.php'
}
//Diminuir Opacity do nome
function diminuirOpacity(){
    document.getElementById('nomeJogo').style.opacity = '3%'; 
    document.getElementById('temaJogo').style.opacity = '20%';     
}

function aumentarOpacity(){
    document.getElementById('nomeJogo').style.opacity = '90%';
    document.getElementById('temJogo').style.opacity = '20%';
}

// Realiza o giro da carta

function girarCarta() {  
    if (bloqueioQuadro) return;
    if (this === cartaPrimaria) return;
    
    this.classList.add("girar");

    // primeiro click

    if (!cartaGirada) {
        cartaGirada = true;
        cartaPrimaria = this;
        return;
    }

    // segundo click

    cartaSecundaria = this;

    verificarIgualdade();
   
}

// Verificação de igualdade das Cartas

function verificarIgualdade(){
    let igual = cartaPrimaria.dataset.framework === cartaSecundaria.dataset.framework;        
        igual ? desabilitarCartas() : naoGiraCartas();
        
}
// Reseta após abrir duas cartas diferentes
let apoio;
function desabilitarCartas() {
    cartaPrimaria.removeEventListener("click", girarCarta);
    cartaSecundaria.removeEventListener("click", girarCarta);  
    acertos++  
    if(acertos >= 0 & acertos <=2 || acertos == 4 || acertos == 5){ 
        apoio = document.getElementById("apoio").style.opacity = '100%';
        apoio = document.getElementById("apoio").innerHTML = 'Acertos:  ' + acertos;        
        setTimeout(function() {                        
          }, 2000)
    
    }
    else if(acertos == 3){        
        apoio = document.getElementById("apoio").style.backgroundColor = 'rgb(255, 255, 255)';
        apoio = document.getElementById("apoio").style.borderRadius = '20px';
        apoio = document.getElementById("apoio").style.borderWidth = '2px';
        apoio = document.getElementById("apoio").style.borderColor = 'rgb(1, 24, 32)';
        apoio = document.getElementById("apoio").style.opacity = '100%';
        apoio = document.getElementById("apoio").style.marginLeft = '14%';
        apoio = document.getElementById("apoio").style.marginRight = '20%';
        apoio = document.getElementById("apoio").style.fontSize = '55px';
        apoio = document.getElementById("apoio").style.width = '70%';
        apoio = document.getElementById("apoio").style.height = '25%';
        apoio = document.getElementById("apoio").innerHTML = 'Parabens, ' + acertos + ' acertos';      
        
        setTimeout(function() {   
            apoio = document.getElementById("apoio").style.borderRadius = '10px';
            apoio = document.getElementById("apoio").style.backgroundColor = 'rgb(255, 255, 255)'; 
            apoio = document.getElementById("apoio").style.opacity = '100%';
            apoio = document.getElementById("apoio").style.marginLeft = '83%';
            apoio = document.getElementById("apoio").style.marginTop = '20px';
            apoio = document.getElementById("apoio").style.fontSize = '25px';
            apoio = document.getElementById("apoio").style.width = '10%';
            apoio = document.getElementById("apoio").style.height = '8%';
            apoio = document.getElementById("apoio").innerHTML = 'Acertos: ' + acertos;                                  
          }, 2000)
    
    }    
    else if (acertos == 6){apoio = document.getElementById("apoio").style.opacity = '100%';
    apoio = document.getElementById("apoio").style.borderRadius = '20px';
    apoio = document.getElementById("apoio").style.marginLeft = '14%';
    apoio = document.getElementById("apoio").style.marginRight = '20%';
    apoio = document.getElementById("apoio").style.fontSize = '55px';
    apoio = document.getElementById("apoio").style.width = '70%';
    apoio = document.getElementById("apoio").style.height = '25%';
    apoio = document.getElementById("apoio").innerHTML = 'Parabens você Ganhou!! ' + acertos ;
        setTimeout(function() {
            apoio = document.getElementById("apoio").style.borderRadius = '10px';
            apoio = document.getElementById("apoio").style.backgroundColor = 'rgb(255, 255, 255)'; 
            apoio = document.getElementById("apoio").style.opacity = '100%';
            apoio = document.getElementById("apoio").style.marginLeft = '83%';
            apoio = document.getElementById("apoio").style.marginTop = '20px';
            apoio = document.getElementById("apoio").style.fontSize = '25px';
            apoio = document.getElementById("apoio").style.width = '10%';
            apoio = document.getElementById("apoio").style.height = '8%';
            apoio = document.getElementById("apoio").innerHTML = 'Acertos: ' + acertos;                                        
            acertos == 0       
        }, 2000) 
        let novaPage = Math.floor(Math.random() * 3) 
        setTimeout(function() {
            if (novaPage == 0){
                window.location.href = "http://localhost/interJogos/home/JogosMemoria/JogoDaMemoriaMaterial/jogo1/indexJogo.php";             
                // // Material escolar
            }           
            else if(novaPage == 1){
                window.location.href = "http://localhost/interJogos/home/JogosMemoria/JogoDaMemoriaAnimais1/jogo1/indexJogo.php";
                // Animais_1
            }   
            else if(novaPage == 2){
                window.location.href = "http://localhost/interJogos/home/JogosMemoria/JogoDaMemoriaAnimais2/jogo1/indexJogo.php";
                // // Animais_2
            }            
          }, 5000)    
    }
    resetarQuadro();

}

// Não gira a carta quando iguais, fazendo o bloqueio deste movimento


function naoGiraCartas() {
    bloqueioQuadro = true;

    // Retorna a chamada para resetar o quadro

    setTimeout(() => {
        cartaPrimaria.classList.remove("girar");
        cartaSecundaria.classList.remove("girar");        
        resetarQuadro();
        
    }, 1500);      
         
}

// Reseta o quadro

function resetarQuadro() {
    [cartaGirada, bloqueioQuadro] = [false, false];
    [cartaPrimaria, cartaSecundaria] = [null, null]
}

// Realiza o embaralho aleatório, os parênteses entre a function indica que será executada logo quando o JavaScript cria-la

(function embaralhar() {

    // Objeto carta (carta-memoria) utilizando um forEach         
    cartas.forEach(carta => {
      let randomPos = Math.floor(Math.random() * 12);
      carta.style.order = randomPos;
    });
  })();

cartas.forEach((carta) => carta.addEventListener("click", girarCarta));
