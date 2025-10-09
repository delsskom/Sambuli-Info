<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Kelurahan Sambuli</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
            min-height: 100vh;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .header-section {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .header-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 5px 15px rgba(0,0,0,0.3);
            letter-spacing: 1px;
        }

        .header-section p { font-size: 1.2rem; opacity: 0.9; font-weight: 300; }

        .table-section {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.3);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }

        .table-section:hover { transform: translateY(-5px); box-shadow: 0 30px 70px rgba(0,0,0,0.4); }

        .table-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2C1A47;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid #2C1A47;
            position: relative;
        }

        .table-title::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 10px;
        }

        .table-wrapper { overflow-x: auto; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }

        .potensi-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            font-size: 0.95rem;
        }

        .potensi-table thead {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .potensi-table thead th {
            padding: 20px 15px;
            text-align: center;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-right: 1px solid rgba(255,255,255,0.2);
        }

        .potensi-table thead th:last-child { border-right: none; }

        .potensi-table tbody tr { transition: all 0.3s ease; border-bottom: 1px solid #f0f0f0; }

        .potensi-table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102,126,234,0.1), rgba(118,75,162,0.1));
            transform: scale(1.01);
            box-shadow: 0 5px 15px rgba(102,126,234,0.2);
        }

        .potensi-table tbody td {
            padding: 18px 15px;
            text-align: left;
            vertical-align: top;
            border-right: 1px solid #f0f0f0;
            line-height: 1.6;
        }

        .potensi-table tbody td:last-child { border-right: none; }
        .potensi-table tbody td:first-child {
            text-align: center;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(102,126,234,0.1), rgba(118,75,162,0.1));
            color: #667eea;
        }

        .map-section {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.3);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }

        .map-section:hover { transform: translateY(-5px); box-shadow: 0 30px 70px rgba(0,0,0,0.4); }

        .map-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2C1A47;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid #2C1A47;
            position: relative;
        }

        .map-title::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 10px;
        }

        .map-container { border-radius: 15px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.2); transition: all 0.3s ease; }
        .map-container:hover { transform: scale(1.02); box-shadow: 0 20px 50px rgba(0,0,0,0.3); }
        .map-container img { width: 100%; height: auto; display: block; max-height: 600px; object-fit: contain; }

        .back-button {
            position: fixed; top: 30px; left: 30px;
            background: rgba(255,255,255,0.9);
            color: #2C1A47;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-size: 1rem; font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            z-index: 1000;
        }
        .back-button:hover { background: white; transform: translateY(-2px) scale(1.05); box-shadow: 0 8px 25px rgba(0,0,0,0.3); }

        .floating-element { position: absolute; animation: floating 6s ease-in-out infinite; opacity: 0.1; font-size: 2rem; color: white; }
        .floating-element:nth-child(1){ top: 10%; left: 5%; animation-delay: 0s; }
        .floating-element:nth-child(2){ top: 70%; right: 10%; animation-delay: 2s; }
        .floating-element:nth-child(3){ bottom: 15%; left: 15%; animation-delay: 4s; }

        @keyframes floating { 0%,100%{transform: translateY(0) rotate(0deg);} 50%{transform: translateY(-20px) rotate(180deg);} }

        .animate-on-scroll { opacity: 0; transform: translateY(30px); transition: all 0.6s ease; }
        .animate-on-scroll.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>

    <a href="#" class="back-button" onclick="history.back()">← Kembali</a>

    <div class="main-container">
        <div class="header-section animate-on-scroll">
            <h1>Potensi Kelurahan Sambuli</h1>
            <p>Kekayaan Potensi Sambuli yang Menawan</p>
            
        </div><!-- Tambahkan di atas script existing atau di bawah semua tabel -->
