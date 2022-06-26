<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styleHome.css">

</head>

<body>
    
    <nav>        
        <!-- Navbar do ambiente-->
        <div class="navbar">
            <div id="nomeSite"> 
            <img src="logo_InterJogos.svg" id="logo"alt=""> 
                <!-- SOBRE -->
            </div>            
            <p id="descricao"> Jogo da Memória </p>
        </div>
    </nav>
    
    <!-- section do ambiente-->
    <section>
        <!-- fundo/background do ambiente-->
        <div class="background">
            <!-- itens para jogar no ambiente-->
            <div class="itens">
                <div class="game" id="i">
                    <img src="http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd785172.png" alt="" id="seta" onclick="trocarJogo()">
                    <img src="http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd76eac7.png" class="img1" id="imagensJogos" alt=""
                        onmousemove=" explicarJogo()" onmouseleave="fecharExplicacao() " onclick="definirJogo()" >
                    <img src="http://localhost/interJogos/home/bancoImagens/home/arquivos629bdfd7969c8.png" alt="" id="seta" onclick="trocarJogo()"
                        class="pointRight">                     
                     <div class="tracado">

                    </div>
                </div>
                <div id="i" class="text">
                    <form action="indexConexao.php" method="get">
                    <input class="field" type="text" id="textNome" name="username" alt="Digite seu nome" placeholder="Digite seu nome">
                    <input class="field" type="text" id="textTutor" name="tutor" alt="Nome do Tutor" placeholder="Nome do Tutor">
                </div>
                <input action="" type="submit" value="Jogar" id="jogar" onclick="jogar()">
                

            </div>

        </div>
    </section>
    <script src="scriptHome_.js"></script>    
    
</body>

</html>