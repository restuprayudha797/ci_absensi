        <!-- page content -->

        <?php
        if (validation_errors()) {

          $this->session->set_flashdata('siswa_message  ', ' <div class="alert alert-danger" id="notification" role="alert">
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
          <?= $this->session->flashdata('siswa_message'); ?>
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

                              if ($row['jenis_kelamin'] == 1) {
                                $row['jenis_kelamin'] = 'Laki-Laki';
                              } else {
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
                                  <a href="<?= base_url('siswa/delete/') . $row['nisn'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus kelas <?= $row['nama_kelas'] ?> ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                  <a href="<?= base_url('siswa/update/') . $row['nisn'] ?>" + class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

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