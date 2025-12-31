<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function showLogin() {
        if (isset($_SESSION['user'])) {
            header("Location: index.php?action=home");
            exit;
        }
        require __DIR__ . '/../views/auth/login.php';
    }

    public function showRegister() {
        if (isset($_SESSION['user'])) {
            header("Location: index.php?action=home");
            exit;
        }
        require __DIR__ . '/../views/auth/register.php';
    }

    public function register() {
        $this->user->register($_POST['name'], $_POST['email'], $_POST['password']);
        header("Location: index.php?action=login");
    }

    public function login() {
        $user = $this->user->login($_POST['email']);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: index.php?action=home");
            exit;
        }

        echo "Invalid credentials";
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
        exit;
    }
}
