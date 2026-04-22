<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=school_management", "root", "");  
} catch (PDOException $e) {
    echo " Connection failed: " . $e->getMessage();
}
?>