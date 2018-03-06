<?php
echo "<pre>";

$file = $_FILES['file'];
move_uploaded_file($file['tmp_name'], $file['name']);
print_r($file);
var_dump(file_exists($file['name']));
die();

