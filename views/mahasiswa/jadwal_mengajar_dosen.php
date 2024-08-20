<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Jadwal Mengajar Dosen</h5>
            </div>
        </div>
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $current_dosen = '';
                                    $n = 0;

                                    foreach ($pertemuan as $p):
                                        if ($p->kd_dosen !== $current_dosen):
                                            $current_dosen = $p->kd_dosen;
                                            $n++;
                                    ?>
                                    <tr>
                                        <td><?= $n; ?></td>
                                        <td><?= $p->kd_dosen ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary lihat-jadwal" 
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#jadwalModal"
                                                    data-kd_dosen="<?= $p->kd_dosen; ?>">
                                                Lihat Jadwal
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endif; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

        <!-- Modal (Load Content via AJAX) -->
        <div class="modal fade" id="jadwalModal" tabindex="-1" aria-labelledby="jadwalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="jadwalModalLabel">Jadwal Dosen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Content will be loaded here via AJAX -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

    </div>
</div>
<!-- End::app-content -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Event listener for the "Lihat Jadwal" button
        $('.lihat-jadwal').on('click', function() {
            var kd_dosen = $(this).data('kd_dosen');

            // Use AJAX to load the modal content
            $.ajax({
                url: "<?php echo base_url('Mahasiswa/load_jadwal_dosen'); ?>",
                type: 'POST',
                data: { kd_dosen: kd_dosen },
                success: function(data) {
                    $('#jadwalModal .modal-body').html(data);
                    $('#jadwalModalLabel').text('Jadwal Dosen: ' + kd_dosen);
                },
                error: function() {
                    $('#jadwalModal .modal-body').html('<p>Error loading data.</p>');
                }
            });
        });
    });
</script>
