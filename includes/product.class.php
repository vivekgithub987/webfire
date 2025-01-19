<?php
class Product {
    // Public variables
    public $id;
    public $product_name;
    public $image;
    public $cycle;
    public $daily_income;
    public $total_income;
    public $price;
    public $status;
    public $created_at;
    public $updated_at;

    private $table;

    public function __construct() {
        $this->table = 'product';
    }

    // Create a new product
    public function create($conn) {
        $sql = "INSERT INTO $this->table (product_name, image, cycle, daily_income, total_income, price, status, created_at, updated_at) 
                VALUES (:product_name, :image, :cycle, :daily_income, :total_income, :price, :status, :created_at, :updated_at)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_name', $this->product_name);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':cycle', $this->cycle);
        $stmt->bindParam(':daily_income', $this->daily_income);
        $stmt->bindParam(':total_income', $this->total_income);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':created_at', $this->created_at);
        $stmt->bindParam(':updated_at', $this->updated_at);
        
        return $stmt->execute();
    }

    // Read all products
    public function readAll($conn) {
        $sql = "SELECT * FROM $this->table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Read a single product
    public function read($conn, $id) {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update a product
    public function update($conn) {
        $sql = "UPDATE $this->table 
                SET product_name = :product_name, image = :image, cycle = :cycle, daily_income = :daily_income, total_income = :total_income, price = :price, status = :status, updated_at = :updated_at 
                WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_name', $this->product_name);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':cycle', $this->cycle);
        $stmt->bindParam(':daily_income', $this->daily_income);
        $stmt->bindParam(':total_income', $this->total_income);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':updated_at', $this->updated_at);
        $stmt->bindParam(':id', $this->id);
        
        return $stmt->execute();
    }

    // Delete a product
    public function delete($conn, $id) {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
