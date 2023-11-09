<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('utama') ?>">Toko Batik Online</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link" href="<?php echo site_url('utama') ?>">
                                Belanja</a
                            >
                            <div class="sb-sidenav-menu-heading">Administrasi</div>
                            <a class="nav-link" href="<?php echo site_url('admin') ?>"
                                > Data Admin </a>
                            <a class="nav-link" href="<?php echo site_url('pelanggan') ?>"
                                >
                                Data Pelanggan</a
                            >
                            <a class="nav-link" href="<?php echo site_url('belanja') ?>"
                                >
                                Data Barang</a
                            >
                            <div class="sb-sidenav-menu-heading">Pembelian</div>
                            <?php
                                $keranjang = 'Keranjang Belanja: '.$this ->cart -> total_items().' items' 
                            ?>
                            
                            <?php echo anchor('utama/overview/detail_keranjang', $keranjang) ?>

                            <a class="nav-link" href="<?php echo site_url('utama/invoice') ?>"
                                >
                                Invoice</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                    <h4>Keranjang Belanja</h4>

                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                        <?php
                            $no = 1;
                            foreach ($this ->cart -> contents () as $items) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $items['name'] ?></td>
                                    <td><?php echo $items['qty'] ?></td>
                                    <td align="right"> Rp. <?php echo number_format($items['price'], 0, ',','.') ?></td>
                                    <td align="right"> Rp. <?php echo number_format($items['subtotal'], 0, ',','.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan ="4"></td>
                                <td align ="right">Rp. <?php echo number_format($this ->cart-> total(), 0, ',','.')?></td>
                            </tr>
                    </table>

                    <div align ="right">
                        <a href="<?php echo site_url('utama/overview/hapus_keranjang')?>"><div class = "btn btn-sm btn-danger">Hapus Keranjang</div></a>
                        <a href="<?php echo site_url('utama/overview')?>"><div class = "btn btn-sm btn-primary">Lanjut Belanja</div></a>
                        <a href="<?php echo site_url('utama/overview/pembayaran')?>"><div class = "btn btn-sm btn-success">Bayar</div></a>
                    </div>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Toko Batik Online</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('js/scripts.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/demo/chart-area-demo.js') ?>"></script>
        <script src="<?php echo base_url('assets/demo/chart-bar-demo.js') ?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/demo/datatables-demo.js') ?>"></script>
    </body>
</html>

</head>

</html>