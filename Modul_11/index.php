<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            text-align: center;
            padding: 40px;
        }
        h1 {
            color: #fff;
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 0 0 20px rgba(83, 198, 255, 0.5);
        }
        .subtitle {
            color: #a0b4c8;
            margin-bottom: 50px;
            font-size: 1.1em;
        }
        .cards {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 16px;
            padding: 35px 40px;
            width: 220px;
            text-decoration: none;
            color: #fff;
            transition: all 0.3s ease;
        }
        .card:hover {
            background: rgba(255,255,255,0.18);
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        .card .icon { font-size: 3em; margin-bottom: 15px; }
        .card h2 { font-size: 1.2em; margin-bottom: 8px; }
        .card p { font-size: 0.85em; color: #a0b4c8; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Teknologi Informasi Akademik</h1>
        <p class="subtitle">Praktikum 11 - PHP Database CRUD</p>
        <div class="cards">
            <a href="viewdosen.php" class="card">
                <div class="icon">👨‍🏫</div>
                <h2>Data Dosen</h2>
                <p>Kelola data dosen</p>
            </a>
            <a href="viewmahasiswa.php" class="card">
                <div class="icon">🎓</div>
                <h2>Data Mahasiswa</h2>
                <p>Kelola data mahasiswa</p>
            </a>
            <a href="viewmatakuliah.php" class="card">
                <div class="icon">📖</div>
                <h2>Data Matakuliah</h2>
                <p>Kelola data matakuliah</p>
            </a>
        </div>
    </div>
</body>
</html>