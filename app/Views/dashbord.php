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
                  <a href="#" class="sidebar__link active">
                      <span class='bx bx-grid-alt sidebar__icon material-icons'>dashboard</span>
                      <span class="sidebar__text">Home</span>
                  </a>
                  <a href="#" class="sidebar__link">
                      <span class="bx bx-grid-alt sidebar__icon material-icons">assignment</span>
                      <span class="sidebar__text">Data Pesanan</span>
                  </a>
                  <a href="#" class="sidebar__link">
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
  <div class="info mt-5">
    <div class="row">
      <div class="col-lg-4 mt-sm-2">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Transaksi</h5>
                <hr>
                <div class="row">
                    <div class="col my-auto">
                        <span class="material-icons ">
                            assignment
                            </span>
                    </div>
                    <div class="col my-auto">
                        <p class="card-text text-right col">100000</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-sm-2">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8  offset-md-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pesanan Diproses</h5>
                <hr>
                <div class="row">
                    <div class="col my-auto">
                    <span class="material-icons">pending_actions</span>
                    </div>
                    <div class="col my-auto">                      
                        <p class="card-text text-right col">100000</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-sm-2">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Produk</h5>
                <hr>
                <div class="row">
                    <div class="col my-auto">
                    <span class="material-icons">view_list</span>
                    </div>
                    <div class="col my-auto">
                        <p class="card-text text-right col">100000</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="selamat-datang mt-5 text-center">
    <h1 class="text-center">Selamat datang</h1>
    <h2 class="text-center">Hapnan Arsad Riski</h2>
    <button type="button" class="btn btn-primary " id="order-form-button" data-toggle="collapse" data-target="#order-form" aria-expanded="false" aria-controls="order-form">Order Barang</button>
  </div>

  <div class="collapse form-barang container mt-3 mb-3" id="order-form">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h3 class="text-center">Form Order Barang</h3>
        </div>
        <form>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="nama-toko">Nama Toko</label>
              <input type="text" class="form-control" id="nama-toko" value="Indomaret" disabled>
            </div>
            <div class="form-group col-md">
              <label for="nama-teller">Nama Teller</label>
              <input type="text" class="form-control" id="nama-teller" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Alamat</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Jl. ..." disabled>
          </div>
          <div class="form-group">
            <label for="inputAddress2">No Tempat</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="No. ..." disabled>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputCity">Kota</label>
              <input type="text" class="form-control" id="inputCity" disabled>
            </div>
            <div class="form-group col-md-4">
              <label for="provinsi">Provinsi</label>
              <input type="text" class="form-control" id="provinsi" disabled>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Kode Pos</label>
              <input type="text" class="form-control" id="inputZip" disabled>
            </div>
          </div>
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-primary" id="modal-barang">Pilih Barang</button>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
    </div>
    <div class="modal fade" id="pilih-barang" tabindex="-1" aria-labelledby="pilih-barangLabel">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pilih-barangLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody id="target-barang">
                
            </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes <span class="badge badge-light badge-modal-order">0</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/nav.js');?>"></script>     
    <script src="<?= base_url('js/produk.js');?>"></script>      
  </body>
</html>