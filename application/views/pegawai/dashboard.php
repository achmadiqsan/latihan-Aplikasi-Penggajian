<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div>

	<div class="alert alert-success font-weight-bold mb-4" style="width: 65%">
		Selamat Datang, Anda Login Sebagai Pegawai.
	</div> 

	<div class="card" style="margin-bottom: 25px; width: 65%">
		<div class="card-header font-weight-bold bg-primary text-white">
			Data Pegawai
		</div>

		<?php foreach ($pegawai as $p) : ?>
			<div class="card-body">
				<div class="row">
					<div class="col-md-5">
						<img style="width: 250px" src="<?php echo base_url('assets/photo/'.$p->photo) ?>">
					</div>
					<div class="col-md-7">
						<table class="table">
							<tr>
								<td>Nama Pegawai</td>
								<td>:</td>
								<td><?php echo $p->nama_pegawai ?></td>
							</tr>

							<tr>
								<td>Jabatan</td>
								<td>:</td>
								<td><?php echo $p->jabatan ?></td>
							</tr>

							<tr>
								<td>Tanggal Masuk</td>
								<td>:</td>
								<td><?php echo $p->tanggal_masuk ?></td>
							</tr>

							<tr>
								<td>Status</td>
								<td>:</td>
								<td><?php echo $p->status ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	</div>

</div>
<!-- /.container-fluid -->





