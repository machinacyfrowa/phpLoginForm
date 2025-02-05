<?php
class Image {

    public static function Upload(array $files) {
        $name = $files['name'];
        $tempName = $files['tmp_name'];
        $path = "uploads/".$name; 
        move_uploaded_file($tempName, $path);
    }
}

?>