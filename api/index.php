<?php

// Pastikan folder cache bootstrap ada di /tmp
$storagePath = '/tmp/storage/bootstrap/cache';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0755, true);
}

// Pengaturan wajib untuk Vercel
putenv("BOOTSTRAP_CACHE_PATH=$storagePath");
putenv("VIEW_COMPILED_PATH=/tmp/storage/framework/views");
putenv("LOG_CHANNEL=stderr");
putenv("SESSION_DRIVER=cookie");

require __DIR__ . '/../public/index.php';