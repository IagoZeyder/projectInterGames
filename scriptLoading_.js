    //jogo = Math.floor(Math.random() * 3)    
    jogo = 4
    console.log(jogo+ " ");    
    setTimeout(function() {
    if( jogo == 0){                               
        window.location.href = "http://localhost/AMBIENTE_DE_JOGOS/home/JogosMemoria/Jogo_da_memoria_FrutasAnimais/jogo_1/index2.php";
    //ir para Jogo da memoria com tema de frutas e animais
    }
    if(jogo == 1){ 
        window.location.href = "http://localhost/AMBIENTE_DE_JOGOS/AMBIENTE_DE_JOGOS/home/JogosMemoria/Jogo_da_memoria_Meterial/index_materialEscolar.html";       
    //ir para jogo da memoria com tema de materiais escolar
    }
    if(jogo == 2){
        window.location.href = "index_parentes2.php";
    //ir para jogo da memoria com tema de parentes    
    }
    if(jogo == 3){
        window.location.href = "http://localhost/AMBIENTE_DE_JOGOS/home/jogosMemoria/Jogo_da_memoria_Animais_1/jogo_1/index_2.php";
    //ir para jogo da memoria com tema de Animais_1  
    }
    if(jogo == 4){
        window.location.href = "http://localhost/interJogos/home/loadingExplicacao/indexExplicacao.php";
    //loading explicação
    }
}, 2000)    