<?php
$target = "Tailieu/" . basename($_FILES["file"]["name"]);

if(move_uploaded_file($_FILES["file"]["tmp_name"], $target)){
    echo "Upload thành công!";
} else {
    echo "Upload thất bại!";
}
?>