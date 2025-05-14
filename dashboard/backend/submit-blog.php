<?php
// submit_blog.php

// 1. DB Connection
$host = 'localhost';
$user = 'root';
$password = '';  // Change this!
$database = 'your_database_name';  // Change this!

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get form data
$title = $_POST['title'] ?? '';
$category = $_POST['category'] ?? '';
$content = $_POST['content'] ?? '';

// Basic validation (you can add more)
if (empty($title) || empty($category) || empty($content)) {
    die("All fields are required.");
}

// 3. Prepare and insert into database
$stmt = $conn->prepare("INSERT INTO blogs (title, category, content) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $category, $content);

if ($stmt->execute()) {
    echo "<script>alert('Blog submitted successfully!'); window.location.href='addblogs.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
