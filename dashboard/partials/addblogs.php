<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0;
    }
    .wrapper {
      display: flex;
      min-height: 100vh;
    }
    #sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      height: 100vh;
      position: fixed;
    }
    #main-content {
      margin-left: 250px; /* Same as sidebar width */
      padding: 30px;
      width: 100%;
    }
  </style>
</head>
<body>

<div class="wrapper">
  <?php include('../partials/sidebar.php'); ?>

  <div id="main-content">
    <div class="container">
      <h2>Add Blog</h2>
      <form action="../backend/submit_blog.php" method="POST">
        <div class="mb-3">
          <label for="title" class="form-label">Blog Title</label>
          <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <input type="text" name="category" id="category" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Blog</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
