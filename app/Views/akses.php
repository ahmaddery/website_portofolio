<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('images/fevicon.png'); ?>" type="image/gif" />
    <title>Halaman Tidak Diizinkan Untuk Diunduh</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative; /* Menambahkan properti position untuk menampung alert */
        }

        .container {
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #d9534f;
            font-size: 3.5em;
            margin: 0;
            animation: shake 1s ease-in-out infinite;
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            20%, 50%, 80% {
                transform: translateX(-10px);
            }
            40%, 60% {
                transform: translateX(10px);
            }
        }

        p {
            font-size: 1.2em;
            margin: 0;
            margin-top: 20px;
            color: #6c757d;
        }

        .no-download {
            display: none;
        }

        .button-container {
            margin-top: 30px;
        }

        .home-button {
            padding: 15px 30px;
            background-color: #5bc0de;
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .home-button:hover {
            background-color: #46b8da;
        }

        .illustration {
            max-width: 80%;
            height: auto;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Style untuk peringatan (alert) */
        .alert {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #f8d7da;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 100; /* Menyusun alert di atas elemen lain */
            display: flex;
            justify-content: space-between; /* Mengatur jarak di antara ikon dan teks alert */
        }

        .alert-content {
            display: flex;
            align-items: center;
        }

        .alert-icon {
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #721c24; /* Warna merah untuk alert */
            margin-right: 10px;
        }

        .alert-text {
            color: #721c24;
            font-weight: bold;
        }

        .close-icon {
            cursor: pointer;
            font-size: 1.2em;
            color: #721c24;
        }
    </style>
</head>
<body>
    <!-- Alert untuk peringatan -->
    <div class="alert" id="alert">
        <div class="alert-content">
            <span class="alert-icon"></span>
            <span class="alert-text">Peringatan! Konten tidak dapat diunduh.</span>
        </div>
        <span class="close-icon" onclick="closeAlert()">&times;</span>
    </div>

    <div class="container">        
        <img class="illustration" src="<?= base_url('images/akses.png'); ?>" alt="Illustration">
        <h1>Unduhan Dilarang!</h1>
        <p>Maaf, konten di halaman ini tidak dapat diunduh.</p>
        <p class="no-download">(Opsional) Pesan tambahan atau instruksi untuk pengguna.</p>
        <div class="button-container">
            <a class="home-button" href="#" title="Kembali ke Halaman Utama">Home</a>
        </div>
    </div>

    <script>
        function closeAlert() {
            var alertElement = document.getElementById("alert");
            alertElement.style.display = "none";
        }
    </script>
</body>
</html>
