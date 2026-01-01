<!DOCTYPE html>
<html>
<head>
    <title>Lab Assets</title>

    <!-- Base styles -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/auth.css">

    <link rel="stylesheet" href="assets/assets.css">


    <!-- New UI styles -->
    <link rel="stylesheet" href="assets/homepage.css">
</head>
<body>

<?php if (isset($_SESSION['user'])): ?>
<header class="main-header">
    <div class="logo">Lab Assets</div>

    <nav class="nav-links">
        <a href="index.php?action=home">Home</a>

        <?php if ($_SESSION['user']['role'] === 'admin'): ?>
            <a href="index.php?action=assets">Assets</a>
            <a href="index.php?action=add-asset-form">Add Asset</a>
        <?php endif; ?>

        <a href="index.php?action=logout" class="logout-btn">Logout</a>
    </nav>
</header>
<?php endif; ?>
