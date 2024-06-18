<?php
// File: api/assets.php

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$file = $queries['file'];

// Pastikan file path adalah path yang benar
$file_path = __DIR__ . '/../' . $file;

if (file_exists($file_path)) {
    $mime_type = mime_content_type($file_path);
    header('Content-Type: ' . $mime_type);
    readfile($file_path);
} else {
    http_response_code(404);
    echo "File not found.";
}
?>
