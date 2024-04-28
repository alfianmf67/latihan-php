
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        .yellow {
            background-color: yellow;
        }
        .blue {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="yellow">NPM</td>
            <td class="blue">Name</td>
            <td class="yellow">NPM</td>
            <td class="blue">Name</td>
            <td class="yellow">NPM</td>
            <td class="blue">Name</td>
        </tr>
        <?php
        $students = array(
            array('12345', 'John Doe'),
            array('23456', 'Jane Smith'),
            array('34567', 'Alice Johnson'),
            array('45678', 'Bob Brown'),
            array('56789', 'Sarah Lee'),
            array('12345', 'John Doe'),
            array('23456', 'Jane Smith'),
            array('34567', 'Alice Johnson'),
            array('45678', 'Bob Brown'),
            array('56789', 'Sarah Lee'),
            array('12345', 'John Doe'),
            array('23456', 'Jane Smith'),
            array('34567', 'Alice Johnson'),
            array('45678', 'Bob Brown'),
            array('56789', 'Sarah Lee'),
            array('12345', 'John Doe'),
            array('23456', 'Jane Smith'),
            array('34567', 'Alice Johnson'),
            array('45678', 'Bob Brown'),
            array('56789', 'Sarah Lee')
        );

        foreach ($students as $key => $student) {
            echo "<tr>";
            for ($i = 0; $i < count($student); $i++) {
                if ($i % 2 == 0) {
                    echo "<td class='yellow'>" . $student[$i] . "</td>";
                } else {
                    echo "<td class='blue'>" . $student[$i] . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>