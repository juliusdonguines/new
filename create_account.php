<?php
// Include the connection file
include("connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit();
    }

    // Hash password for security
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Prepare the SQL query
    $sql = "INSERT INTO accounts (username, email, password_hash) VALUES (?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters (s = string, s = string, s = string)
    $stmt->bind_param("sss", $username, $email, $passwordHash);

    // Execute the query
    if ($stmt->execute()) {
        echo "Account created successfully! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: Could not create account. " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
