<?php
$message = '';
try {
    $db = new PDO('mysql:host=localhost;dbname=handp', 'rewrite', 'ernest@34$%*r!');
} catch (PDOException $e) {
    $message = $e->getMessage();
}