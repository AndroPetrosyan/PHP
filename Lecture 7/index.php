<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadFile" accept=".txt">
            <br><br>
            <button type="submit" name="up_file">Upload File</button>
        </form>
        <div class="info">
            <?php
            if (isset($_POST['up_file'])) {
                $max_size = 1024 * 1024;
                $file = $_FILES['uploadFile'];
                
                if (pathinfo($file['name'], PATHINFO_EXTENSION) !== "txt") {
                    echo "Only .txt files are allowed.";
                } elseif ($file['size'] > $max_size) {
                    echo "File size is too big!";
                } else {
                    move_uploaded_file($file['tmp_name'], 'storage/' . $file['name']);
                    echo "File " . htmlspecialchars($file['name']) . " uploaded successfully.";
                }
            }

            $path = 'storage/';
            if (is_dir($path)) {
                $files = array_diff(scandir($path), ['.', '..']);
                if (!empty($files)) {
                    echo "<h3>Uploaded Files:</h3>";
                    foreach ($files as $file) {
                        echo htmlspecialchars($file) . "<br>";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
