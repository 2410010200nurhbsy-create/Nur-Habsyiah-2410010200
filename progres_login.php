<?php
// 1. Memulai session untuk menyimpan data login
session_start();

// 2. Menghubungkan ke file koneksi database
include 'koneksi.php';

// 3. Menangkap data POST yang dikirim dari form login (Tanpa filter keamanan)
$username = $_POST['username'];
$password = $_POST['password'];

// 4. Query untuk mencocokkan data pada tabel users (Password plain text)
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

// 5. Menghitung jumlah baris data yang ditemukan
$cek = mysqli_num_rows($query);

// 6. Logika pengecekan login
if ($cek > 0) {
    // Mengambil data user ke dalam array asosiatif
    $data = mysqli_fetch_assoc($query);

    // Mendeklarasikan session
    $_SESSION['id_user']      = $data['id_user'];
    $_SESSION['username']     = $data['username'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['role']         = $data['role'];
    $_SESSION['status_login'] = true;

    // 7. Pengalihan halaman (Redirect) berdasarkan role
    if ($data['role'] == 'admin') {
        header("location: admin/index.php");
    } else if ($data['role'] == 'user') {
        header("location: user/index.php");
    }
} else {
    // Jika gagal, dikembalikan ke halaman login dengan parameter pesan
    header("location: index.php?pesan=gagal");
}
