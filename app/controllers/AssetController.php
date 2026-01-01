<?php
require_once __DIR__ . '/../models/Asset.php';
require_once __DIR__ . '/../helpers/admin_guard.php';

class AssetController {
    private $asset;

    public function __construct() {
        $this->asset = new Asset();
    }

    // View assets table
    public function index() {
        require_admin();
        $assets = $this->asset->all();
        require __DIR__ . '/../views/assets/index.php';
    }

    // Show add asset form
    public function createForm() {
        require_admin();
        require __DIR__ . '/../views/assets/create.php';
    }

    // Store asset
    public function store() {
        require_admin();
        $this->asset->create(
            $_POST['name'],
            $_POST['category'],
            $_POST['quantity']
        );
        header("Location: index.php?action=assets");
        exit;
    }

    // Edit form
    public function edit() {
        require_admin();

        $id = $_GET['id'] ?? null;
        if (!$id) {
            header("Location: index.php?action=assets");
            exit;
        }

        $asset = $this->asset->find($id);
        require __DIR__ . '/../views/assets/edit.php';
    }

    // Update asset
    public function update() {
        require_admin();

        $this->asset->update(
            $_POST['id'],
            $_POST['name'],
            $_POST['category'],
            $_POST['quantity']
        );

        header("Location: index.php?action=assets");
        exit;
    }

    // Delete asset
    public function delete() {
        require_admin();
        $this->asset->delete($_GET['id']);
        header("Location: index.php?action=assets");
        exit;
    }
}
