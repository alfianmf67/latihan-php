<!DOCTYPE html>
<html>
<head>
    <title>setimasi biaya</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="jtempuh">jarak tempuh</label><br>
        <input type="text" id="jtempuh" name="jtempuh" required><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jarak = $_POST["jtempuh"];
        $trips = $jarak;
        
        if ($trips >= 10 && $trips <= 20) {
            $category = "Bronze";
            $discount = 5;
        } elseif ($trips >= 21 && $trips <= 50) {
            $category = "Silver";
            $discount = 10;
        } elseif ($trips > 50) {
            $category = "Gold";
            $discount = 15;
        } else {
            $category = "non promosi";
            $discount = 0;
        }

        $harga_tiket = 100; // Example price
        $berat_koper = 20; // Example weight
        
        $total_bayar = $harga_tiket * $berat_koper * 1.05;

        echo "
        <p>jarak tempuh anda $jarak ada mendapat kategori $category anda berhak mendapat discount $discount </p>;
        ";
    }
    ?>
</body>
</html>