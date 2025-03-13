<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lecture</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">
    <div class="container">
        <form method="get">
            <h1>Enter Numbers</h1>
            <p>Number 1</p>
            <input type="text" name="n1" placeholder="Enter number 1">
            <p>Number 2</p>
            <input type="text" name="n2" placeholder="Enter number 2">
            <p>Number 3</p>
            <input type="text" name="n3" placeholder="Enter number 3">
            <br><br>
            <button type="submit" name="sum">Sum</button>
            <button type="submit" name="mult">Mult</button>
            <br><br>
            <?php
            function sum($a, $b, $c)
            {
                return $a + $b + $c;
            }

            function mult($a, $b, $c)
            {
                return $a * $b * $c;
            }

            function check_data($d)
            {
                return empty($d) ? 0 : $d;
            }

            function check_data1($d)
            {
                return empty($d) ? 1 : $d;
            }

            if (isset($_GET['sum'])) {
                echo "<p>Sum: " . sum(
                    check_data($_GET['n1']),
                    check_data($_GET['n2']),
                    check_data($_GET['n3'])
                ) . "</p>";
            }

            if (isset($_GET['mult'])) {
                echo "<p>Mult: " . mult(
                    check_data1($_GET['n1']),
                    check_data1($_GET['n2']),
                    check_data1($_GET['n3'])
                ) . "</p>";
            }
            ?>


        </form>
    </div>
</body>

</html>