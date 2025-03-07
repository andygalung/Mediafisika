<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Soal - Gerak Harmonik Sederhana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #333;
            text-align: center;
        }

        /* Header */
        .page-header {
            background: #243B55;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Konten Utama */
        .content {
            width: 90%;
            margin: 20px auto;
            padding: 15px;
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        /* Container Soal */
        .soal-container {
            margin-top: 20px;
        }

        .soal-container h2 {
            color: #243B55;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        .soal-container p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 40px;
            text-align: center;
        }

        /* Item Soal */
        .soal-item {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .soal-item h3 {
            color: #243B55;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .soal-item p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .soal-item .jawaban {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            border-left: 4px solid #FFD700;
        }

        .soal-item .jawaban strong {
            color: #243B55;
            font-size: 10px;
        }

        .soal-item .jawaban p {
            margin-bottom: 10px;
            font-size: 10px;
            color: #555;
        }

        .small-math {
            font-size: 0.6em; /* Ukuran font lebih kecil */
        }

        .small-math mjx-container {
            font-size: 0.8em !important; /* Target elemen MathJax */
        }

        /* Animasi Fade-in & Slide-in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Efek Scroll Animasi */
        .fade-in-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .slide-in {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Tombol Kembali */
        .button-container {
            text-align: center;
            margin: 20px 0;
        }

        .back-button {
            display: inline-block;
            padding: 12px 20px;
            background: #FFD700;
            color: #141E30;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-button:hover {
            background: #FFC107;
            transform: scale(1.1);
        }

        /* Footer */
        footer {
            margin-top: 30px;
            padding: 15px;
            background: #141E30;
            color: white;
            font-size: 14px;
            text-align: center;
        }

        /* Media Queries untuk Responsivitas */
        @media (min-width: 768px) and (max-width: 1024px) {
            .content {
                width: 80%;
                padding: 20px;
            }

            .soal-container h2 {
                font-size: 26px;
            }

            .soal-item h3 {
                font-size: 22px;
            }

            .soal-item p {
                font-size: 18px;
            }
        }

        @media (min-width: 1025px) {
            .content {
                width: 70%;
                padding: 25px;
            }

            .soal-container h2 {
                font-size: 28px;
            }

            .soal-item h3 {
                font-size: 24px;
            }

            .soal-item p {
                font-size: 20px;
            }
        }

        @media (max-width: 767px) {
            .page-header {
                font-size: 20px;
                padding: 15px;
            }

            .content {
                width: 95%;
                padding: 10px;
            }

            .soal-container h2 {
                font-size: 22px;
            }

            .soal-item h3 {
                font-size: 18px;
            }

            .soal-item p {
                font-size: 14px;
            }

            .back-button {
                font-size: 16px;
                padding: 10px 15px;
            }
        }
    </style>
    <script type="text/javascript" async
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
</head>
<body>
    <header class="page-header">
        <h1>📝 Contoh Soal Gerak Harmonik Sederhana</h1>
    </header>

    <main class="content">
        <section class="soal-container fade-in-scroll">
            <h2>Latihan Soal</h2>
            <p>Berikut adalah beberapa contoh soal yang dapat membantu pemahaman tentang Gerak Harmonik Sederhana.</p>

            <!-- Soal 1 -->
            <div class="soal-item slide-in">
                <h3>Soal 1</h3>
                <p>Sebuah pegas memiliki konstanta pegas \( k = 100 \, N/m \) dan massa beban \( m = 2 \, kg \). Tentukan periode osilasi sistem ini.</p>
                <div class="jawaban">
                    <strong>Pembahasan:</strong> 
                    <p>Periode osilasi (\( T \)) dapat dihitung menggunakan rumus:</p>
                    $$ T = 2\pi \sqrt{\frac{m}{k}} $$
                    <p>Substitusi nilai \( m = 2 \, kg \) dan \( k = 100 \, N/m \):</p>
                    
                    <div class="small-math">
                        $$ T = 2\pi \sqrt{\frac{2}{100}} = 2\pi \sqrt{0.02} \approx 0.89 \, \text{detik} $$
                    </div>
                </div>
            </div>

            <!-- Soal 2 -->
            <div class="soal-item slide-in">
                <h3>Soal 2</h3>
                <p>Sebuah bandul sederhana memiliki panjang tali \( L = 0.5 \, m \). Hitung periode ayunan jika percepatan gravitasi \( g = 9.8 \, m/s^2 \).</p>
                <div class="jawaban">
                    <strong>Pembahasan:</strong> 
                    <p>Periode ayunan (\( T \)) dapat dihitung menggunakan rumus:</p>
                    $$ T = 2\pi \sqrt{\frac{L}{g}} $$
                    <p>Substitusi nilai \( L = 0.5 \, m \) dan \( g = 9.8 \, m/s^2 \):</p>
                   
                    <div class="small-math">
                      $$ T = 2\pi \sqrt{\frac{0.5}{9.8}} \approx 1.42 \, \text{detik} $$
                    </div>
                </div>
            </div>

            <!-- Soal 3 -->
            <div class="soal-item slide-in">
                <h3>Soal 3</h3>
                <p>Sebuah benda melakukan gerak harmonik sederhana dengan amplitudo 5 cm dan frekuensi 2 Hz. Tentukan kecepatan maksimumnya.</p>
                <div class="jawaban">
                    <strong>Pembahasan:</strong> 
                    <p>Kecepatan maksimum (\( v_{max} \)) dapat dihitung menggunakan rumus:</p>
                    $$ v_{max} = A \omega = A (2\pi f) $$
                    <p>Substitusi nilai \( A = 5 \, cm = 0.05 \, m \) dan \( f = 2 \, Hz \):</p>
                    
                    <div class="small-math">
                    $$ v_{max} = 0.05 \times (2\pi \times 2) = 0.05 \times 4\pi \approx 0.63 \, \text{m/s} $$
                    </div>
                </div>
            </div>

            <!-- Soal 4 -->
            <div class="soal-item slide-in">
                <h3>Soal 4</h3>
                <p>Jika sebuah pegas memiliki energi potensial maksimum 5 Joule dan konstanta pegasnya 200 N/m, berapa amplitudo osilasinya?</p>
                <div class="jawaban">
                    <strong>Pembahasan:</strong> 
                    <p>Amplitudo (\( A \)) dapat dihitung menggunakan rumus:</p>
                    <div class="small-math">
                        $$ A = \sqrt{\frac{2 \times 5}{200}} = \sqrt{\frac{10}{200}} = \sqrt{0.05} \approx 0.22 \, \text{m} $$
                    </div>
                </div>
            </div>
        </section>

        <div class="button-container fade-in-scroll">
            <a href="index.html" class="back-button">⬅ Kembali</a>
        </div>

        
    </main>

    <?php include 'footer.php'; ?>

    <script>
        // Fungsi untuk menangani animasi scroll
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in-scroll, .slide-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                if (elementTop < windowHeight - 100) {
                    element.classList.add('visible');
                }
            });
        }

        // Jalankan fungsi saat halaman dimuat dan di-scroll
        window.addEventListener('scroll', handleScrollAnimations);
        window.addEventListener('load', handleScrollAnimations);
    </script>
</body>
</html>