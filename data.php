<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Data & Statistik</h2>
        
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <h4 class="mb-4">Kasus Kanker Payudara Global</h4>
                    <canvas id="globalCasesChart"></canvas>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <h4 class="mb-4">Tingkat Kelangsungan Hidup</h4>
                    <canvas id="survivalRateChart"></canvas>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card-custom">
                    <h4 class="mb-4">Distribusi Usia Pasien</h4>
                    <canvas id="ageDistributionChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Download Section -->
        <div class="text-center">
            <div class="card-custom d-inline-block p-4">
                <h4 class="mb-3">Dataset Lengkap</h4>
                <p class="mb-4">Unduh data statistik lengkap dalam format CSV</p>
                <a href="assets/dataset.csv" class="btn-primary-custom" download>
                    <i class="fas fa-file-csv"></i> Download Dataset
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Global Cases Chart
const ctx1 = document.getElementById('globalCasesChart').getContext('2d');
new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Asia', 'Eropa', 'Amerika Utara', 'Amerika Selatan', 'Afrika', 'Oseania'],
        datasets: [{
            label: 'Kasus Baru (ribu)',
            data: [945, 523, 277, 210, 168, 25],
            backgroundColor: [
                'rgba(233, 30, 99, 0.8)',
                'rgba(233, 30, 99, 0.7)',
                'rgba(233, 30, 99, 0.6)',
                'rgba(233, 30, 99, 0.5)',
                'rgba(233, 30, 99, 0.4)',
                'rgba(233, 30, 99, 0.3)'
            ]
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Survival Rate Chart
const ctx2 = document.getElementById('survivalRateChart').getContext('2d');
new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['5 Tahun', '10 Tahun', '15 Tahun+'],
        datasets: [{
            data: [91, 84, 80],
            backgroundColor: [
                'rgba(233, 30, 99, 0.8)',
                'rgba(233, 30, 99, 0.6)',
                'rgba(233, 30, 99, 0.4)'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});

// Age Distribution Chart
const ctx3 = document.getElementById('ageDistributionChart').getContext('2d');
new Chart(ctx3, {
    type: 'line',
    data: {
        labels: ['<30', '30-39', '40-49', '50-59', '60-69', '70+'],
        datasets: [{
            label: 'Jumlah Kasus',
            data: [5, 15, 25, 30, 20, 5],
            borderColor: '#e91e63',
            backgroundColor: 'rgba(233, 30, 99, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Persentase (%)'
                }
            }
        }
    }
});
</script>

<?php include 'footer.php'; ?>