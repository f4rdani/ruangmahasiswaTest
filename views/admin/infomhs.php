<!-- APP-CONTENT START -->
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        </div>
        <div>
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        PENGUMUMAN HALAMAN DEPAN
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
                        <form class="form-material m-t-40" method="post" action="<?php echo site_url('admin/store1'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Announce_title</label>
                                <input type="text" class="form-control form-control-line" name="judul" placeholder="Some text value..." required>
                            </div>
                            <div class="form-group">
                                <label>Announce_story</label>
                                <input type="text" class="form-control form-control-line" name="story" placeholder="Some text value...">
                            </div>
                            <div class="form-group">
                                <label>Waktu Pembukaan:</label>
                                <input type="date" name="date" class="form-control form-control-line" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">upload file pdf</label>
                                <input class="form-control" name="file" type="file" id="formFile" accept=".pdf" required>
                            </div>
                            <div class="form-check form-check-lg form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg" name="show" value="1">
                                <label class="form-check-label" for="switch-lg">SHOW</label>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary btn-user" value="Simpan">
                        </form>
                        <br>
                        <!-- Start:: row-8 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Data Pengumuman Halaman Depan
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>title</th>
                                                        <th>story</th>
                                                        <th>show</th>
                                                        <th>upload_by</th>
                                                        <th>file_name</th>
                                                        <th>date</th>
                                                        <th>option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $counter = 0;
                                                    foreach($data as $date): 
                                                    $counter++;
                                                    ?>
                                                    <tr>
                                                        <td><?= $counter ?></td>
                                                        <td><?= $date->Announce_title ?></td>
                                                        <td><?= $date->Announce_story ?></td>
                                                        <td><?= $date->showed ?></td>
                                                        <td><?= $date->nip ?></td>
                                                        <td><?= $date->file_pisik ?></td>
                                                        <td><?= $date->Announce_date ?></td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $date->id ?>">Hapus</button>
                                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editModal<?= $date->id ?>">Edit</button>
                                                            <a href="<?= base_url('assets/uploads/' . $date->file_pisik) ?>" class="btn btn-sm btn-primary">View</a>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal<?= $date->id ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $date->id ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel<?= $date->id ?>">Edit Pengumuman</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" action="<?= base_url('admin/editindexmhs/' . $date->id) ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label>Announce_title</label>
                                                                            <input type="text" class="form-control form-control-line" name="judul" value="<?= $date->Announce_title ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Announce_story</label>
                                                                            <input type="text" class="form-control form-control-line" name="story" value="<?= $date->Announce_story ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Waktu Pembukaan:</label>
                                                                            <input type="date" name="date" class="form-control form-control-line" value="<?= $date->Announce_date ?>" required>
                                                                        </div>
                                                                         <div class="mb-3">
																			<label for="formFile" class="form-label">upload file pdf</label>
																			<input class="form-control" name="file" type="file" id="formFile" accept=".pdf" >
																		</div>
																		<div class="form-check form-check-lg form-switch">
																			<input class="form-check-input" type="checkbox" role="switch" id="switch-lg" name="show" value="1" <?= $date->showed == 1 ? 'checked' : '' ?>>
																			<label class="form-check-label" for="switch-lg">SHOW</label>
																		</div>
																		<br>
                                                                        <input type="hidden" name="id" value="">
                                                                        <input type="submit" class="btn btn-primary btn-user" value="Simpan">
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Hapus -->
                                                    <div class="modal fade" id="deleteModal<?= $date->id ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $date->id ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModalLabel<?= $date->id ?>">Konfirmasi Hapus Pengumuman</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda yakin ingin menghapus pengumuman tersebut?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="<?= base_url('admin/hapusindexmhs/' . $date->id) ?>" class="btn btn-danger waves-effect waves-light">HAPUS</a>
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-8 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-2 -->
</div>

<!-- Bootstrap JS (Include this in the footer) -->

<script>
    // Ensure modals close when clicking outside
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal')) {
                var bsModal = bootstrap.Modal.getInstance(modal);
                if (bsModal) {
                    bsModal.hide();
                }
            }
        });
    });
</script>
<!-- Date & Time Picker JS -->
<script src="../assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="../assets/js/date&time_pickers.js"></script>
