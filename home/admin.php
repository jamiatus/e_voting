<?php
  $sql = $koneksi->query("SELECT COUNT(ID_CALON) as tot_calon  from tb_calon");
  while ($data= $sql->fetch_assoc()) {
    $calon=$data['tot_calon'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as tot_pemilih  from tb_pengguna where level='Pemilih'");
  while ($data= $sql->fetch_assoc()) {
    $pemilih=$data['tot_pemilih'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as sudah  from tb_pengguna where level='Pemilih' and status='0'");
  while ($data= $sql->fetch_assoc()) {
    $sudah=$data['sudah'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as belum  from tb_pengguna where level='Pemilih' and status='1'");
  while ($data= $sql->fetch_assoc()) {
    $belum=$data['belum'];
  }
?>

<div class="row">
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h5>
					<?php echo $calon; ?>
				</h5>
				<p></p>
				<p>Jumlah Kandidat</p>
			</div>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h5>
					<?php echo $pemilih; ?>
				</h5>
				<p></p>
				<p>Jumlah Pemilih</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $sudah; ?>
				</h5>
				<p></p>
				<p>Sudah Memilih</p>
			</div>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h5>
					<?php echo $belum; ?>
				</h5>
				<p></p>
				<p>Belum Memlih</p>
			</div>
		</div>
	</div>