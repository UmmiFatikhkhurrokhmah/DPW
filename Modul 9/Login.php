<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .error {
            color: red;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
<?php
// Fungsi untuk filter pembacaan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = "";
$nameErr = $emailErr = "";

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $nameErr = "masukkan username";
        } else {
            $name = bersihkan_input($_POST["u"]);
        }

        if (empty($_POST["p"])) {
            $emailErr = "masukkan password";
        } else {
            $email = bersihkan_input($_POST["p"]);
        }

        // Jika tidak ada error, proses login
        if (empty($nameErr) && empty($emailErr)) {
            // Contoh validasi sederhana
            if ($name === "admin" && $email === "admin123") {
                echo "<p style='color:green;'>Login berhasil! Selamat datang, " . $name . "</p>";
            } else {
                throw new Exception("Username atau password salah!");
            }
        }
    }
} catch (Exception $e) {
    echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="u">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Password: <input type="password" name="p">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>