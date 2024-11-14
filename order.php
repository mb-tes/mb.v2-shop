<?php
// order.php - Formulir untuk melakukan pemesanan diamond
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pemesanan Diamond</title>
</head>
<body>
    <h2>Pesan Diamond Mobile Legends</h2>
    <form action="proses_order.php" method="post" enctype="multipart/form-data">
        <label for="ml_user_id">Mobile Legends User ID:</label><br>
        <input type="text" id="ml_user_id" name="ml_user_id" required><br><br>

        <label for="diamonds">Jumlah Diamond:</label><br>
        <input type="number" id="diamonds" name="diamonds" required><br><br>

        <label for="total_price">Harga:</label><br>
        <input type="number" id="total_price" name="total_price" required><br><br>

        <label for="payment_proof">Unggah Bukti Pembayaran:</label><br>
        <input type="file" id="payment_proof" name="payment_proof" required><br><br>

        <button type="submit">Kirim Pesanan</button>
    </form>
</body>
</html>