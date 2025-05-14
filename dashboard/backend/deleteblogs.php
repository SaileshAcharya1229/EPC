<?php
require('db.php');
$id = $_GET['id'];
$conn->query("DELETE FROM blogs WHERE id = $id");
header("Location: ../frontend/view_blogs.php");
?>
