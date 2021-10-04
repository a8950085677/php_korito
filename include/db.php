<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','root');
    define('DB_NAME','umily_database');

    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if ($mysql->connection_errno) { 
        exit('Ошибка подключения к DB'); }
    $mysql->set_charset('utf8');
    $mysql->close;

?>