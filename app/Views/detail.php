<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php base_url('')?>/css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/3c7fba3293.js" crossorigin="anonymous"></script>
        <title>Hello, world!</title>
 
    </head>
    <body>
    <div class="l-navbar accordion" id="navbar">
        <nav class="sidebar">
            <div>
                <a href="#" class="sidebar__logo">
                    <img src="<?= base_url();?>/img/logo.svg" alt="" class="sidebar__logo-icon">
                    <span class="sidebar__logo-text">Pedang V1</span>
                </a>
    
                <div class="sidebar__toggle" id="sidebar-toggle">
                    <i class='bx bx-chevron-right'></i>
                </div>
    
                <ul class="sidebar__list">
                    <a href="<?= base_url();?>" class="sidebar__link ">
                        <span class='bx bx-grid-alt sidebar__icon material-icons'>dashboard</span>
                        <span class="sidebar__text">Home</span>
                    </a>
                    <a href="<?= base_url('datapesanan');?>" class="sidebar__link active">
                        <span class="bx bx-grid-alt sidebar__icon material-icons">assignment</span>
                        <span class="sidebar__text">Data Pesanan</span>
                    </a>
                    <a href="<?= base_url('produk')?>" class="sidebar__link">
                        <span class="bx bx-grid-alt sidebar__icon material-icons">list</span>
                        <span class="sidebar__text">Data Produk</span>
                    </a>
                    <a href="<?= base_url('logout')?>" class="sidebar__link">
                        <span class="bx bx-grid-alt sidebar__icon material-icons">exit_to_app</span>
                        <span class="sidebar__text">Logout</span>
                    </a>                 
                </ul>
            </div>      
        </nav>
    </div>
    <div class="profile">
        <div class="row align-items-center">
            <div class="col">
        
            </div>
            <div class="col">
                <ul class="nav justify-content-end ">
                    <li class="mr-1 pt-1 nav-item profile-name">
                        Hapnan Arsad Riski
                    </li>
                    <li class="mr-1 nav-item profile-img">
                        <img src="<?= base_url()?>/img/img_1496.jpg" alt="">
                    </li>
                    <li class="nav-item pt-1"><i class="fas fa-angle-up"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <div class="wraper1 py-2 px-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">Status</div>
                    <div class="col-md-6"><?= $data1['status']?></div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-md-6">Taggal Pembelian</div>
                    <div class="col-md-6"><?= $data1['tgl_pesan'];?></div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-md-6">Nomor Transaksi</div>
                    <div class="col-md-6"><?= $data1['id_transaksi']?></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-12 px-4 target-detail">
                    <?php foreach ($data2 as $key ) {
                                echo "<div class=\"card\">";
                                echo "<div class=\"card-body\">";
                                echo "<div class=\"row\">";
                                echo "<div class=\"col-md-2\">"; 
                                echo "<img src=\"http://localhost:8080/img/IMG_1496.jpg\" class=\"img-fluid rounded\">";
                                echo "</div>";
                                echo "<div class=\"col-md-10 my-auto\">";
                                echo "<h3 class=\"card-text nama-barang-detail\">",$key['nama_brg'],"</h3>";
                                echo "<p class=\"jumlah-barang-detail\">",$key['jumlah']," pack</p>";
                                echo "<p class=\"harga-asli-detail \">Rp. ",$key['harga'],"</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "<hr>";
                                echo "<p class=\"total-harga-detail\">Total Harga:</p>";
                                echo "<p class=\"harga-detail\">", $key['total_hrg'],"</p>";
                                echo "</div>";
                                echo "</div>";
                        }
                    ?> 
                </div>
            </div>
        </div>
        <div class="wraper2 mt-2 py-2 px-2">
            <div class="container">
                <p class="detail-pengiriman">Detail Pengiriman</p>
                <hr>
                <div class="row ">
                    <div class="col-md-6">
                        <p class="label-alamat">Alamat Pengiriman</p>
                    </div>
                    <div class="col-md-6">
                        <p class="alamat-pengiriman">Jl. Sulang - Gunem Rt 03 Rw 05 No83 
                            <br>Sulang, Kab. Rembang <br>
                            Jawa Tengah, 59254<br>
                            0214456785</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/nav.js');?>"></script>     
    <script src="<?= base_url('js/datapesanan.js');?>"></script>      
    </body>
</html>