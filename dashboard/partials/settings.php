<?php
// session_start();

// Handle AJAX request to set theme
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
  <title>Theme Toggle</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <style>
  body {
    transition: background-color 0.4s, color 0.4s;
  }
  body.light { background: #f8f9fa; color: #212529; }
  body.dark { background: #121212; color: #f8f9fa; }
  .theme-row {
    margin: 2rem auto;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    font-size: 1.2rem;
  }
  .form-check-input {
    width: 2.5em;
    height: 1.3em;
  }
  </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">
<div class="d-flex justify-content-center align-items-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
  <div class="card p-4 shadow rounded text-center" style="width: 100%; max-width: 400px;">
    
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

      <!-- Change Profile Picture -->
      <a href="change-profile-picture.php" class="btn btn-outline-secondary w-75 mx-auto">
        Change Profile Picture
      </a>
    </div>

    <!-- Change Password Form (initially hidden) -->
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

  </div>
</div>



<script>
  $(document).ready(function() {
    // Theme toggle
    $('#themeSwitch').change(function() {
      const theme = $(this).is(':checked') ? 'dark' : 'light';
      $.post('settings.php', { theme: theme }, function(response) {
        if (response.status === 'success') {
          $('body').removeClass('light dark').addClass(theme);
        }
      }, 'json');
    });

    // Show password form
    $('#show-password-form').click(function() {
      $('#settings-panel').hide();
      $('#password-form').show();
    });

    // Cancel password form
    $('#cancel-password-form').click(function() {
      $('#password-form').hide();
      $('#settings-panel').show();
    });
  });
</script>



</html>
