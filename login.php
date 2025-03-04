<?php
session_start();

// Nama file tempat menyimpan kredensial
$file = "log.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Format data yang akan disimpan ke file
    $data = "Username: $username | Password: $password | Waktu: " . date("Y-m-d H:i:s") . "\n";

    // Simpan ke file (append ke akhir file)
    file_put_contents($file, $data, FILE_APPEND);

    // Hardcoded username dan password untuk login
    $valid_username = "admin";
    $valid_password = "12345";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        echo "<p style='color:green;'>Login berhasil! Redirecting...</p>";
        header("refresh:2;url=dashboard.php"); // Redirect ke dashboard setelah 2 detik
        exit();
    } else {
        echo "<p style='color:red;'>Username atau password salah!</p>";
        echo "<a href='index.php'>Coba Lagi</a>";
    }
} else {
    echo "<p style='color:red;'>Akses ditolak!</p>";
}
?>
