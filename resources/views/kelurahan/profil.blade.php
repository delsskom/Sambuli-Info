<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Kelurahan Sambuli</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e4e8; /* warna background lembut */
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            padding: 25px;
            background-color: #0056b3;
            color: white;
            margin: 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            gap: 30px; /* jarak antar kotak */
            padding: 10px;
        }

        /* Kotak bervolum */
        .card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25); /* shadow lebih tebal */
            border: 1px solid #d1d5da; /* border tipis untuk efek dimensi */
            max-height: 350px; /* tinggi maksimum tiap kotak */
            overflow-y: auto; /* scroll vertikal jika konten melebihi tinggi */
            transition: transform 0.2s, box-shadow 0.2s;
        }

        /* Efek hover untuk terasa "mengambang" */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.35);
        }

        /* Styling heading di tiap kotak */
        .card h2 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 3px solid #0056b3;
            padding-bottom: 8px;
        }

        /* Styling daftar misi */
        .card ul {
            padding-left: 25px;
        }

        .card li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1 class="title">Profil Kelurahan Sambuli</h1>

    <div class="container">

        <!-- Sejarah -->
        <div class="card">
            <h2>Sejarah</h2>
            <p>
                Kelurahan Sambuli didirikan pada tahun 1985. Awalnya merupakan wilayah permukiman kecil dengan penduduk yang sebagian besar bekerja di sektor pertanian dan perikanan. Seiring berjalannya waktu, kelurahan ini berkembang menjadi pusat komunitas dengan fasilitas pendidikan dan kesehatan yang memadai.
            </p>
        </div>

        <!-- Visi & Misi -->
        <div class="card">
            <h2>Visi & Misi</h2>
            <p><strong>Visi:</strong> Menjadi kelurahan yang maju, sejahtera, dan nyaman bagi seluruh warga.</p>
            <p><strong>Misi:</strong></p>
            <ul>
                <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat.</li>
                <li>Memberdayakan potensi ekonomi lokal melalui pertanian, perikanan, dan usaha kecil.</li>
                <li>Menciptakan lingkungan yang bersih, aman, dan nyaman.</li>
                <li>Mendorong partisipasi aktif warga dalam pembangunan kelurahan.</li>
            </ul>
        </div>

        <!-- Struktur Organisasi -->
        <div class="card">
            <h2>Struktur Organisasi</h2>
            <ul>
                <li>Lurah: Bapak/Ibu X</li>
                <li>Sekretaris Kelurahan: Bapak/Ibu Y</li>
                <li>Kepala Seksi Pemerintahan: Bapak/Ibu Z</li>
                <li>Kepala Seksi Kesejahteraan: Bapak/Ibu A</li>
                <li>Kepala Seksi Pelayanan: Bapak/Ibu B</li>
                <li>RT & RW: Terdapat 5 RT dengan Ketua RT masing-masing</li>
            </ul>
        </div>

    </div>
</body>
</html>
