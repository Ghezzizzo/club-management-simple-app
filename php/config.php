<?php

$host = '127.0.0.1';
$user = 'root';
$psw = '';
$db = 'molteno';

$conn = new mysqli($host, $user, $psw, $db);

if ($conn === false){
    die("Errore durante la connessione" . $conn->connect_error);
}
