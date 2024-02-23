<?php
$directory = 'uploads/';
$allowed_types = array('jpg', 'jpeg', 'png', 'pdf');
$file_parts = array();
$ext = '';
$title = '';
$i = 0;

// Open the directory
if ($handle = opendir($directory)) {
    while (($file = readdir($handle)) !== false) {
        // Get file extension
        $file_parts = explode('.', $file);
        $ext = strtolower(array_pop($file_parts));

        // Only display images and PDF files
        if (in_array($ext, $allowed_types)) {
            echo '<a href="' . $directory . '/' . $file . '">';
            echo '<img src="' . $directory . '/' . $file . '" alt="Image" width="200" height="200"';
            echo ' title="' . $title . '">';
            echo '</a>';
            $i++;
        }
    }
    closedir($handle);
}
?>