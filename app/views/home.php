<?php require __DIR__ . '/layout/header.php'; ?>
<h1>Welcome, <?= $_SESSION['user']['name']; ?></h1>
<p>This is the home page.</p>
<?php require __DIR__ . '/layout/footer.php'; ?>
