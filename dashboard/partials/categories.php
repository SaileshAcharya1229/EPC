<?php
// Demo: categories in a simple array (no session, no persistence)
$categories = ['Electrician', 'Plumbing', 'Painting', 'Cleaning'];

// Handle Add
if (isset($_POST['add']) && !empty(trim($_POST['category']))) {
    $categories[] = trim($_POST['category']);
}

// Handle Edit
if (isset($_POST['edit']) && isset($_POST['index'])) {
    $idx = (int)$_POST['index'];
    if (isset($categories[$idx]) && !empty(trim($_POST['category']))) {
        $categories[$idx] = trim($_POST['category']);
    }
}

// Handle Delete
if (isset($_POST['delete']) && isset($_POST['index'])) {
    $idx = (int)$_POST['index'];
    if (isset($categories[$idx])) {
        array_splice($categories, $idx, 1);
    }
}

// For edit form
$editIndex = isset($_GET['edit']) ? (int)$_GET['edit'] : null;
$editValue = ($editIndex !== null && isset($categories[$editIndex])) ? $categories[$editIndex] : '';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-4">
    <h2 class="mb-4">Categories</h2>
    <ul class="list-group mb-4">
        <?php foreach ($categories as $i => $cat): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= htmlspecialchars($cat) ?></span>
                <div>
                    <form method="post" class="d-inline">
                        <input type="hidden" name="index" value="<?= $i ?>">
                        <button type="submit" name="delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete this category?')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                    <a href="?edit=<?= $i ?>" class="btn btn-primary btn-sm ms-2">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php if ($editIndex !== null): ?>
        <h3>Edit Category</h3>
        <form method="post" class="row g-2 mb-3">
            <input type="hidden" name="index" value="<?= $editIndex ?>">
            <div class="col-auto">
                <input type="text" name="category" value="<?= htmlspecialchars($editValue) ?>" class="form-control" required>
            </div>
            <div class="col-auto">
                <button type="submit" name="edit" class="btn btn-success">Update</button>
                <a href="categories.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    <?php else: ?>
        <h3>Add Category</h3>
        <form method="post" class="row g-2 mb-3">
            <div class="col-auto">
                <input type="text" name="category" class="form-control" placeholder="Category name" required>
            </div>
            <div class="col-auto">
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </div>
        </form>
    <?php endif; ?>
</div>

<!-- Bootstrap Icons CDN (optional, for icons) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">