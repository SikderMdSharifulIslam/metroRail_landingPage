<?php

session_start();

require 'utility/db.php';

$title = $_POST['title'];
$details = $_POST['details'];

$uploaded_file = $_FILES['image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');


if(in_array($extension, $allowed_extension))
{
    if($uploaded_file['size'] <= 1000000)
    {
        $insert_query = "INSERT INTO services(title, details) VALUES ('$title', '$details')";
        mysqli_query($db_connect, $insert_query);
        $user_id = mysqli_insert_id($db_connect);
        $file_name = $user_id.'.'.$extension;

        $new_location = 'images/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE services SET image='$file_name' WHERE id=$user_id";
        $update_image_result = mysqli_query($db_connect, $update_image);
        header('location:admin.php');

    }else
    {
        $_SESSION['size'] = "File size is too large! Max Size 1MB.";
        header('location:admin.php');
    }
}else
{
    $_SESSION['invalid_extension'] = "Invalid Extension";
    header('location:admin.php');
}

?>