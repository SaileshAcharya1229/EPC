<?php include('../partials/sidebar.php'); ?>
<?php require('../backend/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Blogs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Blog List</h2>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>S.N.</th>
        <th>Blog Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM blogs ORDER BY id DESC";
      $result = $conn->query($sql);
      $sn = 1;
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>{$sn}</td>";
          echo "<td>{$row['title']}</td>";
          echo "<td>
            <a href='../backend/edit_blog.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
            <a href='../backend/delete_blog.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Delete this blog?\");'>Delete</a>
          </td>";
          echo "</tr>";
          $sn++;
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
