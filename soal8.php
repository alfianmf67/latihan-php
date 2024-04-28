<!DOCTYPE html>
<html>
<head>
    <title>menghitung kepastian</title>
</head>
<body>

    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="amount">Jumlah aksi:</label>
        <input type="number" name="amount" id="amount" required><br><br>
        
        <input type="radio" name="action" value="melangkah" checked> melangkah
        <input type="radio" name="action" value="melompat"> melompat<br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $action = $_POST['action'];
        
        $currentAmount = 0;
        
        while (true) {
            if ($action == 'melangkah') {
                $currentAmount++;
            } else if ($action == 'melompat') {
                $currentAmount ++;
            }
            
            echo "$name : $action - $currentAmount x <br>";
            
            if ($currentAmount == $amount) {
                echo "$name berhenti $action karena lelah menunggu mu tanpa kabar akwokakwokakwok<br>";
                break;
            }
        }
    }
    ?>
</body>
</html>