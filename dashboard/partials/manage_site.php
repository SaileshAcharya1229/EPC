<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = __DIR__ . '/../uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Upload site logo
    if (!empty($_FILES['site_logo']['name'])) {
        $logoPath = $uploadDir . basename($_FILES['site_logo']['name']);
        move_uploaded_file($_FILES['site_logo']['tmp_name'], $logoPath);
    }

    // Upload About Us Image
    if (!empty($_FILES['about_image']['name'])) {
        $aboutPath = $uploadDir . basename($_FILES['about_image']['name']);
        move_uploaded_file($_FILES['about_image']['tmp_name'], $aboutPath);
    }

    // Handle other fields
    $about_text = $_POST['about_text'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $facebook = $_POST['facebook'] ?? '';
    $instagram = $_POST['instagram'] ?? '';
    $twitter = $_POST['twitter'] ?? '';
    $linkedin = $_POST['linkedin'] ?? '';

    // Save logic (DB/config) goes here...

    echo "<div class='alert alert-success container mt-3'>Settings updated successfully.</div>";
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-5">
    <h2 class="fw-bold mb-4">Manage Site Settings</h2>

    <form method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">

        <!-- Site Logo -->
        <div class="mb-4">
            <h5 class="fw-semibold">Site Logo</h5>
            <label class="form-label">Upload Logo</label>
            <input type="file" name="site_logo" class="form-control" accept="image/*">
        </div>

        <!-- About Us Image + Text -->
        <div class="mb-4">
            <h5 class="fw-semibold">About Us Image</h5>
            <label class="form-label">Upload Image</label>
            <input type="file" name="about_image" class="form-control mb-2" accept="image/*">

            <label class="form-label">About Us Text</label>
            <textarea name="about_text" class="form-control" rows="3" placeholder="Write something about your site..."></textarea>
        </div>

        <!-- Contact Details -->
        <div class="border rounded p-3 mb-4">
            <h5 class="fw-semibold mb-3">Contact Details</h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-12">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
            </div>
        </div>

        <!-- Footer Social Links -->
        <div class="border rounded p-3 mb-4">
            <h5 class="fw-semibold mb-3">Footer Social Links</h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="url" name="facebook" class="form-control" placeholder="Facebook URL">
                </div>
                <div class="col-md-6">
                    <input type="url" name="instagram" class="form-control" placeholder="Instagram URL">
                </div>
                <div class="col-md-6">
                    <input type="url" name="twitter" class="form-control" placeholder="Twitter URL">
                </div>
                <div class="col-md-6">
                    <input type="url" name="linkedin" class="form-control" placeholder="LinkedIn URL">
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
    </form>
</div>
