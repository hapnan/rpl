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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="tab-data-pemesanan" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-menunggu-diprose" data-toggle="tab"  href="#menunggu-diproses" role="tab" aria-controls="menunggu-diproses" aria-selected="true">Menunggu Diproses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-pesanan-diproses" data-toggle="tab"  href="#pesanan-diproses" role="tab" aria-controls="pesanan-diproses" aria-selected="false">Pesanan Diproses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-pesanan-dikirim" data-toggle="tab"  href="#pesanan-dikirim"  role="tab" aria-controls="pesanan-dikirim" aria-selected="false">Pesanan Dikirim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-pesanan-diterima" data-toggle="tab"  href="#pesanan-diterima"  role="tab" aria-controls="pesanan-diterima" aria-selected="false">Pesanan Diterima</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane target-pesanan-0 fade  show active " id="menunggu-diproses" role="tabpanel" aria-labelledby="tab-menunggu-diprose">
                            
                        </div>
                        <div class="tab-pane target-pesanan-1 fade" id="pesanan-diproses" role="tabpanel" aria-labelledby="tab-pesanan-diproses">
                            
                        </div>
                        <div class="tab-pane target-pesanan-2 fade" id="pesanan-dikirim" role="tabpanel" aria-labelledby="tab-pesanan-dikirim">
                            
                        </div>
                        <div class="tab-pane target-pesanan-3 fade" id="pesanan-diterima" role="tabpanel" aria-labelledby="tab-pesanan-diterima">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/nav.js');?>"></script>     
    <script src="<?= base_url('js/datapesanan.js');?>"></script>      
    </body>
</html>