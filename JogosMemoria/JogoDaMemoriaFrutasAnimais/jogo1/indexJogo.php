<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Jogo da Memória</title>
        <link rel="stylesheet" href="stylesAnimaisFrutas.css">
    </head>
    <body>  
        <img src="logoInterJogos.svg" id="logo"alt="">   <!--IMG lgo do Inter Jogos -->    
        <nav  >
            <h1  id="nomeJogo" onmousemove="aumentarOpacity()">Jogo da Memoria</h1>
        </nav>        
            <p id="temaJogo"> Tema: Frutas e Animais </p>            
            <p id="apoio">Acertos </p> <!-- Quantidade de acertos durante o jogo-->
            
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
            <button action="AMBIENTE_DE_JOGOS\home\test.php" type="submit" id="botaoVoltar" onclick="voltarInicio()"> Inicio </button>
        <section class="jogo-memoria" onmousemove="diminuirOpacity()">
            <div class="carta-memoria" data-framework="aurelia">
            <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629cad06b14a1.svg" alt="Banana" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="aurelia">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629cad06b14a1.svg" alt="Banana" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6cb497.svg" alt="Uva" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6cb497.svg" alt="Uva" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6ba59a.svg" alt="Ovelha" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6ba59a.svg" alt="Ovelha" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6acb52.svg" alt="Laranja" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6acb52.svg" alt="Laranja" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />                
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6526d1.svg" alt="Cachorro" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6526d1.svg" alt="Cachorro" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="react">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e685a35.svg" alt="Gato" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
                
            </div>

            <div class="carta-memoria" data-framework="react">                    
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e685a35.svg" alt="Gato"  />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/frutasAnimais/arquivos629bd3e6650b5.svg" alt="JS Badge" />
            </div>            

        </section>

        <script src="scriptsAnimaisFrutas.js"></script> 
        <!-- Conectando com javaScript -->
        
    </body>
</html>