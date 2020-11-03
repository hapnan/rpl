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
                <span class="sidebar__logo-text">Bedimcode</span>
              </a>
    
              <div class="sidebar__toggle" id="sidebar-toggle">
                <i class='bx bx-chevron-right'></i>
              </div>
    
              <ul class="sidebar__list">
                  <a href="#" class="sidebar__link">
                      <span class='bx bx-grid-alt sidebar__icon material-icons'>dashboard</span>
                      <span class="sidebar__text">Home</span>
                  </a>
                  <a href="#" class="sidebar__link">
                      <span class="bx bx-grid-alt sidebar__icon material-icons">assignment</span>
                      <span class="sidebar__text">Data Pesanan</span>
                  </a>
                  <a href="#" class="sidebar__link active">
                      <span class="bx bx-grid-alt sidebar__icon material-icons">list</span>
                      <span class="sidebar__text">Data Produk</span>
                  </a>
                  <a href="#" class="sidebar__link">
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
  <button type="button" class="btn btn-custom mt-3 ml-3" data-toggle="modal" data-target="#modal-tambah">Tambah Produk</button>
    <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="modal-tambah-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-tambah-label">Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tambah_brg container-fluid">
                <h1>Tambah Barang</h1>
                <form action="<?= base_url('/produk/addproduk');?>" method="post" >
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" id="nama_brg" aria-describedby="nama_help">
                    </div>
                    <div class="form-group">
                        <label for="hrg_brg">Harga</label>
                        <input type="text" name="harga" class="form-control" id="id">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>          
          </div>      
        </div>
      </div>
    </div>
    <div class="form-group container-fluid mt-3">
    <?= csrf_field() ?>
      <input type="text" class="form-control" id="search" placeholder="search">
    </div>
    <section class="table-data-barang container-fluid">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            
          </tr>
        </thead>
        <tbody class="data-barang" id="data-barang">
          <?php $i=1;?>
          <?php foreach ($barang as $k) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $k['nama_brg'];?></td>
              <td><?= $k['harga'];?></td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/script.js');?>"></script>
    <script src="<?= base_url('js/nav.js');?>"></script>        
  </body>
</html>