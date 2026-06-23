<?php

/**
 * File: koneksi.php
 * Deskripsi: Menangani koneksi ke database MySQL dan pengaturan waktu lokal.
 */

// 1. Pengaturan Zona Waktu (WITA - Asia/Makassar)
date_default_timezone_set('Asia/Makassar');

// 2. Konfigurasi Database (localhost/XAMPP/MAMP)
$host     = "localhost";
$username = "root";
$password = ""; // Tanpa password sesuai instruksi
$database = "db_icatalog";

// 3. Membuat Koneksi Utama ($conn)
$conn = mysqli_connect($host, $username, $password, $database);

// 4. Cek Koneksi (To the point)
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Opsional: Pesan penanda koneksi berhasil (bisa dihapus jika sudah masuk tahap produksi)
// echo "Koneksi Berhasil. Waktu Sistem: " . date('Y-m-d H:i:s');
