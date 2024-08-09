<!--APP-CONTENT START-->
<div class="main-content app-content ">
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
                    <ul class="nav nav-tabs mb-3 nav-justified nav-style-1 d-sm-flex d-block" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#home1-justified" aria-selected="false">Tabel pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" href="#about1-justified" aria-selected="false">Tabel text jalan</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
                            <form method="post" action="<?php echo site_url('admin/store'); ?>" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="input-placeholder" class="form-label">judul</label>
                                    <input type="text" class="form-control" name="judul" id="input-placeholder" placeholder="masukan judul..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">upload file pdf</label>
                                    <input class="form-control" name="file" type="file" id="formFile" accept=".pdf" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                                                <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>title</th>
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
                                                            <td><?= $date->judul ?></td>
                                                            <td><?= $date->user_upload ?></td>
                                                            <td><?= $date->file ?></td>
                                                            <td><?= $date->tgl_update ?></td>
                                                            <td class="text-center">
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $date->id ?>" class="btn btn-sm btn-danger">Hapus</button>
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal<?= $date->id ?>" class="btn btn-sm btn-info">Edit</button>
                                                                <a href="<?= base_url('assets/uploads/' . $date->file) ?>" class="btn btn-sm btn-primary">view</a>
                                                            </td>
                                                        </tr>

                                                        <!-- Edit Modal -->
                                                        <div id="editModal<?= $date->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $date->id ?>" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="editModalLabel<?= $date->id ?>">Edit Pengumuman Bagian Depan</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="<?php echo site_url('admin/edit/'.$date->id); ?>" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="<?php echo $date->id; ?>" />
                                                                            <div class="mb-3">
                                                                                <label for="judul" class="form-label">Judul</label>
                                                                                <input type="text" class="form-control" name="judul" value="<?= $date->judul ?>" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="file" class="form-label">File Upload</label>
                                                                                <input type="file" class="form-control" name="file" accept=".pdf">
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
																			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Modal -->
                                                        <div id="deleteModal<?= $date->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $date->id ?>" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="deleteModalLabel<?= $date->id ?>">Konfirmasi Hapus Pengumuman</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Anda yakin ingin menghapus pengumuman tersebut?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="<?= base_url('admin/hapuspost/' . $date->id) ?>" class="btn btn-danger">Hapus</a>
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
						
                        <div class="tab-pane text-muted" id="about1-justified" role="tabpanel">
						<form class="form-material m-t-40" method="post" action="<?php echo site_url('admin/storejln'); ?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                    <label for="input-placeholder" class="form-label">judul</label>
                                    <input type="text" class="form-control" name="judul" id="input-placeholder" placeholder="masukan judul..." required>
                            </div>
							<div class="mb-3">
                                    <label for="input-placeholder" class="form-label">isi pengumuman</label>
                                    <input type="text" class="form-control" name="isi_pengumuman" id="input-placeholder" placeholder="masukan isi..." required>
                            </div>
                        
						<button type="submit" class="btn btn-primary">Submit</button>
                        </form>
						<br>
                            <!-- Start:: row-8 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Data Pengumuman text jalan
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
															<th>judul</th>
															<th>isi pengumuman</th>
															<th>nama petugas</th>
															<th>date</th>
															<th>option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            $counter = 0;
                                                            foreach($dat as $da): 
                                                            $counter++;
                                                        ?>
                                                        <tr>
                                                            <td><?= $counter ?></td>
                                                            <td><?= $da->judul ?></td>
                                                            <td><?= $da->isi_pengumuman ?></td>
                                                            <td><?= $da->petugas ?></td>
                                                            <td><?= $da->tanggal ?></td>
                                                            <td class="text-center">
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $da->id_pengumuman ?>" class="btn btn-sm btn-danger">Hapus</button>
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal<?= $da->id_pengumuman ?>" class="btn btn-sm btn-info">Edit</button>
                                                                
                                                            </td>
                                                        </tr>

                                                        <!-- Edit Modal -->
                                                        <div id="editModal<?= $da->id_pengumuman ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $da->id_pengumuman ?>" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="editModalLabel<?= $da->id_pengumuman ?>">Edit Pengumuman Bagian Depan</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="<?php echo site_url('admin/editjln/'.$da->id_pengumuman); ?>" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="<?php echo $da->id_pengumuman; ?>" />
                                                                            <div class="mb-3">
                                                                                <label for="judul" class="form-label">Judul</label>
                                                                                <input type="text" class="form-control" name="judul" value="<?= $da->judul ?>" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="isi_pengumuman" class="form-label">Isi pengumuman</label>
                                                                                <input type="text" class="form-control" name="isi_pengumuman" value="<?= $da->isi_pengumuman ?>" required>
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
																			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Modal -->
                                                        <div id="deleteModal<?= $da->id_pengumuman ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $da->id_pengumuman ?>" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="deleteModalLabel<?= $da->id_pengumuman ?>">Konfirmasi Hapus Pengumuman</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Anda yakin ingin menghapus pengumuman tersebut?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="<?= base_url('admin/hapuspostjln/' . $da->id_pengumuman) ?>" class="btn btn-danger">Hapus</a>
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
						</div>	
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
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
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
