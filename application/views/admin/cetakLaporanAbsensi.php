<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<style type="text/css">
		body {
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<h1>PT. INDONESIA BANGKIT</h1>
		<h2>Laporan Absensi Pegawai</h2>
	</center>

	<?php 

	$bulan = $this->input->post('bulan');
	$tahun = $this->input->post('tahun');
	$bulantahun = $bulan.$tahun;
	
	?>

	<table>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo $bulan ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo $tahun ?></td>
		</tr>
	</table>

	<table class="table table-bordered table-striped">
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">NIK</th>
			<th class="text-center">Nama Pegawai</th>
			<th class="text-center">Jabatan</th>
			<th class="text-center">Hadir</th>
			<th class="text-center">Sakit</th>
			<th class="text-center">Alpha</th>
		</tr>

		<?php $no=1; foreach ($lap_kehadiran as $h) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $h->nik ?></td>
			<td><?php echo $h->nama_pegawai ?></td>
			<td><?php echo $h->nama_jabatan ?></td>
			<td><?php echo $h->hadir ?></td>
			<td><?php echo $h->sakit ?></td>
			<td><?php echo $h->alpha ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>Kendari, <?php echo date("d M Y") ?> <br> Finance</p>
			<br>
			<br>
			<p>____________________</p>
		</td>
	</tr>
</table>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>