<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=kakaotalk;charset=utf8", "root", "root");
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
