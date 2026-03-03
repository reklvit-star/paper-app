<?php
$file = "data.json";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!file_exists($file)) {
        echo json_encode(["stock"=>[], "log"=>[]]);
        exit;
    }
    echo file_get_contents($file);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = file_get_contents("php://input");
    file_put_contents($file, $data);
    echo '{"status":"ok"}';
}
?>