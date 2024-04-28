
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
        .kuning {
            background-color: kuning;
        }
        .biru {
            background-color: biru;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="kuning">NPM</td>
            <td class="biru">Name</td>
            <td class="kuning">NPM</td>
            <td class="biru">Name</td>
            <td class="kuning">NPM</td>
            <td class="biru">Name</td>
        </tr>
        <?php
        $mhs = array(
            array('12345', 'Dita karang'),
            array('23456', 'kimberley salim'),
            array('34567', 'joe taslim'),
            array('45678', 'joe salim'),
            array('56789', 'iko uwis'),
            array('12345', 'kim minji'),
            array('23456', 'jeane'),
            array('34567', 'grace'),
            array('45678', 'Bob budi'),
            array('56789', 'Sarah'),
            array('12345', 'sigit rendang'),
            array('23456', 'farhan kebab'),
            array('34567', 'andri finance'),
            
        );

        foreach ($mhs as $key => $mhss) {
            echo "<tr>";
            for ($i = 0; $i < count($mhss); $i++) {
                if ($i % 2 == 0) {
                    echo "<td class='kuning'>" . $mhss[$i] . "</td>";
                } else {
                    echo "<td class='biru'>" . $mhss[$i] . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>