<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
      <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <div class="navbar">
      <ul class ="nav navbar-nav navbar-right">
       
      </ul>
      </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- K E R A N J A N G  B E L A N J A -->
       <li>
          <?php
          $keranjang = 'Keranjang Belanja:'.$this->cart->total_items().'items'?>

          <?php echo  anchor('Dashboard/detail_keranjang' ,$keranjang) ?>
        </li>
      <li class="nav-item ml-3">
        <a href="../examples/login.html" class="nav-link">
                  <i class="fas fa-sign-in-alt">Login</i>
                  
                </a>
              </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->
<div id="layoutSidenav_content">
 <main>
<div class="content-wrapper">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<div class="btn btn-sm btn-primary">
			<?php
			$grand_total =0;
			if($keranjang =$this->cart->contents())
			{
				foreach ($keranjang as $item ) {
					$grand_total = $grand_total +$item['subtotal'];
				}

				echo "<h4>Total Pembayaran Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
			?>

</div><br><br>
	<h3>Masukan Alamat dan Segara lakukan Pembayaran</h3>
	<form method="post" action="<?php echo base_url('index.php/Dashboard/proses_pemesanan')?>">

		<div class ="form-group">
			<label>Nama</label>
			<input type="text" name="nama" placeholder="Nama Lengkap" class="form_control">
		</div>
		<div class ="form-group">
			<label>Alamat Lengkap</label>
			<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form_control">
		</div>
		<div class ="form-group">
			<label>Telepon</label>
			<input type="text" name="no_telp" placeholder="No Telp"class="form_control">
		</div>
		<div class ="form-group">
			<label>Jasa Pengiriman</label>
			<select class="form_control">
				<option>JNE</option>
				<option>J&T</option>
				<option>Post</option>
			</select>
		</div>
		<div class ="form-group">
			<label>Pilih Bank</label>
			<select class="form_control">
				<option>BRI</option>
				<option>BNI</option>
				<option>BCA</option>
			</select>
		</div>

		<button type="submit" class="btn btn-sm btn-success">Pesan</button>
		</form>
		<?php
		}else
		{
			echo"<h4>Keranjang Masih Kosong";
		}
		?>
	</div>
</div>
</div>

</div>

	
	<div class="col-md-2"></div>
</div>
</div>

      		