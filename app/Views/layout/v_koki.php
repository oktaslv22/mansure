<?php
include 'dashboard.php';
?>

<style>

</style>

<body>
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container-fluid">
            <section class=" mt-2 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-level-down-alt mr-1"></i>
                            <b>Pesanan Baru</b>
                        </h3><br><br>
                        <h6>Pesanan baru yang belum dihidangkan </h6>

                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="filter">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label class="label"><i class="fas fa-filter"></i>Filter: </label>
                                    <select id="filter" class="select-menu">
                                        <option value="">Semua</option>
                                        <option value="">Menunggu</option>
                                        <option value="">Selesai</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="tab-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No. Meja</th>
                                        <th scope="col">Id Pesanan</th>
                                        <th scope="col">Tgl Pesanan</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>001</td>
                                        <td>12-12-2022</td>
                                        <td>Okta</td>
                                        <td>Menunggu</td>
                                        <td>

                                            <a class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#RincianPesanan"><i class="fas fa-pen"></i></a>
                                            <!-- <span>
                                            *Button untuk klik Pesanan Selesai
                                        </span> -->
                                            <!-- <button type="button" class="btn btn-info fas fa-list-alt"
                                            data-bs-toggle="modal" data-bs-target="#RincianPesanan">
                                        </button> -->

                                            <!-- modal hapus -->
                                            <div class="modal fade" id="RincianPesanan" tabindex="-1"
                                                aria-labelledby="hapusmodal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <label class="col-sm-1.5">Nama</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control"
                                                                    id="nama_pemesan" name="nama_pemesan">
                                                            </div>

                                                            <label class="col-sm-1.5">No. Meja</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" id="no_meja"
                                                                    name="no_meja">
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">No.</th>
                                                                            <th scope="col">Nama Menu</th>
                                                                            <th scope="col">Jumlah</th>
                                                                            <th scope="col">Harga</th>
                                                                            <th scope="col">Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= base_url('dashboard/koki'); ?> "
                                                                class="btn btn-secondary">Kembali</a>
                                                            <a href="#" class="btn btn-success">Pesanan Selesai</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>002</td>
                                        <td>18-12-2022</td>
                                        <td>Nadia</td>
                                        <td>Menunggu</td>
                                        <td> <a class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#RincianPesanan"><i class="fas fa-pen"></i></a>
                                            <!-- <span>
                                            *Button untuk klik Pesanan Selesai
                                        </span> -->

                                            <!-- modal hapus -->
                                            <div class="modal fade" id="RincianPesanan" tabindex="-1"
                                                aria-labelledby="hapusmodal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <label class="col-sm-1.5">Nama</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control"
                                                                    id="nama_pemesan" name="nama_pemesan">
                                                            </div>

                                                            <label class="col-sm-1.5">No. Meja</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" id="no_meja"
                                                                    name="no_meja">
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">No.</th>
                                                                            <th scope="col">Nama Menu</th>
                                                                            <th scope="col">Jumlah</th>
                                                                            <th scope="col">Harga</th>
                                                                            <th scope="col">Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= base_url('dashboard/koki'); ?> "
                                                                class="btn btn-secondary">kembali</a>
                                                            <a href="#" class="btn btn-success">Pesanan Selesai</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>