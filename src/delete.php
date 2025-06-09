<?php
$type = $_POST['type'] ?? '';
$file = basename($_POST['file'] ?? '');
if ($type === 'upload') {
    $path = '../uploads/' . $file;
} elseif ($type === 'note') {
    $path = '../notes/' . $file;
} else {
    header('Location: ../index.php');
    exit;
}
if (file_exists($path)) {
    unlink($path);
}
header('Location: ../index.php');
?>