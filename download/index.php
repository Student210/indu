<?php
// Path to the file to be downloaded
$file = 'induscard.apk';

// Check if the file exists
if (file_exists($file)) {
    // Set headers to initiate file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Clear the output buffer
    ob_clean();
    flush();

    // Read the file and output it to the browser
    readfile($file);
    exit;
} else {
    echo "The file does not exist.";
}
?>
