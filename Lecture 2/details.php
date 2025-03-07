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
    <div class="getContainer">
        <?php
        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $gross = $_GET['gross'];
        $taxPercentage = $_GET['tax'];

        $taxAmount = ($taxPercentage / 100) * $gross;
        $net = $gross - $taxAmount;

        echo "<p>Name: $name</p>";
        echo "<p>Surname: $surname</p>";
        echo "<p>Gross Income: $gross GEL</p>";
        echo "<p>Tax Percentage: $taxPercentage%</p>";
        echo "<p><strong>Net Income: $net GEL</strong></p>";
        ?>
    </div>
</body>

</html>
