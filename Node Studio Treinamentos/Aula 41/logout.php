<?php

session_start();
session_unset(); //Limpando a sessão.
session_destroy(); //Finalizando a sessão.
header('Location: index.php');
