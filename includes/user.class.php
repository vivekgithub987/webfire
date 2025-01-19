<?php
require_once 'config.php';
class User {
    public $id;
    public $timestamp;
    public $mobile; // unique
    public $password;
    public $reffrel_code = "something";
    public $invite_code;
    public $otp;
    private $table;

    private $db;

    public function __construct($db) {
        $this->table = 'users';
        $this->db = $db->connection;
    }

    // CREATE
    public function create() {
        $sql = "INSERT INTO $this->table (mobile, password, referral_code, invite_code, otp) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssss", $this->mobile, $this->password, $this->reffrel_code, $this->invite_code, $this->otp);
        if ($stmt->execute()) {
            return $stmt->insert_id;
        } else {
            return false;
        }
    }

    // READ
    public function read($id) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // UPDATE
    public function update() {
        $sql = "UPDATE $this->table SET mobile = ?, password = ?, reffrel_code = ?, invite_code = ?, otp = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssssi", $this->mobile, $this->password, $this->reffrel_code, $this->invite_code, $this->otp, $this->id);
        return $stmt->execute();
    }

    // DELETE
    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // LIST ALL USERS
    public function listAll() {
        $sql = "SELECT * FROM $this->table";
        $result = $this->db->query($sql);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
}
?>
