<?php
        if(!isset($_SESSION)) { // session_start mantem usuario ativo por um tempo, do contrario faria logout ao mudar de pagina
            session_start();
        }

        if(!isset($_SESSION['id'])) { // session_start mantem usuario ativo por um tempo, do contrario faria logout ao mudar de pagina
            die("você não deveria estar aqui");
        } 
    ?>