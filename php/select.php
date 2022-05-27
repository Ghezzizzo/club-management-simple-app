<?php

require_once('config.php');

$sql = 'SELECT * FROM atleti';

if ($result = $conn->query($sql)) {
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $tmp;
            $tmp['id'] = $row['id'];
            $tmp['name'] = $row['name'];
            $tmp['surname'] = $row['surname'];
            $tmp['age'] = $row['age'];
            $tmp['team'] = $row['team'];
            array_push($data, $tmp);
        }
        echo json_encode($data);
    } else {
        echo "Non ci sono righe disponibili";
    }
} else {
    echo "Errore nell'esecuzione di $sql." . $conn->error;
}
