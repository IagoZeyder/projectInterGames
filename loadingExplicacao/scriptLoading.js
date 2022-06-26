    jogo = Math.floor(Math.random() * 3)              
    setTimeout(function() {
        if( jogo == 0){                               
            window.location.href = "http://localhost/interJogos/home/JogosMemoria/JogoDaMemoriaFrutasAnimais/jogo1/indexJogo.php";
        //ir para Jogo da memoria com tema de frutas e animais
        }
        if(jogo == 1){ 
            window.location.href = "http://localhost/interJogos/home/JogosMemoria/JogoDaMemoriaMaterial/jogo1/indexJogo.php";       
        //ir para jogo da memoria com tema de materiais escolar
        }  
        if(jogo == 2){
            window.location.href = "http://localhost/interJogos/home/jogosMemoria/JogoDaMemoriaAnimais1/jogo1/indexJogo.php";
        //ir para jogo da memoria com tema de Animais_1  
        }
        if(jogo == 3){
        window.location.href = "http://localhost/interJogos/home/JogosMemoria/JogoDaMemoriaAnimais2/jogo1/indexJogo.php";
    //ir para jogo da memoria com tema de Animais_2
    }    
}, 5000)    