<?php
        if(!isset($_SESSION)) { // session_start mantem usuario ativo por um tempo, do contrario faria logout ao mudar de pagina
            session_start();
        }

        session_destroy();

        header("Location: index.php");
    ?>