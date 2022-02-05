<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // $hash = password_hash($password, PASSWORD_DEFAULT);
     $sql = "INSERT INTO `messages` (`username`, `useremail`, `subject`, `message`, `dt`) VALUES ('$username', '$useremail', '$subject', '$message', current_timestamp());";
     $result = mysqli_query($conn, $sql);
     header("Location: /index.php");
        exit();
    
}

?>