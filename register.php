<?php
include 'config.php'; // Assuming this includes your database connection details and initializes $conn

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fName'];
    $last_name = $_POST['LName'];
    $email = $_POST['email'];
    $Password = Password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing the password

    // Insert data into the users table
    $sql = "INSERT INTO user (first_name, last_name, email, Password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $Password);

    if ($stmt->execute()) {
        // Registration successful
        echo "Registration successful! Welcome, $first_name";
    } else {
        // Error handling
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>