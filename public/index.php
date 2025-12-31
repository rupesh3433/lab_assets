<?php
session_start();   // ✅ ONLY HERE

require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';

$action = $_GET['action'] ?? 'login';

$auth = new AuthController();
$home = new HomeController();

switch ($action) {
    case 'register':
        $_SERVER['REQUEST_METHOD'] === 'POST' ? $auth->register() : $auth->showRegister();
        break;
    case 'login':
        $_SERVER['REQUEST_METHOD'] === 'POST' ? $auth->login() : $auth->showLogin();
        break;
    case 'home':
        $home->index();
        break;
    case 'logout':
        $auth->logout();
        break;
    default:
        $auth->showLogin();
}
