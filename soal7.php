<!DOCTYPE html>
<html>
<head>
    <title>Amount Loop Program</title>
</head>
<body>
    <h2>Enter Name, Amount, and Action:</h2>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Amount: <input type="number" name="amount"><br><br>
        Action:
        <input type="radio" name="action" value="step"> Step
        <input type="radio" name="action" value="jump"> Jump<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $action = $_POST['action'];

        echo "<h2>Output:</h2>";

        if ($action == 'step') {
            for ($i = 1; $i <= $amount; $i++) {
                echo "$name - Step $i<br>";
            }
        } elseif ($action == 'jump') {
            $i = 1;
            while ($i <= $amount) {
                echo "$name - Jump $i<br>";
                $i += 2; // Jump by 2
            }
        }
    }
    ?>
</body>
</html>