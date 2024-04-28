<!DOCTYPE html>
<html>
<head>
    <title>menghitung kepastian</title>
</head>
<body>

    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="j_aksi">Jumlah j_aksi:</label>
        <input type="number" name="j_aksi" id="j_aksi" required><br><br>
        
        <input type="radio" name="aksi" value="melangkah" checked> melangkah
        <input type="radio" name="aksi" value="melompat"> melompat<br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $j_aksi = $_POST['j_aksi'];
        $aksi = $_POST['aksi'];
        
        $currentj_aksi = 0;
        
        while (true) {
            if ($aksi == 'melangkah') {
                $currentj_aksi++;
            } else if ($aksi == 'melompat') {
                $currentj_aksi ++;
            }
            
            echo "$name : $aksi - $currentj_aksi x <br>";
            
            if ($currentj_aksi == $j_aksi) {
                echo "$name berhenti $aksi karena lelah menunggu mu tanpa kabar akwokakwokakwok<br>";
                break;
            }
        }
    }
    ?>
</body>
</html>