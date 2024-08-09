<!-- APP-CONTENT START -->
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        </div>
        <div>
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        KONFIGURASI TANGGAL
                    </div>
                </div>
				    
                <div class="card-body">
					<?= $this->session->flashdata('message'); ?>
                    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
                        <form class="form-material m-t-40" method="post" action="<?php echo site_url('admin/savecfgtgl'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
								<label for="form-text" class="form-label fs-14 text-dark">Nama Program</label>
                                <input type="text" class="form-control form-control-line" name="program" placeholder="Masukan nama program..." required>
                            </div>
                            <div class="form-group">
                                <label for="form-text" class="form-label fs-14 text-dark">Keterangan</label>
                                <input type="text" class="form-control form-control-line" name="keterangan" placeholder="Masukan keterangan..." required>
                            </div>
                            <div class="form-group">
								<label for="form-text" class="form-label fs-14 text-dark">Waktu Pembukaan:</label>                                
								<div class="input-group">
                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                        <input type="text" class="form-control" name="pembukaan" id="datetime" placeholder="Choose date with time" required>
                                </div>
                            </div>
                            <div class="form-group">
								<label for="form-text" class="form-label fs-14 text-dark">Waktu Penutupan:</label>                                
								<div class="input-group">
                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                        <input type="text" class="form-control" name= "penutupan" id="datetime" placeholder="Choose date with time" required>
                                </div>
                            </div>
                            
                            <input type="submit" class="btn btn-primary btn-user" value="Simpan">
                        </form>
                        <br>
                        <!-- Start:: row-8 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Data Konfigurasi Tanggal
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Program</th>
                                                        <th>Keterangan</th>
                                                        <th>Pembukaan</th>
                                                        <th>Penutupan</th>
                                                        <th>update</th>
                                                        <th>petugas</th>
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
                                                        <td><?= $date->nama_program ?></td>
                                                        <td><?= $date->keterangan ?></td>
                                                        <td><?= $date->tgl_buka ?>-<?= $date->bln_buka ?>-<?= $date->thn_buka ?> <?= $date->jam_buka ?>:<?= $date->menit_buka ?>:<?= $date->detik_buka ?></td>
                                                        <td><?= $date->tgl_tutup ?>-<?= $date->bln_tutup ?>-<?= $date->thn_tutup ?> <?= $date->jam_tutup ?>:<?= $date->menit_tutup ?>:<?= $date->detik_tutup ?></td>
                                                        <td><?= $date->tanggal_update ?> <?= $date->jam_update ?></td>
                                                        <td><?= $date->petugas ?></td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $date->id_tanggal ?>">Hapus</button>
                                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editModal<?= $date->id_tanggal ?>">Edit</button>
                                                            
                                                        </td>
                                                    </tr>

                                                    <!-- Modal Edit -->
													<?php
													// Ensure $date is a valid object and has the required properties for both opening and closing dates
													if (isset($date->tgl_buka, $date->bln_buka, $date->thn_buka, $date->jam_buka, $date->menit_buka, $date->detik_buka,
															$date->tgl_tutup, $date->bln_tutup, $date->thn_tutup, $date->jam_tutup, $date->menit_tutup, $date->detik_tutup)) {

														// Construct the opening date string from the components
														$orial_date_open = sprintf(
															'%02d-%s-%04d %02d:%02d:%02d',
															$date->tgl_buka,
															$date->bln_buka,
															$date->thn_buka,
															$date->jam_buka,
															$date->menit_buka,
															$date->detik_buka
														);

														// Construct the closing date string from the components
														$orial_date_close = sprintf(
															'%02d-%s-%04d %02d:%02d:%02d',
															$date->tgl_tutup,
															$date->bln_tutup,
															$date->thn_tutup,
															$date->jam_tutup,
															$date->menit_tutup,
															$date->detik_tutup
														);

														// Create DateTime objects from the constructed strings
														$dat_open = DateTime::createFromFormat('d-F-Y H:i:s', $orial_date_open);
														$dat_close = DateTime::createFromFormat('d-F-Y H:i:s', $orial_date_close);

														// Check if the DateTime objects were created successfully
														if ($dat_open !== false && $dat_close !== false) {
															// Format the DateTime objects to the desired format
															$formatted_date_open = $dat_open->format('Y-m-d\TH:i');
															$formatted_date_close = $dat_close->format('Y-m-d\TH:i');
														} else {
															// Handle the error if DateTime object creation failed
															$formatted_date_open = 'Invalid date format';
															$formatted_date_close = 'Invalid date format';
														}
													} else {
														// Handle the error if $date object is not valid or properties are missing
														$formatted_date_open = 'Invalid date object';
														$formatted_date_close = 'Invalid date object';
													}

													
													?>


                                                    <div class="modal fade" id="editModal<?= $date->id_tanggal ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $date->id_tanggal ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel<?= $date->id_tanggal ?>">Edit data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" action="<?= base_url('admin/updatecfgtgl/' . $date->id_tanggal) ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
																			<label for="form-text" class="form-label fs-14 text-dark">Nama Program</label>
																			<input type="text" class="form-control form-control-line" name="program" placeholder="Masukan nama program... "value="<?= $date->nama_program ?>" required>
																		</div>
																		<div class="form-group">
																			<label for="form-text" class="form-label fs-14 text-dark">Keterangan</label>
																			<input type="text" class="form-control form-control-line" name="keterangan" placeholder="Masukan keterangan..." value="<?= $date->keterangan ?>" required>
																		</div>
																		<div class="form-group">
																		<label for="pembukaan" class="form-label fs-14 text-dark">Waktu Pembukaan:</label>
																		<div class="input-group">
																			<div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
																			<input type="datetime-local" class="form-control datetime-input" name="pembukaan"  placeholder="Choose date with time" value="<?php echo $formatted_date_open; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label for="penutupan" class="form-label fs-14 text-dark">Waktu Penutupan:</label>
																		<div class="input-group">
																			<div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
																			<input type="datetime-local" class="form-control datetime-input" name="penutupan"  placeholder="Choose date with time" value="<?php echo $formatted_date_close; ?>" required>
																		</div>
																	</div>
																		</div>
                                                                <div class="modal-footer">
                                                                        <input type="hidden" name="id" value="">
                                                                        <input type="submit" class="btn btn-primary btn-user" value="Simpan">
                                                                    </form>
                                                                
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Hapus -->
                                                    <div class="modal fade" id="deleteModal<?= $date->id_tanggal ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $date->id_tanggal ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModalLabel<?= $date->id_tanggal ?>">Konfirmasi Hapus Data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda yakin ingin menghapus data tersebut?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="<?= base_url('admin/deletecfgtgl/' . $date->id_tanggal) ?>" class="btn btn-danger waves-effect waves-light">HAPUS</a>
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

<script src="../assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="../assets/js/date&time_pickers.js"></script>

<style>
  .datetime-input {
      position: relative;
      z-index: 1050; /* Higher than modal's z-index */
  }
</style>
