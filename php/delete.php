<?php

require_once('config.php');

$id = $_POST['id'];

$sql = "DELETE FROM atleti WHERE id = $id";
if ($conn->query($sql) === true) {
    $data = [
        "message" => "Riga eliminata con successo",
        "response" => 1

    ];
    echo json_encode($data);
} else {
    $data = [
        "message" => "impossibile eliminarlo",
        "response" => 0
    ];
    echo json_encode($data);
}
