<?php
// File: api/assets.php
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$assets = $queries['assets'];

echo require __DIR__ . '/../' . $assets;