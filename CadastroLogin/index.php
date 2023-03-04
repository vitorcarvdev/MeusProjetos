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
                <h1>Sistema de Login e Cadastro</h1>
            </header>

            <div class="login cadastro">

                <?php
                    include("formLogin.php");
                ?>

            </div>

            <footer class="rodape">
                <?= date('Y'); ?> - Todos os Direitos Reservados
            </footer>

        </main>

    </div><!-- final div raiz -->
</body>

</html>