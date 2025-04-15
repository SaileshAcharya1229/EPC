<?php include 'header.php'; ?>

<section class="pt-5 mt-5 bg-light">

    
  <div class="container">
    <h2 class="text-center mb-4">Our Blog</h2>

    <!-- Filter Section -->
    <form method="GET" class="mb-4 d-flex gap-3 justify-content-center flex-wrap">
      <input type="text" name="search" class="form-control w-50" placeholder="Search blog..." value="<?php echo $_GET['search'] ?? ''; ?>">
      <select name="category" class="form-select w-auto">
        <option value="">All Categories</option>
        <option value="plumbing" <?php if(($_GET['category'] ?? '') === 'plumbing') echo 'selected'; ?>>Plumbing</option>
        <option value="electrical" <?php if(($_GET['category'] ?? '') === 'electrical') echo 'selected'; ?>>Electrical</option>
        <option value="cleaning" <?php if(($_GET['category'] ?? '') === 'cleaning') echo 'selected'; ?>>Cleaning</option>
      </select>
      <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <!-- Blog Posts -->
    <div class="row">
      <?php
        // Dummy blog data
        $blogs = [
          ['title' => 'How to Choose the Right Plumber', 'category' => 'plumbing', 'desc' => 'Tips to find a good plumber.', 'img' => 'https://fakeimg.pl/300x200'],
          ['title' => 'Electrical Safety Tips', 'category' => 'electrical', 'desc' => 'Stay safe around electricity.', 'img' => 'https://fakeimg.pl/300x200'],
          ['title' => 'Essential Home Cleaning Tips', 'category' => 'cleaning', 'desc' => 'Clean smarter, not harder.', 'img' => 'https://fakeimg.pl/300x200'],
          ['title' => 'Winter Plumbing Checklist', 'category' => 'plumbing', 'desc' => 'Avoid frozen pipes in winter.', 'img' => 'https://fakeimg.pl/300x200'],
        ];

        // Filtering logic
        $search = strtolower($_GET['search'] ?? '');
        $category = $_GET['category'] ?? '';

        foreach ($blogs as $blog) {
          $matchCategory = !$category || $blog['category'] === $category;
          $matchSearch = !$search || strpos(strtolower($blog['title']), $search) !== false;

          if ($matchCategory && $matchSearch): ?>
            <div class="col-md-4 mb-4">
  <a href="blog-details.php?title=<?php echo urlencode($blog['title']); ?>" class="text-decoration-none text-dark">
    <div class="card h-100">
      <img src="<?php echo $blog['img']; ?>" class="card-img-top" alt="<?php echo $blog['title']; ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $blog['title']; ?></h5>
        <p class="card-text"><?php echo $blog['desc']; ?></p>
        <span class="badge bg-secondary"><?php echo ucfirst($blog['category']); ?></span>
      </div>
    </div>
  </a>
</div>

          <?php endif;
        }
      ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
