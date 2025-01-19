<?php
class User {
    public $id;
    public $timestamp;
    public $mobile;
    public $password;
    public $reffrel_code;
    public $invite_code;
    public $otp;
    private $table;

    public function __construct() {
        $this->table = 'user';
    }

    // CREATE
    public function create($conn) {
        $sql = "INSERT INTO $this->table (mobile, password, reffrel_code, invite_code, otp) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $this->mobile, $this->password, $this->reffrel_code, $this->invite_code, $this->otp);
        if ($stmt->execute()) {
            return $stmt->insert_id;
        } else {
            return false;
        }
    }

    // READ
    public function read($conn, $id) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // UPDATE
    public function update($conn) {
        $sql = "UPDATE $this->table SET mobile = ?, password = ?, reffrel_code = ?, invite_code = ?, otp = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $this->mobile, $this->password, $this->reffrel_code, $this->invite_code, $this->otp, $this->id);
        return $stmt->execute();
    }

    // DELETE
    public function delete($conn, $id) {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // LIST ALL USERS
    public function listAll($conn) {
        $sql = "SELECT * FROM $this->table";
        $result = $conn->query($sql);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
}
?>
