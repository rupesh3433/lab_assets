CREATE DATABASE lab_assets;
USE lab_assets;

-- ======================
-- USERS TABLE
-- ======================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ======================
-- ASSETS TABLE
-- ======================
CREATE TABLE assets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    asset_name VARCHAR(150) NOT NULL,
    category VARCHAR(100),
    quantity INT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ======================
-- ADMIN USER (PRE-SEEDED)
-- ======================
INSERT INTO users (name, email, password, role)
VALUES (
  'Admin',
  'admin@admin.com',
  '$2y$10$vSGpIcYJxs6B585bUkGLbOd6BIInujXilEFmEzDazvVCmoruxSE6C',
  'admin'
);
