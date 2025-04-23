<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO students (name, email, gender) VALUES ('$name', '$email', '$gender')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully. <a href='view.php'>View Records</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>