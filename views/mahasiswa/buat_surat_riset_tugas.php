<div class="main-content app-content">
	<div class="container-fluid">
		<!-- Page Header -->
		<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
			<div class="my-auto">
				<h5 class="page-title fs-21 mb-1">Pembuatan Surat Pengantar Riset <code><?php echo $name; ?></code></h5>
			</div>
		</div>
		<!-- row1 -->
		<div class="row">
			<div class="col-xxl-10 col-xl-10 col-lg-12 mx-auto">
				<div class="card border-0 mb-4 bg-success-transparent alert p-0 alert-success">
					<div class="card-header d-flex align-items-center text-success fw-bold">
						<i class="me-2 far fa-check-circle"></i> Pemberitahuan
						<button type="button" class="btn-close ms-auto p-0" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
					</div>
					<div class="card-body text-success">
						Segala aktifitas yang anda lakukan di Ruang Mahasiswa ini dicatat secara otomatis oleh Program, gunakan fasilitas ini dengan bijaksana.
					</div>
				</div>

			</div>
			<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
				<div class="card overflow-hidden latest-tasks">
					<div>
						<div class="card-header p-0  justify-content-between px-4 pt-4 text-center ">
							<h4 class="card-title mg-b-10 text-center">Surat Pengantar Riset terdapat dalam 2 versi</h4>
						</div>
						<ul class="nav nav-tabs nav-tabs-header mb-0" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#tasktab-1" aria-selected="true"></a>
							</li>
						</ul>
					</div>
					<div class="card-body pt-3 mt-2">
						<div class="tab-content">
							<div class="tab-pane border-0 p-0 show active text-muted" id="tasktab-1" role="tabpanel">
								<div class="row">

									<div class="tasks col-xl-6 col-md-6 col-sm-12 ">
										<div class="card-header">
											<div class="card-title text-center">
												<i class="bi bi-wifi display-4"></i>
											</div>
										</div>

										<div class="task-line primary  flex-grow-1 ">
											<a href="javascript:void(0);" class="span">
												Versi online
											</a>
											<div class="time">
												adalah Surat yang dapat di cetak saat ini juga setelah anda menekan tombol proses dan sudah dianggap sah oleh Bidang Non Akademik BSI (karena menyertakan security print) dan tidak akan di proses oleh Bidang Non Akademik dan tidak bisa di ambil di kampus setelah 7 hari.
											</div>
										</div>

									</div>

									<div class="tasks col-xl-6 col-md-6 col-sm-12">
										<div class="card-header">
											<div class="card-title text-center"> <i class="bi bi-wifi-off display-4"></i>
											</div>
										</div>

										<div class="task-line pink  flex-grow-1 ">
											<a href="javascript:void(0);" class="span">
												Versi Offline
											</a>
											<div class="time">
												adalah data yang anda kirimkan akan di proses dahulu oleh Bidang Non Akademik serta bisa di cetak langsung dan surat keterangan yang berstempel baru bisa di ambil di kampus masing masing dalam jangka waktu 7 hari harap memilih salah satu untuk memudahkan proses.
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

		<!-- row2 -->
		<div class="row">
			<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
				<div class="card-body pt-3 mt-2">
					<div class="row">
						<div class="tasks col-xl-6 col-md-6 col-sm-12 ">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">Ketik\Edit Surat pengantar seperti yang tertera di bawah ini</div>
								</div>
								<div class="card-body">
									<label for="text-area" class="form-label"></label>
									<textarea class="form-control" id="text-area" rows="7">
         Kepada Yth : <br>
            Humas / Public Relation / SDM <br>
                Hotel Central <br>
                Jl. Setia Budi No. 12-15 <br>
                Jakarta Timur 125874 ==============================
                Gunakan --> <br> <-- untuk berpindah baris (terlihat rapih)  
                                    </textarea>

								</div>
							</div>
						</div>
						<div class="tasks col-xl-6 col-md-6 col-sm-12">
							<div class="card custom-card">

								<div class="card-body">
									<label for="text-area" class="form-label fs-14 text-dark">Masukkan Nama Program / Tugas : </label>
									<input class="form-control" id="text-area" rows="7"></input>
									<label for="form-text" class="form-label fs-14 text-dark">Pilih Matakuliah</label>
									<select class="form-select" aria-label="Default select example">
										<option selected disabled>=Pilih Matakuliah=</option>
										<?php foreach ($mhs as $pri): ?>
											<option value="1"><?= $pri->nm_mtk ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- row3 -->
		<div class="row">
			<div class="col-xxl-12 col-xl-12 col-lg-12 mx-auto">
				<div class="card border border-success mb-4">
					<div class="card-body text-success text-center">
						<div class="success-widget">
							<h4 class="text-success">Konfirmasi</h4>
							<p class="mt-3 mb-0"> <strong>Ketik pada form kosong diatas ditujukan kepada Instansi\Personal yang bersangkutan, mohon diisi dengan data yang sebenarnya ,</strong>dan periksa sekali lagi apa yang anda telah ketikkan,
								setelah anda menekan tombol anda akan dibuatkan surat Pengantar Riset dan data yang anda masukkan menjadi bukti bahwa anda pernah membuat surat Pengantar Riset. Gunakan fasilitas ini dengan sebaik-baiknya dan bijaksana.</p>
						</div>
					</div>
					<div class="row mb-3" style="display: flex; justify-content: center;">
						<button class="btn btn-primary label-btn" style="width: auto;">
							<i class="ri-chat-smile-line label-btn-icon me-2"></i>
							Kirim
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
