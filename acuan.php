<!DOCTYPE html>
<html>
<head>
    <title>j_aksi Loop Program</title>
</head>
<body>
    <h2>Enter Name, j_aksi, and aksi:</h2>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        j_aksi: <input type="number" name="j_aksi"><br><br>
        aksi:
        <input type="radio" name="aksi" value="step"> Step
        <input type="radio" name="aksi" value="jump"> Jump<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $j_aksi = $_POST['j_aksi'];
        $aksi = $_POST['aksi'];

        echo "<h2>Output:</h2>";

        if ($aksi == 'step') {
            for ($i = 1; $i <= $j_aksi; $i++) {
                echo "$name - Step $i<br>";
            }
        } elseif ($aksi == 'jump') {
            $i = 1;
            while ($i <= $j_aksi) {
                echo "$name - Jump $i<br>";
                $i += 2; // Jump by 2
            }
        }
    }
    ?>
</body>
</html>