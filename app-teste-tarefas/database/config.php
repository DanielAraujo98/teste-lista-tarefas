<?php

$host = 'localhost';
$port = '5432';
$username = 'postgres';
$password = 'root';
$dbname = 'app_tarefas';
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";

$conn = pg_connect($connection_string);

if (!$conn) {
    echo "<marquee>Não foi possível conectar com db</marquee> \n";
}
