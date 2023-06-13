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
                   <th>Kelas</th>
                   <th>Nama Jurusan</th>
                   <th>Singkatan Jurusan</th>
                   <th>Nama Kelas</th>
                   <th>Aksi</th>
                  </tr>
                 </thead>

                 <tbody>
                  <?php $i = 1;
                  foreach ($kelas as $row) :
                  ?>
                   <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['nama_jurusan'] ?></td>
                    <td><?= $row['singkatan_jurusan'] ?></td>
                    <td><?= $row['nama_kelas'] ?></td>
                    <td>
                     <a href="<?= base_url('kelas/delete/') . $row['id_kelas'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus kelas <?= $row['nama_kelas'] ?> ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                     <a href="<?= base_url('kelas/delete/') . $row['id_kelas'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                     
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
           <form action="<?= base_url('siswa/dataJurusan') ?>" method="post">

            <div class="modal-body">
             <div class="form-group">
              <label for="nama_jurusan">Nama Jurusan</label>
              <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Masukkan Nama Jurusan">
              <?= form_error('nama_jurusan', '<small class="text-danger">', '</small>'); ?>

             </div>
             <div class="form-group">
              <label for="jurusan">Singkatan Jurusan</label>
              <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Singkatan Jurusan">
              <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>

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

        <?php foreach ($dataJurusan as $row) : ?>
         <!-- Update Modal -->
         <div class="modal fade" id="update<?= $row['id_jurusan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
           <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Update Data Jurusan <?= $row['id_jurusan'] ?></h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
            </div>
            <form action="<?= base_url('siswa/updateJurusan/') . $row['id_jurusan'] ?>" method="post">

             <div class="modal-body">
              <div class="form-group">
               <label for="nama_jurusan">Nama Jurusan</label>
               <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?= $row['nama_jurusan'] ?>" placeholder="Masukkan Nama Jurusan">
               <?= form_error('nama_jurusan', '<small class="text-danger">', '</small>'); ?>

              </div>
              <div class="form-group">
               <label for="jurusan">Singkatan Jurusan</label>
               <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $row['jurusan'] ?>" placeholder="Masukkan Singkatan Jurusan">
               <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>

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
         <!-- end Update Modal -->
        <?php endforeach ?>