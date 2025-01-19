<?php
require_once 'config.php';

class Auth {
    private $db;

    public function __construct($db) {
        $this->db = $db->connection;
        session_start();
    }

    // Login function
    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT id, password FROM users WHERE mobile = ?");
        $stmt->bind_param("i", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                return true;
            }
        }
        return false;
    }

    // Verify if user is logged in
    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    // Logout function
    public function logout() {
        session_unset();
        session_destroy();
    }

    // Get current user ID
    public function getUserID() {
        return $_SESSION['user_id'] ?? null;
    }
}
?>
