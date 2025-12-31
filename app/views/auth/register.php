<?php require __DIR__ . '/../layout/header.php'; ?>

<div class="auth-wrapper">
    <div class="system-title">
        <h1>Lab Asset Recording System</h1>
        <p>Create Your Account</p>
    </div>
    
    <div class="auth-card">
        <h2>Register</h2>
        <p class="auth-subtitle">Fill in your details to get started</p>

        <form method="POST" action="index.php?action=register">
            <div class="input-group user-input">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>

            <div class="input-group email-input">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-group password-input">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit">Create Account</button>
        </form>

        <p>Already registered? <a href="index.php?action=login">Login Here</a></p>
    </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>