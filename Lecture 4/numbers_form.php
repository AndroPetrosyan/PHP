<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lecture</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <form method="post">
            <h1>Enter Numbers</h1>
            <p>Number 1</p>
            <input type="text" name="n1" placeholder="Enter number 1">
            <p>Number 2</p>
            <input type="text" name="n2" placeholder="Enter number 2">
            <p>Number 3</p>
            <input type="text" name="n3" placeholder="Enter number 3">
            <br><br><br>
            <button type="submit" name="operation" value="sum">Sum</button>
            <button type="submit" name="operation" value="product">Product</button>
            <br><br><br>
            <?php
            function sum($a, $b, $c) {
                return $a + $b + $c;
            }

            function product($a, $b, $c) {
                return $a * $b * $c;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {
                    $num1 = $_POST['n1'];
                    $num2 = $_POST['n2'];
                    $num3 = $_POST['n3'];

                    if (isset($_POST['operation'])) {
                        $operation = $_POST['operation'];

                        if ($operation == 'sum') {
                            echo "<p>Sum: " . sum($num1, $num2, $num3) . "</p>";
                        } elseif ($operation == 'product') {
                            echo "<p>Product: " . product($num1, $num2, $num3) . "</p>";
                        }
                    }
                }
            }
            ?>
        </form>
    </div>
</body>

</html>