<?php
class User {
    private $db;

    public function __construct() {
        $this->db = getDB();
    }

    public function checkEmailExists($email) {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }

    public function register($name, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $password]);
    }

    public function authenticate($email, $password) {
        $stmt = $this->db->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        return $user && password_verify($password, $user['password']);
    }

    public function getRole($email) {
        $stmt = $this->db->prepare("SELECT role FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetchColumn();
    }
}