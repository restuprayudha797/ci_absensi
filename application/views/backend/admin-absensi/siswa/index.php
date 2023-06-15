        <!-- page content -->

        <?php
        if (validation_errors()) {

          $this->session->set_flashdata('kelas_message', ' <div class="alert alert-danger" id="notification" role="alert">
            Data Yang Anda Masukkan Tidak Lengkap Mohon Periksa Kembali!
            </div>');
        }
        ?>

        <div class="right_col" role="main">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
          </nav>
          <?= $this->session->flashdata('kelas_message'); ?>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title ">
                  <div class="d-flex justify-content-center ">
                    <div class="p-2 ">
                      <h3><?= $title; ?></h3>
                    </div>
                    <div class="ml-auto p-2 bd-highlight">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahJurusan">
                        Tambah Kelas
                      </button>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">

                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>nisn</th>
                              <th>Nama</th>
                              <th>Kelas</th>
                              <th>Jenis Kelamin</th>
                              <th>No Tlp wali m</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php $i = 1;
                            foreach ($siswa as $row) :

                              if($row['jenis_kelamin'] == 1){
                                $row['jenis_kelamin'] = 'Laki-Laki';
                              }else{
                                $row['jenis_kelamin'] = 'Perempuan';

                              }
                            ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['nama_kelas'] ?></td>
                                <td><?= $row['jenis_kelamin'] ?></td>
                                <td><?= $row['no_telp_wali_murid'] ?></td>
                                <td>
                                  <a href="<?= base_url('kelas/delete/') . $row['id_kelas'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus kelas <?= $row['nama_kelas'] ?> ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                  <a href="<?= base_url('kelas/update/') . $row['id_kelas'] ?>" + class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

                                </td>
                              </tr>
                              <?php $i++ ?>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- Tambah Modal -->
        <div class="modal fade" id="tambahJurusan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('kelas') ?>" method="post">

                <div class="modal-body">
                  <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="number" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas" min="10" max="12">
                    <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nama_jurusan">Nama Jurusan</label>
                    <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Masukkan Nama Jurusan">
                    <?= form_error('nama_jurusan', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="singkatan_jurusan">Singkatan singkatan Jrusan</label>
                    <input type="text" class="form-control" id="singkatan_jurusan" name="singkatan_jurusan" placeholder="Masukkan Singkatan Jurusan">
                    <?= form_error('singkatan_jurusan', '<small class="text-danger">', '</small>'); ?>

                  </div>
                  <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Singkatan Nama Kelas">
                    <?= form_error('nama_kelas', '<small class="text-danger">', '</small>'); ?>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!-- end Modal -->