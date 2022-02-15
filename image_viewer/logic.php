<?php

global $conn;

function connect_database(){
    $host = 'localhost';
    $user = 'one';
    $pass =  '1234';
    $db_name = 'image_host';
    $con = mysqli_connect($host, $user, $pass, $db_name);

    if (!$con){
        echo "<script> alert('Mysql Connection Failed')</script>";
    }

    return $con; 
}

function insert_image($title, $src){
    global $conn;
    $query = "INSERT INTO images (id, title, src) VALUES ('$title', '$src')";
    $res = mysqli_query($conn, $query);    
    return $res;
}

function rename_image($img_name){

}

if (isset($_POST['submit'])){
    $conn  = connect_database();
    $title = $_POST['title'];
    $src   = $_FILES['src'];

    $img_name = $src['name'];
    move_uploaded_file($src['tmp_name'], './img/'.$img_name);

    // print_r($src) ;

    // if (!insert_image($title, $src)){
    //     echo "<script> alert('Image Insertion Failed')</script>";
    // }
}

?>

<!-- 
git init
git add *
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/shihabuddin413/php_image_upload.git
git push -u origin main -->