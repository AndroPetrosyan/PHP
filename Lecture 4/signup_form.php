<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">
    <div class="container">
        <form method="post">
            <p>Email</p>
            <input type="text" id="email" name="email"> *
            <br><br>
            <p>User</p>
            <input type="text" id="user" name="user"> *
            <br><br>
            <input type="radio" id="age1" name="age" value="18-25">
            <p>18-25</p>
            <input type="radio" id="age2" name="age" value="26-30">
            <p>26-30</p>
            <br><br>
            <button type="submit" name="submit">Sign Up</button>
            <?php
            if (isset($_POST['submit'])) {
                $email = isset($_POST['email']) ? $_POST['email'] : 'Not given';
                $user = isset($_POST['user']) ? $_POST['user'] : 'Not given';
                $age = isset($_POST['age']) ? $_POST['age'] : 'Not selected';

                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>User:</strong> $user</p>";
                echo "<p><strong>Age Group:</strong> $age</p>";
            }
            ?>
        </form>
        <br>

    </div>
</body>

</html>