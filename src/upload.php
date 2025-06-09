<?php
$uploadDir = '../uploads/';
if (!isset($_FILES['file'])) {
    header('Location: ../index.php');
    exit;
}
$file = $_FILES['file'];
$filename = basename($file['name']);
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
$forbidden = ['php', 'exe', 'js', 'sh', 'bat', 'pl', 'py'];
if (in_array($ext, $forbidden)) {
    die('File type not allowed.');
}
$target = $uploadDir . $filename;
move_uploaded_file($file['tmp_name'], $target);
header('Location: ../index.php');
?>