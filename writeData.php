<?php
    // Get form data from POST request
    $formData = json_decode(file_get_contents('php://input'), true);

    // Write form data to JSON file
    $file = 'data.json';
    $current_data = file_get_contents($file);
    $array_data = json_decode($current_data, true);
    $array_data[] = $formData;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    file_put_contents($file, $final_data);

    echo json_encode(['success' => true]);
?>
