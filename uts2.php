<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="get">
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operator'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];
        
        switch($operator){
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if($num2 != 0){
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operator";
        }
        
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>