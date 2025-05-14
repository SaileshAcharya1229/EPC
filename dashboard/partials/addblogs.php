<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Blog Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Froala Editor CSS (Free basic version) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@4.1.4/css/froala_editor.pkgd.min.css">
  
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 700px;
      margin: 50px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2 class="text-center mb-4">Add Blog Post</h2>
  
  <form action="submit_blog.php" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input type="text" class="form-control" id="category" name="category" placeholder="Enter category" required>
    </div>

    <div class="mb-4">
      <label for="content" class="form-label">Content</label>
      <textarea id="content" name="content"></textarea>
    </div>

    <button type="submit" class="btn btn-primary w-100">Submit Post</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Froala Editor JS -->
<script src="https://cdn.jsdelivr.net/npm/froala-editor@4.1.4/js/froala_editor.pkgd.min.js"></script>

<script>
  new FroalaEditor('#content', {
    height: 200
  });
</script>

</body>
</html>
