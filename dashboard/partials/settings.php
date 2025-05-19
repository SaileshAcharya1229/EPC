<?php
session_start();

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
  <title>Theme Settings</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      transition: background-color 0.4s ease, color 0.4s ease;
    }
    body.light {
      background: #f8f9fa;
      color: #212529;
    }
    body.dark {
      background: #121212;
      color: #f8f9fa;
    }

    .glass-card {
      margin: 4rem auto;
      max-width: 450px;
      padding: 2.5rem;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
    body.dark .glass-card {
      background: rgba(30, 30, 30, 0.3);
    }

    .form-check-input {
      width: 3em;
      height: 1.5em;
    }

    h2 {
      font-weight: 600;
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">
  <div class="glass-card text-center">
    <h2><i class="bi bi-moon-stars me-2"></i>Theme Settings</h2>
    <div class="form-check form-switch d-flex justify-content-center align-items-center gap-3 mb-4">
      <label class="form-check-label fs-5" for="themeSwitch">Dark Mode</label>
      <input class="form-check-input" type="checkbox" id="themeSwitch" <?php echo $theme === 'dark' ? 'checked' : ''; ?>>
    </div>
    <p class="mb-0">Current theme: <strong id="currentTheme"><?php echo ucfirst($theme); ?></strong></p>
  </div>

  <script>
    $(document).ready(function () {
      $('#themeSwitch').on('change', function () {
        const selectedTheme = this.checked ? 'dark' : 'light';
        $.ajax({
          url: '',
          type: 'POST',
          data: { theme: selectedTheme },
          dataType: 'json',
          success: function (response) {
            if (response.status === 'success') {
              $('body').removeClass('light dark').addClass(selectedTheme);
              $('#currentTheme').text(selectedTheme.charAt(0).toUpperCase() + selectedTheme.slice(1));
            }
          }
        });
      });
    });
  </script>
</body>
</html>
