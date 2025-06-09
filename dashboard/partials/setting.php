<?php
// Start session to store theme preference
session_start();

// Handle theme selection
if (isset($_POST['theme'])) {
    $_SESSION['theme'] = $_POST['theme'];
    // Optional: Redirect to avoid form resubmission
    header("Location: setting.php");
    exit;
}

// Get current theme, default to 'light'
$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Theme Settings</title>
    <style>
        body.light {
            background: #fff;
            color: #222;
        }
        body.dark {
            background: #181818;
            color: #eee;
        }
        .theme-selector {
            margin: 2rem auto;
            max-width: 400px;
            padding: 2rem;
            border-radius: 8px;
            background: #f4f4f4;
        }
        body.dark .theme-selector {
            background: #222;
        }
        button {
            padding: 0.5rem 1.5rem;
            margin: 0 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .active {
            font-weight: bold;
            border: 2px solid #007bff;
        }
    </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">
    <div class="theme-selector">
        <h2>Select Theme</h2>
        <form method="post">
            <button type="submit" name="theme" value="light" class="<?php echo $theme === 'light' ? 'active' : ''; ?>">Light</button>
            <button type="submit" name="theme" value="dark" class="<?php echo $theme === 'dark' ? 'active' : ''; ?>">Dark</button>
        </form>
        <p>Current theme: <strong><?php echo ucfirst($theme); ?></strong></p>
    </div>
</body>
</html>