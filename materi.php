<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Gerak Harmonik Sederhana</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="page-header">
        <h1 class="fade-in">📖 Gerak Harmonik Sederhana</h1>
    </header>

    <main class="content">
        <section class="materi fade-in-scroll">
            <h2>Pendahuluan</h2>
            <p>Gerak harmonik sederhana adalah kajian penting dalam berbagai bidang seperti teknik, elektronika, dan geofisika. Contohnya dapat ditemukan dalam sinyal listrik, getaran mesin, dan gelombang seismik.</p>

            <h2>Gelombang Seismik</h2>
            <img src="assets/img/gelombang_seismik.jpg" alt="Gelombang Seismik" class="slide-in">
            <p>Gelombang seismik adalah contoh nyata gerak osilasi yang sering kali terganggu oleh gelombang noise.</p>

            <h2>Osilasi Destruktif</h2>
            <img src="assets/img/tacoma_bridge.jpg" alt="Jembatan Tacoma Narrows" class="slide-in">
            <p>Contoh osilasi destruktif adalah runtuhnya Jembatan Tacoma Narrows pada tahun 1940 akibat resonansi.</p>

            <h2>Hukum Hooke dan Gaya Pemulih</h2>
            <p>Dalam sistem pegas, gaya pemulih dirumuskan sebagai:</p>
            <div class="formula zoom-in">F = -k x</div>
            <p>Dimana:</p>
            <ul>
                <li><strong>k</strong> = konstanta pegas</li>
                <li><strong>x</strong> = simpangan benda dari titik keseimbangan</li>
            </ul>
            <img src="assets/img/sistem_pegas.png" alt="Sistem Pegas" class="slide-in">

            <h2>Persamaan Gerak Harmonik</h2>
            <ul>
                <li><strong>Posisi:</strong> <span class="formula zoom-in">x(t) = A cos(ωt + φ)</span></li>
                <li><strong>Kecepatan:</strong> <span class="formula zoom-in">v(t) = -Aω sin(ωt + φ)</span></li>
                <li><strong>Percepatan:</strong> <span class="formula zoom-in">a(t) = -Aω² cos(ωt + φ)</span></li>
                <li><strong>Periode:</strong> <span class="formula zoom-in">T = 2π / ω</span></li>
                <li><strong>Frekuensi:</strong> <span class="formula zoom-in">f = 1 / T</span></li>
            </ul>

            <h2>Energi dalam Gerak Harmonik</h2>
            <p>Energi mekanik dalam GHS adalah:</p>
            <div class="formula zoom-in">EM = EK + EP = Tetap</div>
            <ul>
                <li>Energi kinetik: <span class="formula zoom-in">EK = 1/2 m v²</span></li>
                <li>Energi potensial: <span class="formula zoom-in">EP = 1/2 k x²</span></li>
            </ul>
            <img src="assets/img/energi_ghs.png" alt="Energi Gerak Harmonik" class="slide-in">

            <h2>Persamaan pada Bandul Sederhana</h2>
            <img src="assets/img/bandul.png" alt="Gerak Harmonik pada Bandul" class="slide-in">
            <p>Gerak harmonik sederhana pada bandul mengikuti persamaan:</p>
            <div class="formula zoom-in">T = 2π √(L/g)</div>
            <p>Dimana:</p>
            <ul>
                <li><strong>L</strong> = panjang tali bandul</li>
                <li><strong>g</strong> = percepatan gravitasi</li>
            </ul>
        </section>

        <div class="button-container fade-in-scroll">
            <a href="index.html" class="back-button">⬅ Kembali</a>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="assets/js/script.js"></script>

</body>
</html>
