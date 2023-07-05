<?php
    $data = file_get_contents('./database/dischi.json');

    $discList = json_decode($data);

    header('Content-Type: application/json');

    echo json_encode($discList);
?>