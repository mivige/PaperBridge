<?php
$uploadDir = '../uploads/';
if (!isset($_GET['file'])) {
    die('No file specified.');
}
$filename = basename($_GET['file']);
$filepath = $uploadDir . $filename;
if (!file_exists($filepath)) {
    die('File not found.');
}
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . filesize($filepath));
readfile($filepath);
exit;
?>