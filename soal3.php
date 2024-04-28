<!DOCTYPE html>
<html>
<head>
    <title>Form Tiket Pesawat</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br>
        <label for="jenis_penerbangan">Jenis Penerbangan:</label><br>
        <select id="jenis_penerbangan" name="jenis_penerbangan" required>
            <option value="first_class">First Class</option>
            <option value="business_class">Business Class</option>
            <option value="economy_class">Economy Class</option>
        </select><br>
        <label for="berat_koper">Berat Koper (kg):</label><br>
        <input type="number" id="berat_koper" name="berat_koper" min="0" required><br>
        <input type="submit" value="Beli Tiket">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jenis_penerbangan = $_POST["jenis_penerbangan"];
        $berat_koper = $_POST["berat_koper"];

        $harga_tiket = 0;
        switch ($jenis_penerbangan) {
            case "first_class":
                $harga_tiket = 2000000;
                break;
            case "business_class":
                $harga_tiket = 1500000;
                break;
            case "economy_class":
                $harga_tiket = 1000000;
                break;
            default:
                echo "Jenis penerbangan tidak valid.";
                return;
        }

        $total_bayar = $harga_tiket * $berat_koper * 1.05;

        echo "
        
        <p>Nama: $nama</p>
        <p>Alamat: $alamat</p>
        <p>Jenis Penerbangan: $jenis_penerbangan</p>
        <p>Berat Koper: $berat_koper kg</p>
        <p>Harga Tiket: Rp $harga_tiket</p>
        <p>Total Bayar: Rp $total_bayar</p>
        ";
        
    }
    ?>
</body>
</html>