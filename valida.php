<?php
session_start();
require_once('config.php');
require_once (DBAPI);

if(isset($_POST['usuario']) && (isset($_POST['senha']))){
    $user = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

    validarUser($user, $pass);
}


