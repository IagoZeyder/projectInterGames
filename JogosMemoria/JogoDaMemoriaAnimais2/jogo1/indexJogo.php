<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Jogo da Memória</title>
        <link rel="stylesheet" href="stylesAnimais.css">
    </head>
    <body>      
        <img src="logoInterJogos.svg" id="logo"alt="">   <!--IMG lgo do Inter Jogos -->
        <nav>
            <h1  id="nomeJogo" onmousemove="aumentarOpacity()">Jogo da Memoria</h1>
        </nav>        
            <p id="temaJogo"> Tema: Animais </p>
            <p id="apoio"> Acertos: </p> <!-- Quantidade de acertos durante o jogo-->

            <!-- Input para colocar o nome do usuario no banco de dados-->
            <div class="nomeUsuario"><?php 
                include_once("indexBanco.php");                               
                $consultaUsuario = "SELECT * FROM usuarios ORDER BY id DESC";                
                $resultUsuario = $mysqli -> query($consultaUsuario);               
                $usuario = mysqli_fetch_assoc($resultUsuario);                                  
                echo "Jogador:  ".$usuario['nome']."       " ;                 
                ?>                                  
            </div>     

            <!-- Input para colocar o nome do usuario no banco de dados -->
            <div class="nomeTutor"><?php
                include_once("indexBanco.php"); 
                $consultaTutor = "SELECT * FROM tutores ORDER BY id DESC";
                $resultTutor= $mysqli -> query($consultaTutor);
                $tutor = mysqli_fetch_assoc($resultTutor);  
                echo "Tutor: ".$tutor['nome'];                  
            ?>
            </div>
            <!-- Area das cartas do jogo da memoria  --> 
            <button action="AMBIENTE_DE_JOGOS\home\test.php" id="botaoVoltar" onclick="voltarInicio()"> Inicio </button>
        <section class="jogo-memoria" onmousemove="diminuirOpacity()">
            <div class="carta-memoria" data-framework="aurelia">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa367677.svg" alt="Abelha" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="aurelia">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa367677.svg" alt="Abelha"  />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa38207d.svg" alt="Cavalo" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa38207d.svg" alt="Cavalo" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa393949.svg" alt="Coelho" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa393949.svg" alt="Coelho" /> 
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3d6416.svg" alt="Peixe" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3d6416.svg" alt="Peixe" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />                
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3bdadb.svg" alt="Pato" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3bdadb.svg" alt="Pato" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="react">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3e0e11.svg" alt="Urso" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="JS Badge" />
                
            </div>

            <div class="carta-memoria" data-framework="react">                    
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3e0e11.svg" alt="Urso" />                 
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais2/arquivos629bcfa3a8718.svg" alt="Desvendar carta" />
            </div>            

        </section>

        <script src="scriptsAnimais.js"></script> 
        
        
    </body>
</html>