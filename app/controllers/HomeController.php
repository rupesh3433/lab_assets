<?php

class HomeController {
    public function index() {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?action=login");
            exit;
        }
        require __DIR__ . '/../views/home.php';
    }
}
