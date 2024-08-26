<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle PDF File
$uploaded_pdf_file = $upload_directory . basename($_FILES['pdf_file']['name']);
$temporary_file = $_FILES['pdf_file']['tmp_name'];

if (move_uploaded_file($temporary_file, $uploaded_pdf_file)) {
    // Display a link to the uploaded PDF file
    ?>
    <p>PDF uploaded successfully. <a href="<?php echo $relative_path . basename($_FILES['pdf_file']['name']); ?>" target="_blank">View PDF</a></p>
    <?php
} else {
    echo 'Failed to upload file';
}

echo '<pre>';
var_dump($_FILES);
exit;
