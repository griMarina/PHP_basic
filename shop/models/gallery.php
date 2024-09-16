<?php 

function getArrImg($img_dir) {
    $arr = scandir($img_dir);
    return array_splice($arr, 2);
}

function getGallery() {
    return getAssocResult("SELECT id, name_img, views FROM images ORDER BY views DESC"); 
}

function pathToImg($dir) {
    return $dir . basename($_FILES["myimg"]["name"]);
}

function uploadImg() {

    if (file_exists(pathToImg(IMG_BIG))) { 
        $status = "name";
        return $status;
    } 
    
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if (preg_match("/$item\$/i", $_FILES['myimg']['name'])) {
            $status = "blacklist";
            return $status;
        }
    }
    
    if($_FILES["myimg"]["size"] > 1024*1*1024) {
        $status = "size";
        return $status;
    }
    
    if($_FILES['myimg']['type'] != "image/jpeg") {
        $status = "type";
        return $status;
    }
    
    if (move_uploaded_file($_FILES["myimg"]["tmp_name"], pathToImg(IMG_BIG))) {
        $status = "ok";
        resizeImg();
        $filename = mysqli_real_escape_string(getDb(), $_FILES["myimg"]["name"]);
        insertFile($filename);
    } else {
        $status = "error";
    }

    return $status;
}

function resizeImg() {
    $image = new SimpleImage();
    $image->load(pathToImg(IMG_BIG));
    $image->scale(50);
    $image->save(pathToImg($_SERVER["DOCUMENT_ROOT"] . IMG_SMALL));
}

function insertFile($filename) {
    return mysqli_query(getDb(), "INSERT INTO `images` (`name_img`) VALUES ('$filename')");
}

function getMessage($status) {
    
    $messages = [
        "ok" => "File successfully uploaded!",
        "error" => "File uploading failed!",
        "name" => "A file with the same name already exists",
        "blacklist" => "This file type is not permitted",
        "size" => "File size exceeds the allowable limit!",
        "type" => "Sorry, only JPEG images are allowed",
        "" => "Upload your file"
    ];

    return $messages[$status];
}