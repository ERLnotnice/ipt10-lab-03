<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

$uploaded_image_file = $upload_directory . basename($_FILES['image_file']['name']);
$temporary_file = $_FILES['image_file']['tmp_name'];

if (!is_dir($upload_directory)) {
    mkdir($upload_directory, 0755, true);
}

if (move_uploaded_file($temporary_file, $uploaded_image_file)) {
    ?>
    <img src="<?php echo $relative_path . basename($_FILES['image_file']['name']); ?>" alt="Uploaded Image" style="max-width: 100%; height: auto;">
    <?php
} else {
    echo 'Failed to upload image';
}

echo '<pre>';
var_dump($_FILES);
exit;
