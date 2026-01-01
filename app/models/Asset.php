<?php
require_once __DIR__ . '/../config/database.php';

class Asset {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function all() {
        return $this->db->query("SELECT * FROM assets")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $category, $qty) {
        $stmt = $this->db->prepare(
            "INSERT INTO assets (asset_name, category, quantity) VALUES (?, ?, ?)"
        );
        return $stmt->execute([$name, $category, $qty]);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM assets WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $category, $qty) {
        $stmt = $this->db->prepare(
            "UPDATE assets SET asset_name = ?, category = ?, quantity = ? WHERE id = ?"
        );
        return $stmt->execute([$name, $category, $qty, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM assets WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
