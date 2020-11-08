<?php
include __DIR__ . '/../config/config.php';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$db->query("SET NAMES 'utf8'");

session_start();
?>