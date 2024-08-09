<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Email Program Studi</h5>
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
                                                <th>Fakultas</th>
                                                <th>Program studi</th>
                                                <th>Jenjang</th>
                                                <th>Nama KaProdi</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $n = 0;
                                             
                                             foreach($emails as $email):
                                                $n ++;
                                             ?>
                                            <tr>
                                                <td><?= $n; ?></td>
                                                <td><?= $email->fakultas ?></td>
                                                <td><?= $email->prodi ?></td>
                                                <td><?= $email->jenjang ?></td>
                                                <td><?= $email->kaprodi ?></td>
                                                <td><?= $email->email ?></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                
                
                
    </div>
</div>