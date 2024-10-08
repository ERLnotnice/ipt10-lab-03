<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';



$uploaded_pdf_file = $upload_directory . basename($_FILES['pdf_file']['name']);
$temporary_file = $_FILES['pdf_file']['tmp_name'];

if (move_uploaded_file($temporary_file, $uploaded_pdf_file)) {
    // Display a link to the uploaded PDF file
    ?>
    <p>PDF uploaded successfully. <a href="<?php echo $relative_path . basename($_FILES['pdf_file']['name']); ?>" target="_blank">View PDF</a></p>

$uploaded_audio_file = $upload_directory . basename($_FILES['audio_file']['name']);
$temporary_file = $_FILES['audio_file']['tmp_name'];

if (move_uploaded_file($temporary_file, $uploaded_audio_file)) {
    echo 'Audio file uploaded successfully: ' . basename($_FILES['audio_file']['name']);

$uploaded_video_file = $upload_directory . basename($_FILES['video_file']['name']);
$temporary_file = $_FILES['video_file']['tmp_name'];

if (move_uploaded_file($temporary_file, $uploaded_video_file)) {
    ?>
    <video width="320" height="240" controls>
        <source src="<?php echo $relative_path . basename($_FILES['video_file']['name']); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <?php

} else {
    echo 'Failed to upload audio file';
}

echo '<pre>';
var_dump($_FILES);
exit;
