<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Simpan komentar ke dalam file (contoh sederhana)
    $file = 'comments.txt';
    $data = "$name: $comment\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}
?>
