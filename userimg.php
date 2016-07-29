<?php
if (isset($_FILES['file'])) {
    $file_name = $_FILES["file"]["name"];
    $temp_name = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_type = $_FILES["file"]["type"];
    $target_path = "images/" . $file_name;
    if ($file_type === 'image/jpeg' || $file_type === 'image/png' || $file_type === 'image/gif' || $file_type === 'image/jpg') {
        if ($file_size <= 2097152) {
            move_uploaded_file($temp_name, $target_path);            
            echo json_encode($file_name);
        } else {
            echo 'image size must be less than 2MB';
        }
    } else {
        echo 'wrong format';
    }
}
else {
    
    echo "shivajiDefault.png";
}
