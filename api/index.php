<?php

// 1. Tampilkan error jika ada masalah (biar tidak langsung 500)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Vercel itu Read-Only, jadi kita pindahkan folder cache ke /tmp
$storagePath = '/tmp/storage/bootstrap/cache';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0755, true);
}

// 3. Beri tahu Laravel lokasi folder barunya
putenv("CACHE_CONFIGPATH=$storagePath");
putenv("APP_CONFIG_CACHE=$storagePath/config.php");
putenv("APP_ROUTES_CACHE=$storagePath/routes.php");
putenv("APP_SERVICES_CACHE=$storagePath/services.php");
putenv("APP_PACKAGES_CACHE=$storagePath/packages.php");

// 4. Panggil file index utama Laravel
require __DIR__ . '/../public/index.php';