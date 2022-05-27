<?php


require_once('config.php');

$name = $conn->real_escape_string($_POST['name']);
$surname = $conn->real_escape_string($_POST['surname']);
$age = $conn->real_escape_string($_POST['age']);
$team = $conn->real_escape_string($_POST['team']);

$sql = "INSERT INTO atleti (name, surname, age, team) values ('$name','$surname','$age','$team')";

if ($conn->query($sql) === true) {
    $data = [
        "message" => "Riga inserita con successo",
        "response" => 1

    ];
    echo json_encode($data);
} else {
    $data = [
        "message" => $conn->error,
        "response" => 0
    ];
    echo json_encode($data);
}
