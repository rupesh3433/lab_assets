<?php require __DIR__ . '/../layout/header.php'; ?>

<div class="auth-wrapper">
    <div class="system-title">
        <h1>Lab Asset Recording System</h1>
    </div>
    
    <div class="auth-card">
        <h2>Login to Your Account</h2>
        <p class="auth-subtitle">Enter your credentials to continue</p>

        <form method="POST" action="index.php?action=login">
            <div class="input-group email-input">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-group password-input">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="remember-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit">Log In</button>
        </form>

        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>

        <p>Need an account? <a href="index.php?action=register">Register Here</a></p>
    </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>