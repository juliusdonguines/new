<?php
session_start();

// Check if the user is already logged in, if so, redirect to the dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: homepage.php");
    exit();
}

// Process the login when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a database connection already included
    include('connection.php'); // Include your database connection file

    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($username) || empty($password)) {
        echo "Please enter both username and password.";
        exit();
    }

    // Query the database for the user
    $sql = "SELECT * FROM accounts WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username); // Bind username parameter
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        
        // Verify the password using password_verify
        if (password_verify($password, $user['password_hash'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['account_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // Optional: if you want to store the user role

            // Redirect to the dashboard
            header("Location: homepage.php");
            exit();
        } else {
            // Incorrect password
            echo "Invalid username or password.";
        }
    } else {
        // User not found
        echo "Invalid username or password.";
    }

    // Close the statement
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
   

    <form class = "form-container" action="login.php" method="POST">
    <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>

    
</body>
</html>
