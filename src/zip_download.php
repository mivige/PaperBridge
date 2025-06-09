<?php
$uploadDir = '../uploads/';
$zipName = 'paperbridge_files.zip';

$zip = new ZipArchive();
$tmpZip = tempnam(sys_get_temp_dir(), 'zip');
if ($zip->open($tmpZip, ZipArchive::CREATE) !== TRUE) {
    die('ZIP creation failed.');
}
foreach (array_diff(scandir($uploadDir), ['.', '..']) as $file) {
    $filePath = $uploadDir . $file;
    if (is_file($filePath)) {
        $zip->addFile($filePath, $file);
    }
}
$zip->close();

header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $zipName . '"');
header('Content-Length: ' . filesize($tmpZip));
readfile($tmpZip);
unlink($tmpZip);
exit;
?>