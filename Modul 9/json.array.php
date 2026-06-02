<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array ke JSON</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px; margin: 40px auto; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th, td { border: 1px solid #ccc; padding: 8px 14px; text-align: left; }
        th { background: #1565C0; color: white; }
        tr:nth-child(even) { background: #f5f5f5; }
        pre {
            background: #263238;
            color: #80cbc4;
            padding: 20px;
            border-radius: 8px;
            font-size: 0.9em;
            overflow-x: auto;
        }
        h3 { color: #1565C0; }
    </style>
</head>
<body>
    <h2>Array Nama &amp; Umur → JSON</h2>

<?php
$dataMahasiswa = [
    ["nama" => "Abelgis",                "umur" => 2019],
    ["nama" => "Mayra Ruhandini",        "umur" => 20],
    ["nama" => "Mendysia Anggita",       "umur" => 20],
    ["nama" => "Ummi Fatikhkhurrokhmah", "umur" => 19],
    ["nama" => "Ayla Ramadani",          "umur" => 20],
    ["nama" => "Ayu Dhia Kansa",         "umur" => 19],
    ["nama" => "Dinda Aulia",            "umur" => 19],
    ["nama" => "Bintang Nur Aini",       "umur" => 20],
    ["nama" => "Reva Adinta",            "umur" => 20],
    ["nama" => "Arinda Mardianti",       "umur" => 20],
    ["nama" => "Michele Milanello",      "umur" => 19],
    ["nama" => "Shafira Rahma",          "umur" => 19],
    ["nama" => "Saputra abdul",          "umur" => 20],
    ["nama" => "Ferdinan Andreas",       "umur" => 20],
    ["nama" => "Adrian yuanto",          "umur" => 20],
    ["nama" => "Fadhiel fauzi",          "umur" => 20],
];

// Konversi array ke JSON
$jsonData = json_encode($dataMahasiswa, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>

    <h3>Tabel Data Mahasiswa (Array PHP)</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <?php foreach ($dataMahasiswa as $i => $mhs): ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo htmlspecialchars($mhs["nama"]); ?></td>
            <td><?php echo $mhs["umur"]; ?> tahun</td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Hasil Konversi ke JSON</h3>
    <pre><?php echo htmlspecialchars($jsonData); ?></pre>

    <h3>Decode JSON kembali ke Array (verifikasi)</h3>
<?php
// Decode JSON kembali ke array
$arrayDecode = json_decode($jsonData, true);
echo "<p>Jumlah data setelah decode: <strong>" . count($arrayDecode) . " mahasiswa</strong></p>";
echo "<p>Contoh data pertama: Nama = <strong>" . $arrayDecode[0]["nama"] . "</strong>, Umur = <strong>" . $arrayDecode[0]["umur"] . "</strong></p>";
?>
</body>
</html>