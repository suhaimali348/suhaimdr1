<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // for CORS - allow all origins, adjust as needed

// Sample dynamic data - replace with real DB queries
 = [
    'time' => date('Y-m-d H:i:s'),
    'message' => 'Real-time data from PHP backend',
];

// Output JSON
echo json_encode();
?>
