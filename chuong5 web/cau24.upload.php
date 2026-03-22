<?php
$folder = "BoSuuTap/";

foreach($_FILES["files"]["name"] as $key => $name){
    $tmp = $_FILES["files"]["tmp_name"][$key];
    $target = $folder . $name;

    if(move_uploaded_file($tmp, $target)){
        echo "Upload $name thành công!<br>";
    } else {
        echo "Upload $name thất bại!<br>";
    }
}
?>