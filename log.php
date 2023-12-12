<?php
// Get the client's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get user-agent details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Log details to a file
$log = fopen('visitor_logs.txt', 'a');
fwrite($log, "IP: {$ip}, User-Agent: {$userAgent}\n");
fclose($log);
?>