<div style="text-align:right; margin-bottom:20px;">
    <input type="text" id="searchInput" placeholder="🔍 Cari RT..." style="padding:12px; border:2px solid #764ba2; border-radius:12px; width:250px; font-size:15px;">
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const searchBox = document.getElementById("searchInput");

    function runSearch() {
        const query = searchBox.value.trim().toLowerCase();

        // Filter semua tabel .potensi-table
        document.querySelectorAll('.potensi-table').forEach(table => {
            table.querySelectorAll('tbody tr').forEach(row => {
                const rtCell = row.cells[1].textContent.toLowerCase(); // kolom RT selalu index ke-1
                if (rtCell.includes(query)) {
                    row.style.display = '';
                    row.style.backgroundColor = '#fffa9c';
                    row.style.borderRadius = '6px';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }

    // Event saat mengetik
    searchBox.addEventListener('input', runSearch);

    // Event saat tekan Enter
    searchBox.addEventListener('keydown', e => {
        if (e.key === 'Enter') {
            e.preventDefault();
            runSearch();
        }
    });
});
</script>

        
        <div class="table-section animate-on-scroll">
            <h2 class="table-title">📊 Potensi Alam Kelurahan Sambuli</h2>
            <div class="table-wrapper">
                <table class="potensi-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>RT</th>
                            <th>Jumlah KK</th>
                            <th>Perkebunan</th>
                            <th>Peternakan</th>
                            <th>Perikanan</th>
                            <th>Sumber Air</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($potensis as $index => $potensi)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $potensi->rt }}</td>
                                <td>{{ $potensi->jumlah_kk ?? '-' }}</td>
                                <td>{{ $potensi->perkebunan ?? '-' }}</td>
                                <td>{{ $potensi->peternakan ?? '-' }}</td>
                                <td>{{ $potensi->perikanan ?? '-' }}</td>
                                <td>{{ $potensi->sumber_air ?? '-' }}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

       <div class="table-section animate-on-scroll">
    <h2 class="table-title">🏛️ Potensi Sarana dan Prasarana</h2>
    <div class="table-wrapper">
        <table class="potensi-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>RT</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($saranas as $index => $sarana)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $sarana->potensi_id }}</td>
                        <td>{{ $sarana->kategori }}</td>
                        <td>{{ $sarana->jenis }}</td>
                        <td>{{ $sarana->jumlah ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="table-section animate-on-scroll">
    <h2 class="table-title">📊 Perbandingan Potensi Alam per RT (Persentase)</h2>

    <div style="text-align:center; margin-bottom:20px;">
        <label for="kategoriSelect" style="font-weight:600; margin-right:10px;">Pilih Kategori:</label>
        <select id="kategoriSelect" style="padding:8px 12px; border:2px solid #764ba2; border-radius:8px;">
            <option value="jumlah_kk">Jumlah KK</option>
            <option value="perkebunan">Perkebunan</option>
            <option value="peternakan">Peternakan</option>
            <option value="perikanan">Perikanan</option>
            <option value="sumber_air">Sumber Air</option>
        </select>
    </div>

    <div class="table-wrapper" style="text-align:center;">
        <!-- Batasi ukuran canvas agar proporsional -->
        <canvas id="potensiPieChart" style="max-width:600px; max-height:400px; margin:0 auto;"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const potensiData = [
        { rt: 'RT 1', jumlah_kk: 104, perkebunan: 0, peternakan: 1, perikanan: 2, sumber_air: 1 },
        { rt: 'RT 2', jumlah_kk: 62, perkebunan: 2, peternakan: 0, perikanan: 0, sumber_air: 3 },
        { rt: 'RT 3', jumlah_kk: 72, perkebunan: 3, peternakan: 4, perikanan: 1, sumber_air: 2 },
        { rt: 'RT 4', jumlah_kk: 60, perkebunan: 3, peternakan: 1, perikanan: 0, sumber_air: 2 },
        { rt: 'RT 5', jumlah_kk: 60, perkebunan: 6, peternakan: 3, perikanan: 0, sumber_air: 2 },
        { rt: 'RT 6', jumlah_kk: 92, perkebunan: 0, peternakan: 1, perikanan: 0, sumber_air: 1 },
        { rt: 'RT 7', jumlah_kk: 68, perkebunan: 1, peternakan: 1, perikanan: 2, sumber_air: 2 }
    ];

    const ctx = document.getElementById('potensiPieChart').getContext('2d');
    const colors = ['#FF6384','#36A2EB','#FFCE56','#4BC0C0','#9966FF','#FF9F40','#C9CBCF'];

    let potensiChart = null;

    function updateChart(kategori) {
        const labels = potensiData.map(d => d.rt);
        const dataValues = potensiData.map(d => d[kategori]);
        const total = dataValues.reduce((a,b) => a + b, 0);

        if (potensiChart) potensiChart.destroy();

        potensiChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: kategori,
                    data: dataValues,
                    backgroundColor: colors,
                    borderColor: '#fff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // Biarkan tinggi dan lebar diatur manual
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = context.raw;
                                const percentage = total ? ((value / total) * 100).toFixed(1) : 0;
                                return `${context.label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    }

    updateChart('jumlah_kk');

    document.getElementById('kategoriSelect').addEventListener('change', function() {
        updateChart(this.value);
    });
</script>

<div class="table-section animate-on-scroll">
    <h2 class="table-title">📊 Perbandingan Potensi Sarana & Prasarana per RT (Persentase)</h2>

    <div style="text-align:center; margin-bottom:20px;">
        <label for="kategoriSaranaSelect" style="font-weight:600; margin-right:10px;">Pilih Kategori:</label>
        <select id="kategoriSaranaSelect" style="padding:8px 12px; border:2px solid #764ba2; border-radius:8px;">
            <option value="Rambu jalan">Rambu jalan</option>
            <option value="Sekolah">Sekolah</option>
            <option value="Masjid">Masjid</option>
            <option value="Lampu jalan">Lampu jalan</option>
            <option value="Jembatan">Jembatan</option>
        </select>
    </div>

    <div class="table-wrapper" style="text-align:center;">
        <!-- Batasi ukuran canvas agar proporsional -->
        <canvas id="saranaPieChart" style="max-width:600px; max-height:400px; margin:0 auto;"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const saranaData = [
        { rt: 'RT 1', 'Rambu jalan': 3, 'Sekolah': 1, 'Masjid': 0, 'Lampu jalan': 4 },
        { rt: 'RT 2', 'Rambu jalan': 1, 'Sekolah': 0, 'Masjid': 1, 'Lampu jalan': 2 },
        { rt: 'RT 3', 'Rambu jalan': 4, 'Sekolah': 0, 'Masjid': 0, 'Lampu jalan': 0 },
        { rt: 'RT 4', 'Rambu jalan': 0, 'Sekolah': 1, 'Masjid': 0, 'Lampu jalan': 6 },
        { rt: 'RT 5', 'Rambu jalan': 0, 'Sekolah': 0, 'Masjid': 0, 'Lampu jalan': 8 },
        { rt: 'RT 6', 'Rambu jalan': 1, 'Sekolah': 0, 'Masjid': 1, 'Lampu jalan': 0 },
        { rt: 'RT 7', 'Rambu jalan': 3, 'Sekolah': 0, 'Masjid': 1, 'Jembatan': 1, 'Lampu jalan': 0 }
    ];

    const ctxSarana = document.getElementById('saranaPieChart').getContext('2d');
const colorsSarana = ['#FF6384','#36A2EB','#FFCE56','#4BC0C0','#9966FF','#FF9F40','#C9CBCF','#8BFF66'];

let saranaChart = null;

function updateSaranaChart(kategori) {
    const labels = saranaData.map(d => d.rt);
    const dataValues = saranaData.map(d => d[kategori] || 0);
    const total = dataValues.reduce((a,b) => a + b, 0);

    if (saranaChart) saranaChart.destroy();

    saranaChart = new Chart(ctxSarana, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: kategori,
                data: dataValues,
                backgroundColor: colorsSarana,
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.raw;
                            const percentage = total ? ((value / total) * 100).toFixed(1) : 0;
                            return `${context.label}: ${value} (${percentage}%)`;
                        }
                    }
                }
            }
        }
    });
}

// Inisialisasi chart awal
updateSaranaChart('Rambu jalan');

document.getElementById('kategoriSaranaSelect').addEventListener('change', function() {
    updateSaranaChart(this.value);
});

</script>

  
  ```html
<div class="map-section animate-on-scroll">
    <h2 class="map-title">🗺️ Peta Potensi Alam Kelurahan Sambuli</h2>
    <div class="map-container">
        <img src="{{ asset('images/gambar-potensi.jpg') }}" alt="Peta Potensi Alam Kelurahan Sambuli">
    </div>
</div>

<div class="map-section animate-on-scroll">
    <h2 class="map-title">🗺️ Peta Potensi Sarana & Prasarana Kelurahan Sambuli</h2>
    <div class="map-container">
        <img src="{{ asset('images/SaranadanPrasarana.jpg') }}" alt="Peta Potensi Sarana & Prasarana Kelurahan Sambuli">
    </div>
</div>

<script>
    const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    const tableRows = document.querySelectorAll('.potensi-table tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function () {
            this.style.transform = 'scale(1.02)';
        });
        row.addEventListener('mouseleave', function () {
            this.style.transform = 'scale(1)';
        });
    });

    const floatingElements = document.querySelectorAll('.floating-element');
    floatingElements.forEach((element, index) => {
        element.style.animationDelay = `${index * 2}s`;
        element.style.animationDuration = `${6 + index}s`;
    });
</script>
```
