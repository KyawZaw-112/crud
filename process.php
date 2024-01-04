<?php

include("connect.php");
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $publisher = mysqli_real_escape_string($conn, $_POST["publisher"]);
    $sql = "INSERT INTO books (title, author, publisher) VALUES ('$title', '$author', '$publisher')";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "Book added successfully";
        header("location:index.php");
    }else {
        die("Something went wrong");
    };
    
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $publisher = mysqli_real_escape_string($conn, $_POST["publisher"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE books SET title = '$title', author = '$author', publisher = '$publisher' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["edit"] = "Book edited successfully";
        header("location:index.php");
    }else {
        die("Something went wrong");
    };
    
}
?>