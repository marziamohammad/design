<?php
// Include database connection file
include 'db_connect.php'; // Ensure this file contains the correct connection details

// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Fetch user data from session
$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>

<!-- Font Awesome CDN link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 
<!-- Custom CSS file link -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Header section starts -->
<header class="header">
    <section class="flex">
        <a href="home.html" class="logo">Educa.</a>

        <form action="" method="post" class="search-form">
            <input type="text" name="search_box" placeholder="search course..." required maxlength="100">
            <button type="submit" class="fas fa-search" name="search_box"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
            <img src="images/pic-1.png" alt="Profile Picture" width="60" height="auto">
            <h3><?php echo htmlspecialchars($user_name); ?></h3>
            <span>student</span>
            <a href="profile.php" class="btn">view profile</a>
            <div class="flex-btn">
                <a href="login.php" class="option-btn">login</a>
                <a href="register.html" class="option-btn">register</a>
            </div>
        </div>

    </section>
</header>
<!-- Header section ends -->

<!-- Side bar section starts -->
<div class="side-bar">
     <div class="close-side-bar">
         <i class="fas fa-times"></i>
     </div>

    <div class="profile">
        <img src="images/pic-1.png" alt="Profile Picture" width="60" height="auto">
        <h3><?php echo htmlspecialchars($user_name); ?></h3>
        <span>student</span>
        <a href="profile.php" class="btn">view profile</a>
    </div>

    <nav class="navbar">
        <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
        <a href="about.html"><i class="fas fa-question"></i><span>about us</span></a>
        <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
        <a href="teacher.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
        <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
    </nav>
</div>
<!-- Side bar section ends -->

<!-- Custom JS file link -->  
<script src="js/script.js"></script>

</body>
</html>
