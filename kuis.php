<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jawaban_benar = array(
        "q1" => "b",
        "q2" => "c",
        "q3" => "d",
        "q4" => "a",
        "q5" => "c",
        "q6" => "b"
    );

    $skor = 0;

    foreach ($jawaban_benar as $key => $value) {
        if (isset($_POST[$key]) && $_POST[$key] == $value) {
            $skor++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Gerak Harmonik Sederhana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1d3557, #457b9d);
            color: #fff;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .page-header {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .content {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 90%;
            margin: 20px auto;
            animation: slideIn 1s ease-in-out;
        }

        .quiz-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            text-align: left;
            animation: fadeIn 1s ease-in-out;
        }

        .quiz-item h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #fff;
        }

        .quiz-item label {
            display: block;
            margin: 5px 0;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        .quiz-item input[type="radio"] {
            margin-right: 10px;
        }

        .quiz-button {
            background: #e63946;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .quiz-button:hover {
            background: #d62828;
        }

        .button-container {
            margin-top: 20px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background: #e63946;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background: #d62828;
        }

        .quiz-result {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .quiz-result h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff;
        }

        .quiz-result p {
            font-size: 16px;
            color: #fff;
        }

        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
    <script type="text/javascript" async
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
</head>
<body>
    <header class="page-header">
        <h1>🎯 Kuis Gerak Harmonik Sederhana</h1>
    </header>

    <main class="content">
        <section class="quiz-container">
            <h2>Jawablah pertanyaan berikut:</h2>

            <form action="kuis.php" method="post">
                <!-- Soal 1 -->
                <div class="quiz-item">
                    <h3>1. Apa yang dimaksud dengan gerak harmonik sederhana?</h3>
                    <label><input type="radio" name="q1" value="a"> a) Gerak lurus beraturan</label>
                    <label><input type="radio" name="q1" value="b"> b) Gerak bolak-balik melalui titik keseimbangan</label>
                    <label><input type="radio" name="q1" value="c"> c) Gerak melingkar</label>
                    <label><input type="radio" name="q1" value="d"> d) Gerak parabola</label>
                </div>

                <!-- Soal 2 -->
                <div class="quiz-item">
                    <h3>2. Rumus periode gerak harmonik sederhana pada bandul adalah?</h3>
                    <label><input type="radio" name="q2" value="a"> a) \( T = 2\pi \sqrt{\frac{k}{m}} \)</label>
                    <label><input type="radio" name="q2" value="b"> b) \( T = \frac{1}{f} \)</label>
                    <label><input type="radio" name="q2" value="c"> c) \( T = 2\pi \sqrt{\frac{L}{g}} \)</label>
                    <label><input type="radio" name="q2" value="d"> d) \( T = 2\pi \sqrt{\frac{m}{k}} \)</label>
                </div>

                <!-- Soal 3 -->
                <div class="quiz-item">
                    <h3>3. Apa yang mempengaruhi frekuensi ayunan bandul?</h3>
                    <label><input type="radio" name="q3" value="a"> a) Massa bandul</label>
                    <label><input type="radio" name="q3" value="b"> b) Amplitudo</label>
                    <label><input type="radio" name="q3" value="c"> c) Warna tali</label>
                    <label><input type="radio" name="q3" value="d"> d) Panjang tali</label>
                </div>

                <!-- Soal 4 -->
                <div class="quiz-item">
                    <h3>4. Energi mekanik dalam gerak harmonik sederhana adalah?</h3>
                    <label><input type="radio" name="q4" value="a"> a) Tetap</label>
                    <label><input type="radio" name="q4" value="b"> b) Bertambah terus</label>
                    <label><input type="radio" name="q4" value="c"> c) Berkurang terus</label>
                    <label><input type="radio" name="q4" value="d"> d) Bergantung pada kecepatan</label>
                </div>

                <!-- Soal 5 -->
                <div class="quiz-item">
                    <h3>5. Jika sebuah bandul memiliki periode 2 detik, berapakah frekuensinya?</h3>
                    <label><input type="radio" name="q5" value="a"> a) 4 Hz</label>
                    <label><input type="radio" name="q5" value="b"> b) 3 Hz</label>
                    <label><input type="radio" name="q5" value="c"> c) 0.5 Hz</label>
                    <label><input type="radio" name="q5" value="d"> d) 2 Hz</label>
                </div>

                <!-- Soal 6 -->
                <div class="quiz-item">
                    <h3>6. Sebuah pegas memiliki konstanta 200 N/m dan ditarik sejauh 0.1 m. Berapakah energi potensialnya?</h3>
                    <label><input type="radio" name="q6" value="a"> a) 1 J</label>
                    <label><input type="radio" name="q6" value="b"> b) 2 J</label>
                    <label><input type="radio" name="q6" value="c"> c) 4 J</label>
                    <label><input type="radio" name="q6" value="d"> d) 0.5 J</label>
                </div>

                <div class="button-container">
                    <input type="submit" value="Kirim Jawaban" class="quiz-button">
                </div>
            </form>

            <?php if (isset($skor)) { ?>
                <div class="quiz-result">
                    <h2>Skor Anda: <?= $skor ?>/6</h2>
                    <p><?= $skor == 6 ? "🎉 Selamat! Anda mendapatkan skor sempurna!" : "Coba lagi untuk mendapatkan skor lebih baik!" ?></p>
                </div>
            <?php } ?>
        </section>

        <div class="button-container">
            <a href="index.html" class="back-button">⬅ Kembali</a>
        </div>
    </main>

    
</body>
</html>