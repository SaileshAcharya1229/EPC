<?php include 'header.php'; ?>

<?php
// Dummy data (same as in blog.php)
$blogs = [
  ['title' => 'How to Choose the Right Plumber', 'category' => 'plumbing', 'desc' => 'Tips to find a good plumber.', 'img' => 'https://fakeimg.pl/300x200'],
  ['title' => 'Electrical Safety Tips', 'category' => 'electrical', 'desc' => 'Stay safe around electricity.', 'img' => 'https://fakeimg.pl/300x200'],
  ['title' => 'Essential Home Cleaning Tips', 'category' => 'cleaning', 'desc' => 'Clean smarter, not harder.', 'img' => 'https://fakeimg.pl/300x200'],
  ['title' => 'Winter Plumbing Checklist', 'category' => 'plumbing', 'desc' => 'Avoid frozen pipes in winter.', 'img' => 'https://fakeimg.pl/300x200'],
];

$title = $_GET['title'] ?? '';
$blog = null;

foreach ($blogs as $item) {
  if ($item['title'] === $title) {
    $blog = $item;
    break;
  }
}
?>

<section class="pt-5 mt-5 bg-light">
  <div class="container">
    <?php if ($blog): ?>
      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $blog['title']; ?></li>
        </ol>
      </nav>

      <div class="row">
        <div class="col-md-8 offset-md-2">
          <img src="<?php echo $blog['img']; ?>" class="img-fluid mb-4" alt="<?php echo $blog['title']; ?>">
          <h2><?php echo $blog['title']; ?></h2>
          <p class="text-muted">Category: <?php echo ucfirst($blog['category']); ?></p>
          <p><?php echo $blog['desc']; ?></p>
        </div>
      </div>
    <?php else: ?>
      <div class="alert alert-danger">Blog not found.</div>
    <?php endif; ?>
  </div>
</section>

<?php include 'footer.php'; ?>
