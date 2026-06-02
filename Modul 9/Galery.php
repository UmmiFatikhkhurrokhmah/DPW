<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 20px;
        }
        h2 { text-align: center; margin-bottom: 20px; }
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }
        .galeri-item {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            overflow: hidden;
            width: 200px;
        }
        .galeri-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            display: block;
        }
        .galeri-item p {
            text-align: center;
            font-size: 0.85em;
            padding: 6px;
            margin: 0;
            word-break: break-all;
            color: #333;
        }
        .kosong {
            text-align: center;
            color: #888;
            font-style: italic;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <h2>Galeri Gambar</h2>
    <div class="galeri">
    <?php
    $fileList = glob(pattern: 'gambar/*');
    $ada = false;
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            // Hanya tampilkan file gambar
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $ada = true;
                $namaFile = basename($filename);
                echo '<div class="galeri-item">';
                echo '<img src="' . htmlspecialchars($filename) . '" alt="' . htmlspecialchars($namaFile) . '">';
                echo '<p>' . htmlspecialchars($namaFile) . '</p>';
                echo '</div>';
            }
        }
    }
    if (!$ada) {
        echo '<p class="kosong">Belum ada gambar di folder galeri. Upload gambar terlebih dahulu.</p>';
    }
    ?>
    </div>
</body>
</html>