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
        <?php
        include('conexao.php');

        if(isset($_POST['loginNome']) || isset($_POST['senha'])) { // isset é para verificar se o o name do form existe

            if(strlen($_POST['loginNome']) == 0){ // strlen verifica se o campo do formulario esta em branco
                echo " - <small><i>Preencha o usuário</i></small>";
            } elseif(strlen($_POST['senha']) == 0){
                echo " - <small><i>Preencha a senha</i></small>";
            } else{

                $loginNome = $mysqli->real_escape_string($_POST['loginNome']); // real_escape_string faz a segurança para o campo nao ser rackeado
                $senha = $mysqli->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM usuarios WHERE loginNome = '$loginNome' AND senha = '$senha'"; // comparando dados com BD
                $sql_query = $mysqli->query($sql_code) or die("Falha na autenticação com SQL" . $mysqli->error);

                $quantidade  = $sql_query->num_rows; // trazendo quantidade de dados encontrados

                if($quantidade == 1){// se achar 1 resultado identico faça o if abaixo
                    
                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){ // session_start mantem usuario ativo por um tempo, do contrario faria logout ao mudar de pagina
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];

                    echo " - <small><b>Entrando...</b></small>";

                    header("Location: paginas/painel.php"); // ao fazer todas as verificações direcionar para esta pagina

                }
                else{
                    echo " - <small>Falha ao logar</small>";
                }
                
            }

        }
        ?>
        <main class="conteudo">

            <header class="cabecalho">
                <h1>Sistema de Cadastro de Cliente</h1>
                <p class="text-center">Sistema simples de Cadastro de cliente | <b>login e senha : admin</b></p>
                
                <nav class="menu">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="index.php?dir=paginas&file=formCadas">Clientes</a></li>
                        <li><a href="#">Consulta</a></li>
                    </ul>
                </nav> 

            </header>

            <div class="login cadastro">

                <?php

                    $PagAtual = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

                    if($PagAtual == 'localhost/localhost/PHP/MeusProjetos/CadastroLogin/index.php')
                        {
                            include("paginas/formLogin.php");
                        }
                    else if($PagAtual == 'localhost/localhost/PHP/MeusProjetos/CadastroLogin')
                        {
                            include("paginas/formLogin.php");
                        }
                    else{
                            include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                    };
                    
                ?>

            </div>

            <footer class="rodape">
                <?= date('Y'); ?> - Todos os Direitos Reservados
            </footer>

        </main>

    </div><!-- final div raiz -->
</body>

</html>