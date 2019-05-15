<?php if ($this->session->userdata('level')=='operator'){?>
  <header>
  <div class="container bg-info p-5 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Delima Waluya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard">Beranda <span class="sr-only">(current)</span></a>
          <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Data
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/pasien">Data Pasien</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/obat">Data Obat</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/kamar">Data Kamar</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/inap">Data Rawat Inap</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/jalan">Data Rawat Jalan</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/dokter">Data Dokter</a>
           </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/transaksiobat">Transaksi Obat<span class="sr-only">(current)</span></a>
        <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/transaksiinap">Rawat Inap</a>
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/transaksijalan">Rawat Jalan</a>
        </div>
        </div>
        <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/laporaninap">Laporan Rawat Inap</a>
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/laporanjalan">Laporan Rawat Jalan</a>
        </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout">Logout<span class="sr-only">(current)</span></a>
        <?php if($data_obat>0){?>
        <a data-toggle="modal" data-target=".stok" class="nav-item nav-link active" href="#"><i class="fa fa-cart-plus" style="color:red"></i><span class="sr-only">(current)</span></a>
      <?php }?>
      </div>
    </nav>
  </div>
</header>
<div class="modal fade stok" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <div class=" card col-8 offset-2 my-2 p-3">
            <?php if ($data_obat>0){
    echo "<b>Stok Obat Mau Abis</b>";

}?>
    </div>
    </div>
  </div>
</div>
</div>
<?php } elseif ($this->session->userdata('level')=='pendaftaran'){?>
  <header>
  <div class="container bg-info p-5 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Delima Waluya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard">Beranda <span class="sr-only">(current)</span></a>
          <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Data
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/rekammedis">Data Rekam Medis</a>
        </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/pendaftaran">Pendaftaran<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout">Logout<span class="sr-only">(current)</span></a>
        <?php if($data_obat>0){?>
        <a data-toggle="modal" data-target=".stok" class="nav-item nav-link active" href="#"><i class="fa fa-cart-plus" style="color:red"></i><span class="sr-only">(current)</span></a>
      <?php }?>
      </div>
    </nav>
  </div>
</header>
<div class="modal fade stok" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <div class=" card col-8 offset-2 my-2 p-3">
            <?php if ($data_obat>0){
    echo "<b>Stok Obat Mau Abis</b>";

}?>
    </div>
    </div>
  </div>
</div>
</div>
<?php } elseif ($this->session->userdata('level')=='dokter'){?>
  <header>
  <div class="container bg-info p-5 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Delima Waluya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard">Beranda <span class="sr-only">(current)</span></a>
          <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Data
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/rekammedis">Data Rekam Medis</a>
        </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout">Logout<span class="sr-only">(current)</span></a>
        <?php if($data_obat>0){?>
        <a data-toggle="modal" data-target=".stok" class="nav-item nav-link active" href="#"><i class="fa fa-cart-plus" style="color:red"></i><span class="sr-only">(current)</span></a>
      <?php }?>
      </div>
    </nav>
  </div>
</header>
<div class="modal fade stok" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <div class=" card col-8 offset-2 my-2 p-3">
            <?php if ($data_obat>0){
    echo "<b>Stok Obat Mau Abis</b>";

}?>
    </div>
    </div>
  </div>
</div>
</div>
<?php } elseif ($this->session->userdata('level')=='owner'){?>
<header>
  <div class="container bg-info p-5 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Delima Waluya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard">Beranda <span class="sr-only">(current)</span></a>
          
        <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/laporaninap">Laporan Rawat Inap</a>
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/laporanjalan">Laporan Rawat Jalan</a>
        </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout">Logout<span class="sr-only">(current)</span></a>
      <?php if($data_obat>0){?>
        <a data-toggle="modal" data-target=".stok" class="nav-item nav-link active" href="#"><i class="fa fa-cart-plus" style="color:red"></i><span class="sr-only">(current)</span></a>
      <?php }?>
      </div>
    </nav>
  </div>
</header>
<div class="modal fade stok" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <div class=" card col-8 offset-2 my-2 p-3">
            <?php if ($data_obat>0){
    echo "<b>Stok Obat Mau Abis</b>";

}?>
    </div>
    </div>
  </div>
</div>
</div>
<?php } ?>