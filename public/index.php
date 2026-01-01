<?php
session_start();

require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AssetController.php';

$action = $_GET['action'] ?? 'login';

$auth = new AuthController();
$home = new HomeController();

switch ($action) {

    case 'register':
        $_SERVER['REQUEST_METHOD'] === 'POST'
            ? $auth->register()
            : $auth->showRegister();
        break;

    case 'login':
        $_SERVER['REQUEST_METHOD'] === 'POST'
            ? $auth->login()
            : $auth->showLogin();
        break;

    case 'home':
        $home->index();
        break;

    case 'assets':
        (new AssetController())->index();
        break;

    case 'add-asset-form':
        (new AssetController())->createForm();
        break;

    case 'add-asset':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new AssetController())->store();
        }
        break;

    case 'edit-asset':
        (new AssetController())->edit();
        break;

    case 'update-asset':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new AssetController())->update();
        }
        break;

    case 'delete-asset':
        (new AssetController())->delete();
        break;

    case 'logout':
        $auth->logout();
        break;

    default:
        $auth->showLogin();
}
