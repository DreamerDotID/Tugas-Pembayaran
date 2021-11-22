    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
      <?php endif; ?>
      <?= $this->session->flashdata('pesan'); ?>
     <!-- Main content -->
    <div class="content">   
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                <tr>
                  <td>No</td>
                  <td>NIS</td>
                  <td>Nama Siswa</td>
                  <td>Kelas</td>
                  <td>Kompetensi Keahlian</td>
                  <td>Alamat</td>
                  <td>No. Telepon</td>
                  <td>Tahun Ajaran</td>
                  <td><i class="fas fa-cogs"></i></td>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($siswa as $g) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $g['nis']; ?></td>
                    <td><?= $g['nama_siswa']; ?></td>
                    <td><?= $g['kelas']; ?></td>
                    <td><?= $g['kompetensi_keahlian']; ?></td>
                    <td><?= $g['alamat']; ?></td>
                    <td><?= $g['no_telp']; ?></td>
                    <td><?= $g['tahun_ajaran']; ?></td>
                    <td>
                      <a href="<?= base_url('siswa/ubah/').$g['id_siswa']; ?>" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="<?= base_url('siswa/hapus/') . $g['id_siswa']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="card-footer clearfix">
           <a href=" <?php echo base_url('siswa/tambah') ?> " class="btn btn-xs btn-primary">Tambah Data</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
