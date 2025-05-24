<?php
// Example data - replace with your database query
$services = [
    ['id' => 1, 'name' => 'Web Hosting', 'description' => 'Reliable web hosting service'],
    ['id' => 2, 'name' => 'Domain Registration', 'description' => 'Register your domain easily'],
    ['id' => 3, 'name' => 'SSL Certificate', 'description' => 'Secure your website'],
];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2>Services List</h2>
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Service Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $index => $service): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($service['name']) ?></td>
                <td><?= htmlspecialchars($service['description']) ?></td>
                <td>
                    <a href="edit_service.php?id=<?= $service['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="delete_service.php?id=<?= $service['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>