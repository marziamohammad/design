<?php
// Include database connection file
include 'db_connect.php'; // Ensure this file contains the correct connection details

// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize them
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['pass']);

    // Prepare and execute SQL query to fetch user details
    $sql = "SELECT id, name, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $name, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Store user information in session
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;

            // Redirect to profile page
            header("Location: profile.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
?>
