<?php
session_start();
unset($_SESSION['usuario'], $_SESSION['senha'], $_SESSION['usuarioNome']);
header('Location: login.php');