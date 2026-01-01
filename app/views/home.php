<?php require __DIR__ . '/layout/header.php'; ?>

<section class="hero">
    <div class="hero-overlay">
        <h1>Welcome to</h1>
        <h2>Lab Assets Management System</h2>

        <p>
            Manage laboratory equipment efficiently, securely, and digitally.
        </p>

        <span class="welcome-user">
            Logged in as <strong><?= htmlspecialchars($_SESSION['user']['name']) ?></strong>
        </span>
    </div>
</section>

<?php require __DIR__ . '/layout/footer.php'; ?>
