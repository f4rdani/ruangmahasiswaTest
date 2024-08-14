<style>
.footer-center {
    text-align: center;
}
.footer-center .pagination {
    display: inline-block;
    margin: 0;
    padding: 0;
    list-style: none;
}
</style>

<?php 
// Ambil total jumlah data dari database
$totalData = count($data);
$perPage = 25; // Jumlah item per halaman
$totalPages = ceil($totalData / $perPage); // Total halaman

// Ambil halaman saat ini dari parameter URL, jika tidak ada, default ke 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Tentukan offset (data mulai dari mana)
$offset = ($page - 1) * $perPage;

// Ambil data untuk halaman saat ini
$currentData = array_slice($data, $offset, $perPage);
?>

<div class="main-content app-content">
    <div class="container-fluid">
        <div class="row">
			<header>
				<br>
			<header>
            <div class="col-sm-12 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title fs-20 py-3 ">Arsip Berita Mahasiswa</h4>
                        </div>
                    </div>
                    <div>
                        <?php foreach ($currentData as $im) : ?>
                            <div class="px-3 py-3 border-bottom">
                                <div class="media mt-0">
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-0 fw-medium fs-14">
                                                <?= anchor('mhs_download/' . $im->file_pisik, $im->Announce_title, ['class' => 'announcement-link']) ?>
                                            </h6>
                                            <small class="ms-auto text-end">
                                                <code>Tanggal Update <?= $im->Announce_date ?></code>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer footer-center">
                        <nav>
                            <ul class="pagination">
                                <!-- Tombol Previous -->
                                <?php if ($page > 1) : ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a></li>
                                <?php endif; ?>
                                <!-- Link halaman -->
                                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>
                                <!-- Tombol Next -->
                                <?php if ($page < $totalPages) : ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>">Next</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
