<?php
session_start();

// Handle theme change via AJAX
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <style>
    body {
      transition: background-color 0.4s ease, color 0.4s ease;
    }
    body.light {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      color: #212529;
    }
    body.dark {
      background: linear-gradient(to right, #121212, #1e1e1e);
      color: #f8f9fa;
    }

    .glass-card {
      margin: 4rem auto;
      max-width: 450px;
      padding: 2.5rem;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      border: 1px solid rgba(255, 255, 255, 0.18);
      transition: all 0.4s ease;
    }
    body.dark .glass-card {
      background: rgba(30, 30, 30, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .form-check-input {
      width: 3em;
      height: 1.5em;
    }
    .form-check-input:checked {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }

    h2 {
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .fade-in {
      animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">
  <div class="glass-card text-center fade-in">
    <h2><i class="bi bi-brightness-high-fill me-2"></i>Theme Settings</h2>
    <div class="form-check form-switch d-flex justify-content-center align-items-center gap-3 mb-4">
      <label class="form-check-label fs-5" for="themeSwitch">Dark Mode</label>
      <input class="form-check-input" type="checkbox" id="themeSwitch" <?php echo $theme === 'dark' ? 'checked' : ''; ?>>
    </div>
    <p class="mb-0">Current theme: <strong id="currentTheme"><?php echo ucfirst($theme); ?></strong></p>
  </div>

  <!-- Optional: Bootstrap icons for better UI -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <script>
    $(document).ready(function () {
      $('#themeSwitch').on('change', function () {
        const selectedTheme = this.checked ? 'dark' : 'light';
        $.post('', { theme: selectedTheme }, function (res) {
          if (res.status === 'success') {
            $('body').removeClass('light dark').addClass(selectedTheme);
            $('#currentTheme').text(selectedTheme.charAt(0).toUpperCase() + selectedTheme.slice(1));
          }
        }, 'json');
      });
    });
  </script>
</body>
</html>
