<?php
session_start();
include 'koneksi.php';
include 'header.php';

// Filter variables
 $tahun_filter = isset($_GET['tahun']) ? $_GET['tahun'] : '';
 $metode_filter = isset($_GET['metode']) ? $_GET['metode'] : '';

// Build query
 $query = "SELECT * FROM penelitian WHERE 1=1";
if($tahun_filter) $query .= " AND tahun = '$tahun_filter'";
if($metode_filter) $query .= " AND metode = '$metode_filter'";
 $query .= " ORDER BY tahun DESC";

 $result = mysqli_query($koneksi, $query);

// Get unique years and methods for filters
 $years = mysqli_query($koneksi, "SELECT DISTINCT tahun FROM penelitian ORDER BY tahun DESC");
 $methods = mysqli_query($koneksi, "SELECT DISTINCT metode FROM penelitian");
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Portal Penelitian</h2>
        
        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-md-6">
                <select class="form-control-custom" id="tahunFilter" onchange="filterPenelitian()">
                    <option value="">Semua Tahun</option>
                    <?php while($year = mysqli_fetch_assoc($years)) { ?>
                    <option value="<?php echo $year['tahun']; ?>" <?php echo $tahun_filter == $year['tahun'] ? 'selected' : ''; ?>>
                        <?php echo $year['tahun']; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control-custom" id="metodeFilter" onchange="filterPenelitian()">
                    <option value="">Semua Metode</option>
                    <?php while($method = mysqli_fetch_assoc($methods)) { ?>
                    <option value="<?php echo $method['metode']; ?>" <?php echo $metode_filter == $method['metode'] ? 'selected' : ''; ?>>
                        <?php echo $method['metode']; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <!-- Research Table -->
        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>Judul Penelitian</th>
                        <th>Tahun</th>
                        <th>Metode</th>
                        <th>Hasil</th>
                        <th>DOI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['tahun']; ?></td>
                        <td><span class="badge bg-info"><?php echo $row['metode']; ?></span></td>
                        <td><?php echo substr($row['hasil'], 0, 100) . '...'; ?></td>
                        <td>
                            <?php if($row['link_doi']) { ?>
                            <a href="<?php echo $row['link_doi']; ?>" target="_blank" class="btn btn-sm btn-primary">
                                <i class="fas fa-external-link-alt"></i> DOI
                            </a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Chart Section -->
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <div class="card-custom">
                    <h4 class="mb-4">Tren Publikasi Penelitian per Tahun</h4>
                    <canvas id="researchChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Filter function
function filterPenelitian() {
    const tahun = document.getElementById('tahunFilter').value;
    const metode = document.getElementById('metodeFilter').value;
    let url = 'penelitian.php?';
    if(tahun) url += 'tahun=' + tahun + '&';
    if(metode) url += 'metode=' + metode;
    window.location.href = url;
}

// Research Chart
const ctx = document.getElementById('researchChart').getContext('2d');
const researchChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'Jumlah Publikasi',
            data: [45, 52, 48, 65, 72, 58],
            borderColor: '#e91e63',
            backgroundColor: 'rgba(233, 30, 99, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<?php include 'footer.php'; ?>