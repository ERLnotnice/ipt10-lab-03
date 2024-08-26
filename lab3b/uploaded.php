<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Audio File
$uploaded_audio_file = $upload_directory . basename($_FILES['audio_file']['name']);
$temporary_file = $_FILES['audio_file']['tmp_name'];

if (move_uploaded_file($temporary_file, $uploaded_audio_file)) {
    echo 'Audio file uploaded successfully: ' . basename($_FILES['audio_file']['name']);
} else {
    echo 'Failed to upload audio file';
}

echo '<pre>';
var_dump($_FILES);
exit;
