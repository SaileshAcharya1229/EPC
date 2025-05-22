<?php
// session_start();

// Handle theme toggle
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
  $_SESSION['theme'] = $_POST['theme'];
  echo json_encode(['status' => 'success']);
  exit;
}

$theme = $_SESSION['theme'] ?? 'light';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Settings</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <style>
    body {
      transition: background-color 0.4s, color 0.4s;
      margin: 0;
    }

    body.light { background: #f8f9fa; color: #212529; }
    body.dark { background: #121212; color: #f8f9fa; }

    .center-wrapper {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      width: 100%;
      max-width: 450px;
      padding: 1rem;
    }

    .form-check-input {
      width: 2.5em;
      height: 1.3em;
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .btn-sm {
      font-size: 0.9rem;
    }
  </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">

<div class="center-wrapper">
  <div class="card p-4 shadow rounded text-center">

    <!-- Settings Panel -->
    <div id="settings-panel">
      <h4 class="mb-4">Settings</h4>

      <!-- Theme Toggle -->
      <div class="d-flex justify-content-center align-items-center mb-4 gap-2">
        <label class="form-check-label me-2" for="themeSwitch">Dark Mode</label>
        <input class="form-check-input" type="checkbox" id="themeSwitch" <?php echo $theme === 'dark' ? 'checked' : ''; ?>>
      </div>

      <!-- Change Password -->
      <button id="show-password-form" class="btn btn-outline-primary mb-3 w-75 mx-auto">
        Change Password
      </button>

      <!-- Update Profile -->
      <button id="show-profile-form" class="btn btn-outline-secondary w-75 mx-auto">
        Update Profile
      </button>
    </div>

    <!-- Password Form -->
    <div id="password-form" class="text-start" style="display: none;">
      <h4 class="text-center mb-4">Change Password</h4>
      <form action="update-password.php" method="POST">
        <div class="mb-3">
          <label for="currentPassword" class="form-label">Current Password</label>
          <input type="password" class="form-control" id="currentPassword" name="current_password" required>
        </div>
        <div class="mb-3">
          <label for="newPassword" class="form-label">New Password</label>
          <input type="password" class="form-control" id="newPassword" name="new_password" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm New Password</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="button" id="cancel-password-form" class="btn btn-secondary">Cancel</button>
        </div>
      </form>
    </div>

    <!-- Profile Update Form -->
    <div id="profile-form" class="text-start" style="display: none;">
      <h4 class="text-center mb-4">Update Profile</h4>
      <form action="update-profile.php" method="POST" enctype="multipart/form-data">
        <div class="text-center mb-3">
          <!-- Default profile picture or user's -->
          <img src="default-profile.png" id="preview-img" class="profile-pic" alt="Profile Picture">
          <div>
            <label class="btn btn-sm btn-outline-info mt-2">
              Change Photo
              <input type="file" name="profile_picture" id="profilePictureInput" accept="image/*" hidden>
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" id="cancel-profile-form" class="btn btn-secondary">Cancel</button>
        </div>
      </form>
    </div>

  </div>
</div>

<script>
  $(document).ready(function () {
    // Theme toggle
    $('#themeSwitch').change(function () {
      const theme = $(this).is(':checked') ? 'dark' : 'light';
      $.post('settings.php', { theme: theme }, function (response) {
        if (response.status === 'success') {
          $('body').removeClass('light dark').addClass(theme);
        }
      }, 'json');
    });

    // Show forms
    $('#show-password-form').click(function () {
      $('#settings-panel').hide();
      $('#password-form').show();
      $('#profile-form').hide();
    });

    $('#cancel-password-form').click(function () {
      $('#settings-panel').show();
      $('#password-form').hide();
    });

    $('#show-profile-form').click(function () {
      $('#settings-panel').hide();
      $('#password-form').hide();
      $('#profile-form').show();
    });

    $('#cancel-profile-form').click(function () {
      $('#settings-panel').show();
      $('#profile-form').hide();
    });

    // Preview profile picture
    $('#profilePictureInput').on('change', function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          $('#preview-img').attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
      }
    });
  });
</script>

</body>
</html>
