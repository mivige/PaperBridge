<?php
$notesDir = '../notes/';
if (!isset($_POST['note'], $_POST['filename'])) {
    header('Location: ../index.php');
    exit;
}
$filename = basename(trim($_POST['filename']));

// Add .txt if not present (case-insensitive)
if (!preg_match('/\.txt$/i', $filename)) {
    $filename .= '.txt';
}

if (!preg_match('/^[\w,\s-]+\.txt$/i', $filename)) {
    die('Invalid filename.');
}

file_put_contents($notesDir . $filename, $_POST['note']);
header('Location: ../index.php');
?>