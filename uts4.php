<!DOCTYPE html>
<html>
<head>
    <title>Object Movement</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="object_name">masukan Object</label>
        <input type="text" name="object_name" id="object_name"><br><br>

        <label for="action_type">aksi:</label><br>
        <input type="radio" name="action_type" value="mundur" id="mundur"> mundur<br>
        <input type="radio" name="action_type" value="maju" id="maju"> maju<br><br>

        <label for="num_steps">Jumlah langkah:</label>
        <input type="number" name="num_steps" id="num_steps"><br><br>

        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $objectName = $_POST['object_name'] ?? '';
        $actionType = $_POST['action_type'] ?? '';
        $numSteps = $_POST['num_steps'] ?? '';

        if (!empty($objectName) && !empty($actionType) && !empty($numSteps)) {

            for ($i = 1; $i <= $numSteps; $i++) {
                if ($i % 3 == 0) {
                    echo "$objectName <b>berhenti <b>$actionType</b></b> pada hitungan ke- $i <br>";
                } else {
                    echo "$objectName $actionType pada hitungan ke- $i <br>";
                }
            }

            echo "<b>~~ hitungan berhenti ~~</b>";
        }
    }
    ?>
</body>
</html>