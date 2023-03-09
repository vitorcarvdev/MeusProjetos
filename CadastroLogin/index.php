<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login e Cadastro</title>
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="recursos/estilo.css" />
</head>

<body>
    <div class="raiz">
        
        <main class="conteudo">

            <header class="cabecalho">
                <h1>Sistema de Cadastro de Cliente</h1>
                <p class="text-center">Sistema simples de Cadastro de cliente | <b>login e senha : admin</b></p>
                
                <nav class="menu">
                    <ul>
                        <li><a href="index.php?dir=paginas&file=formLogin">Inicio</a></li>
                        <li><a href="index.php?dir=paginas&file=formCadas">Clientes</a></li>
                        <li><a href="#">Consulta</a></li>
                    </ul>
                </nav> 

            </header>

            <div class="login cadastro">

                <?php
                    // include("formLogin.php");
                    include ($_GET['dir'] . "/" . $_GET['file'] . ".php");
                ?>

            </div>

            <footer class="rodape">
                <?= date('Y'); ?> - Todos os Direitos Reservados
            </footer>

        </main>

    </div><!-- final div raiz -->
</body>

</html>