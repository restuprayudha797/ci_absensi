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

        <form action="<?= base_url('kelas/update/' . $kelas['id_kelas']) ?>" method="post">
            <div class="content ">
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="number" class="form-control" name="kelas" id="kelas" placeholder="Masukkan Kelas" min="10" max="12" value="<?= $kelas['kelas'] ?>" required>
                </div>
            </div>
            <div class="content ">
                <div class="mb-3">
                    <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Masukkan Nama Jurusan" value="<?= $kelas['nama_jurusan'] ?>" required>
                </div>
            </div>
            <div class="content ">
                <div class="mb-3">
                    <label for="singkatan_jurusan" class="form-label">Singkatan Jurusan</label>
                    <input type="text" class="form-control" name="singkatan_jurusan" id="singkatan_jurusan" placeholder="Masukkan Singkatan Jurusan" value="<?= $kelas['singkatan_jurusan'] ?>" required>
                </div>
            </div>
            <div class="content ">
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Masukkan Nama Kelas" value="<?= $kelas['nama_kelas'] ?>" required>
                </div>
            </div>
            <div class="content ">
                <div class="mb-3">
                    <button type="submit" onclick="confirmCheck('Apakan anda yakin ingin menghapus perubahan ini?')" class="btn btn-danger">Kembali</button>
                    <button type="submit" onclick="confirm('Yakin Ingin Menyimpan Perubahan ?')" class="btn btn-primary">Simpan</button>
                </div>
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