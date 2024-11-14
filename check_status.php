<?php
// check_status.php - Memeriksa status pesanan pengguna
$conn = new mysqli("localhost", "username", "password", "topup_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ml_user_id = $_POST['ml_user_id'];
    $query = "SELECT * FROM orders WHERE ml_user_id = '$ml_user_id' ORDER BY created_at DESC LIMIT 1";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    if ($row) {
        echo "Status pesanan Anda: " . $row['status'];
    } else {
        echo "Pesanan tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cek Status Pesanan</title>
</head>
<body>
    <h2>Cek Status Pesanan Diamond</h2>
    <form action="" method="post">
        <label for="ml_user_id">Mobile Legends User ID:</label><br>
        <input type="text" id="ml_user_id" name="ml_user_id" required><br><br>
        <button type="submit">Cek Status</button>
    </form>
</body>
</html>