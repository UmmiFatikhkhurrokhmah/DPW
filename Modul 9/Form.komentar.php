<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type="text"], input[type="email"], textarea {
            width: 300px; padding: 6px; margin-top: 4px; border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"], input[type="reset"] {
            margin-top: 10px; padding: 6px 16px; cursor: pointer;
        }
        .hasil { background: #f0f8e8; padding: 12px; border-radius: 6px;
                 margin-top: 20px; max-width: 400px; }
    </style>
</head>
<body>
    <h2>Form Komentar</h2>

    <?php
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name    = $email = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name    = bersihkan_input($_POST["name"]);
        $email   = bersihkan_input($_POST["email"]);
        $comment = bersihkan_input($_POST["comment"]);

        echo "<div class='hasil'>";
        echo "Nama :" . $name . "<br>";
        echo "Email :" . $email . "<br>";
        echo "Komentar :" . $comment . "<br>";
        echo "</div>";
        echo "<hr>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Nama:</label>
        <input type="text" name="name"><br>
        <label>E-mail:</label>
        <input type="email" name="email"><br>
        <label>Komentar:</label>
        <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>

    <p><small><i>
        
    </i></small></p>
</body>
</html>