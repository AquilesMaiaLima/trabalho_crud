<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])){
    die("vocé não pode acessar esta pagina pois não esta logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>