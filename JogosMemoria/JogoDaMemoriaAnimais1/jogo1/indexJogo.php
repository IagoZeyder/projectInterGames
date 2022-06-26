<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Jogo da Memória</title>
        <link rel="stylesheet" href="stylesAnimais.css">
    </head>
    <body>    
        <img src="logoInterJogos.svg" id="logo"alt=""> <!--IMG lgo do Inter Jogos -->  
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
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaaa9044.svg" alt="Macaco" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="aurelia">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaaa9044.svg" alt="Macaco" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa61e81.svg" alt="Formiga" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa61e81.svg" alt="Formiga" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaabdf39.svg" alt="Rato" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaabdf39.svg" alt="Rato" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa954fd.svg" alt="Girafa" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa954fd.svg" alt="Girafa" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />                
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaac594d.svg" alt="Sato" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaac594d.svg" alt="Sapo" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>

            <div class="carta-memoria" data-framework="react">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaace523.svg" alt="Vaca" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="JS Badge" />
                
            </div>

            <div class="carta-memoria" data-framework="react">                    
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaace523.svg" alt="Vaca"  />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/animais1/arquivos629bccaa79f54.svg" alt="Desvendar carta" />
            </div>            

        </section>
        <script src="scriptsAnimais1.js"></script>                 
    </body>
</html>