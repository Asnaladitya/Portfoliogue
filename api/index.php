<?php

// Menampilkan error secara paksa agar tidak cuma 500
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Pastikan folder storage bootstrap ada
$storagePath = '/tmp/storage/bootstrap/cache';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0755, true);
}

putenv("CACHE_CONFIGPATH=$storagePath");

require __DIR__ . '/../public/index.php';