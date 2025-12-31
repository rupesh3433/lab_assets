<!DOCTYPE html>
<html>
<head>
    <title>Lab Assets</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/auth.css">
</head>
<body>

<?php if (isset($_SESSION['user'])): ?>
<nav>
    <a href="index.php?action=home">Home</a>
    <a href="index.php?action=logout">Logout</a>
</nav>
<?php endif; ?>
