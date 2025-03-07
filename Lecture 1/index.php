<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lecture</title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">
    <div style="width: 50%; margin: auto; border: solid; padding: 20px;">
        <h1>Lecture 2</h1>
        <?php

        $students = [
            'Andro' => rand(0, 100),
            'Nino' => rand(0, 100),
            'Giorgi' => rand(0, 100),
            'Mariam' => rand(0, 100),
            'Luka' => rand(0, 100)
        ];

        $sum = 0;
    
        echo "<h2>სტუდენტების ქულები:</h2>";
        foreach ($students as $name => $score) {
            echo "<p>$name: $score</p>";
        }

        foreach ($students as $value) {
            $sum += $value;
        }

        $average = $sum / count($students);
        echo "<h2>საშუალო ქულა: " . round($average, 2) . "</h2>";

        $top_student = array_keys($students, max($students))[0];
        $top_score = max($students);
        echo "<h2>ყველაზე მაღალი ქულა:</h2>";
        echo "<p>$top_student: $top_score</p>";

        echo "<h2>სტუდენტები, რომლებსაც საშუალოზე მაღალი ქულა აქვთ:</h2>";
        foreach ($students as $name => $score) {
            if ($score > $average) {
                echo "<p>$name: $score</p>";
            }
        }
        ?>

    </div>
</body>

</html>
