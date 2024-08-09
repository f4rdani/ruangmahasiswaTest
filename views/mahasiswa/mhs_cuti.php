<!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <header>
                    <hr>
                </header>

                <div class="container about-container">
                     <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mt-7">
                                <div class="card-body p-0 p-lg-5 text-dark">
                                    <div class="statistics-info p-4">
                                        <div class="row">
                                            <div class="">
                                                <div class="">
                                                    <h2 class="fw-bold mb-4 text-dark">Pendaftaran Cuti Akademik</h2>
                                                    <h5 class="leading-normal fw-normal mb-4 text-dark">Selamat datang <?= $this->session->userdata('name') ?? 'Mahasiswa' ?> pada laman pengajuan cuti , anda hanya bisa melakukan cuti 2 semester dan hanya dapat dilakukan satu kali pengajuan cuti.</h5>
                                                    <p>keterangan : </p>
                                                    <p>Gunakan Fasilitas ini dengan sebaik-baiknya dan jangan lupa untuk melakukan transfer pembayaran biaya cuti setelah proses pengajuan cuti akademik ini.</p>
<p><strong>Bagi mahasiswa Dual Campus, selain mengajukan Cuti Akademik di D3 BSI WAJIB untuk melakukan pengajuan cuti di S1 Nusamandiri.</strong></p>
<p>Hasil Pengajuan data cuti akan disesuaikan dengan data pembayaran yang anda lakukan, surat cuti dapat diunduh di-website mahasiswa pada link surat cuti akademik setelah batas akhir pengajuan cuti.</p>
<p style="color: red;">Pengajuan Cuti Yang Tidak Disertai Dengan Pembayaran Cuti, Maka Pengajuan Cuti-nya TIDAK AKAN DIPROSES, Begitupun Pembayaran Yang Tidak Disertai Dengan Pengajuan Cuti.</p>
<p style="color: red;">Untuk Pembatalan Pengajuan Cuti Dapat Membuat Surat Pembatalan Cuti Akademik Dengan Mengirim E-Mail Ke baak@bsi.ac.id, Maximal Pengiriman Yaitu Batas Akhir Pengajuan Cuti Akademik.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-3 -->
 <!--ROW-START-->
 <div class="row">
                        <div class="">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                </div>
                                <div class="card-body">
                                    <form>
                                    <div class="mb-3">
                                    <p class="fw-semibold mb-2">Jumlah cuti yang akan diambil</p>
                                        <select class="form-select">
                                            <option value="1s">1 Semester</option>
                                            <option value="2s">2 Semester</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No.Handphone</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">Harus Aktif dan Valid</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Email</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    
                </div>

            </div>
        </div>
        <!-- End::app-content -->
