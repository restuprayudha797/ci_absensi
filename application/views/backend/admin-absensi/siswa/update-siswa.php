<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $title ?></title>

    <style>
        .bdr {

            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-radius: 15px;
            border: 2px solid white;
        }

        body {
            background-color: #F9F5F6;
        }
    </style>
</head>

<body class="p-4">
    <div class="container bdr mt-3 p-5 " style="background-color: white;">

        <form class="row g-3">
            <div class="col-md-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="number" class="form-control" id="nisn" value="<?= $siswa['nisn'] ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" id="nis" value="<?= $siswa['nis'] ?>" readonly>
            </div>
            <div class="col-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Siswa" value="<?= $siswa['nama'] ?>">
            </div>
            <div class="col-12">
                <label for="tetala" class="form-label">Tempat, Tgl Lahir</label>
                <input type="text" class="form-control" id="tetala" name="tetala" placeholder="Masukkan tempat tetala" value="<?= $siswa['tetala'] ?>">
            </div>
            <fieldset class="row mb-3 mt-4">
                <div class="col-sm-10">
                    <?php if ($siswa['jenis_kelamin'] == 1) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="1" checked>
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="2">
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    <?php else : ?>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="1">
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="2" checked>
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>

                    <?php endif ?>

                </div>
            </fieldset>
            <div class="col-md-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat'] ?>">
            </div>
            <div class="col-md-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select id="kelas" class="form-select" name="kelas">
                    <option value="<?= $siswa['id_kelas'] ?>"><?= $siswa['nama_kelas'] ?></option>

                    <?php foreach ($kelas as $row) : ?>
                        <option value="<?= $row['id_kelas'] ?>"><?= $row['nama_kelas'] ?></option>
                    <?php endforeach ?>
                    <option value=""> ==== Pilih Kelas ====</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="<?= $siswa['agama'] ?>">
            </div>
            <div class="col-md-2">
                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="<?= $siswa['golongan_darah'] ?>">
            </div>
           
            <div class="col-12">
                <button type="submit" class="btn btn-danger" onclick="confirmCheck('apakah anda yakin untuk menghapus Perubahan?')">kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <script>
        function confirmCheck(pesan) {

            let check = confirm(pesan);

            if (check) {
                javascript: history.back();
            }

        }
    </script>

</body>

</html>