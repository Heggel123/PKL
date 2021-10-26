<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div class="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="content-wrapper">

		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Riwayat Pekerjaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/rpekerjaan/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" class="form-control <?php echo form_error('nama_perusahaan') ? 'is-invalid':'' ?>" id="nama_perusahaan" placeholder="nama_perusahaan" name="nama_perusahaan">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_perusahaan') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="bidang_usaha">Bidang Usaha</label>
                    <input type="text" class="form-control <?php echo form_error('bidang_usaha') ? 'is-invalid':'' ?>" id="bidang_usaha" placeholder="bidang_usaha" name="bidang_usaha">
                    <div class="invalid-feedback">
                        <?php echo form_error('bidang_usaha') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="telp">Telp</label>
                    <input type="text" class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>" id="telp" placeholder="telp" name="telp">
                    <div class="invalid-feedback">
                        <?php echo form_error('telp') ?>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control <?php echo form_error('website') ? 'is-invalid':'' ?>" id="website" placeholder="website" name="website">
                    <div class="invalid-feedback">
                      <?php echo form_error('website') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <input type="text" class="form-control <?php echo form_error('tahun_masuk') ? 'is-invalid':'' ?>" id="tahun_masuk" placeholder="tahun_masuk" name="tahun_masuk">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun_masuk') ?>
                    </div>
                  </div>                  
                  <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
    
</body>
</html>