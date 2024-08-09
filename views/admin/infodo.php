
<!-- Prism CSS -->
<!-- <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-coy.min.css">

<link rel="stylesheet" href="../assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">
<link rel="stylesheet" href="../assets/libs/dropzone/dropzone.css"> -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Start:: row-1 -->
                <div class="row">
                        
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            SURAT KETERANGAN DO
                                        </div>
                                    </div>
									<?php if (!empty($data)): ?>
										<?php foreach ($data as $date): ?>
											<div class="card-body">
												<form method="post" action="<?php echo site_url('admin/updatesudo/' . $date->id); ?>" enctype="multipart/form-data">
													<div class="form-group">
														<label for="input-text" class="form-label">Judul</label>
														<input type="text" class="form-control" name="judul" id="input-text" placeholder="Masukan Judul" required>
													</div>
													<div class="form-group">
														<label for="input-text" class="form-label">masukan file pdf</label>
														<input class="form-control" name="file" type="file" id="formFile" accept=".pdf" required>
													</div>
													<input type="submit" class="btn btn-primary btn-user" value="update">
												</form>
											</div>
										<?php endforeach; ?>
									<?php else: ?>
										<div class="card-body">
											<form method="post" action="<?php echo site_url('admin/savesudo'); ?>" enctype="multipart/form-data">
												<div class="form-group">
													<label for="input-text" class="form-label">Judul</label>
													<input type="text" class="form-control" name="judul" id="input-text" placeholder="Masukan Judul" required>
												</div>
												<div class="form-group">
													<label for="input-text" class="form-label">masukan file pdf</label>
													<input class="form-control" name="file" type="file" id="formFile" accept=".pdf" required>
												</div>
												<input type="submit" class="btn btn-primary btn-user" value="Simpan">
											</form>
										</div>
									<?php endif; ?>

                                </div>
                            </div>
                            <div class="col-xl-12">
  								<div class="col-xl-12">
                                	<div class="card custom-card">
                                    	<div class="card-header">
                                        	<div class="card-title">
												VIEW
											</div>
										</div>
										<div class="card-body">
											<?php if ($data): ?>
												<?php foreach ($data as $da): ?>
												<?= $da->judul_berita ?><code> <?= $da->tanggal_posting ?> </code><?= $da->user_yang_posting?>
												<?php endforeach; ?>
											<?php endif; ?>
											<?php foreach ($data as $date): ?>
												<div class="card-body">
													<iframe src="<?= base_url('assets/uploads/' . $date->file) ?>" width="100%" height="600px" frameborder="0"></iframe>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->
            </div>
        </div>
        <!-- End::app-content -->    
    <div class="card-body" hidden>
        <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone"></form>
    </div>

    <!-- Prism JS -->
    <!-- <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/js/prism-custom.js"></script> -->

    <!-- Filepond JS -->
    <!-- <script src="../assets/libs/filepond/filepond.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script> -->

    <!-- Dropzone JS -->
    <!-- <script src="../assets/libs/dropzone/dropzone-min.js"></script> -->

    <!-- Fileupload JS -->
    <!-- <script src="../assets/js/fileupload.js"></script> -->

    <!-- Custom JS -->
    <!-- <script src="../assets/js/custom.js"></script> -->
