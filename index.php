<?php
$uploadDir = 'uploads/';
$notesDir = 'notes/';

// List uploaded files
$uploadedFiles = array_diff(scandir($uploadDir), ['.', '..']);
// List notes
$noteFiles = array_diff(scandir($notesDir), ['.', '..']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PaperBridge</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>PaperBridge</h1>
    <section>
        <h2>Upload file</h2>
        <form action="src/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit">Upload</button>
        </form>
    </section>
    <section>
        <h2>Uploaded files</h2>
        <ul>
            <?php foreach ($uploadedFiles as $file): ?>
                <li>
                    <a href="src/download.php?file=<?= urlencode($file) ?>"><?= htmlspecialchars($file) ?></a>
                    <form action="src/delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="file" value="<?= htmlspecialchars($file) ?>">
                        <input type="hidden" name="type" value="upload">
                        <button type="submit">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section>
        <h2>Write a note</h2>
        <form action="src/save_note.php" method="post">
            <textarea name="note" rows="4" cols="40" required></textarea><br>
            <input type="text" name="filename" placeholder="note_name.txt" required pattern="^[\w,\s-]+\.txt$">
            <button type="submit">Save Note</button>
        </form>
    </section>
    <section>
        <h2>Saved notes</h2>
        <ul>
            <?php foreach ($noteFiles as $file): ?>
                <li>
                    <a href="notes/<?= urlencode($file) ?>" download><?= htmlspecialchars($file) ?></a>
                    <form action="src/delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="file" value="<?= htmlspecialchars($file) ?>">
                        <input type="hidden" name="type" value="note">
                        <button type="submit">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>