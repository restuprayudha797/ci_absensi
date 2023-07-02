<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Izin Absensi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }

    body {
        overflow: hidden;
    }

    .background {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(0deg,
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)),
            url("https://lh3.googleusercontent.com/p/AF1QipNVcq3rXl0T34vKZ6fGOL_oIEz-azRjSR12uOKe=s680-w680-h510");
        background-color: rgba(0, 0, 0, 0.35);
        background-size: cover;
        background-position: center;
        position: absolute;
        justify-content: center;
        align-items: center;
        text-align: center;
        z-index: -9999;
    }

    .content {
        z-index: 9999;
        border: 1px solid #001C30;
    }

    .myContainer {

        width: 50%;
        margin: 50px auto;
        border-radius: 15px;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    @media screen and (max-width: 768px) {
        .myContainer {
            width: 90%;
            margin: 100px auto;


        }
    }

    @media screen and (max-width: 321px) {
        .myContainer {
            width: 95%;
            margin: 10px auto;


        }
    }
</style>

<body>
    <div class="background"></div>

    <div class="content">
        <div class="myContainer  p-5">
            <form method="post" action="<?= base_url('izin'); ?>">
                <div class="datalist">
                    <label for="#exampleDataList" class="form-label">Nama / NISN</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="exampleDataList" placeholder="pilih nama">
                    <datalist id="datalistOptions">
                        <?php foreach ($siswa as $row) : ?>
                            <option value="<?= $row['nisn'] ?>"><?= $row['nama'] ?> <?= $row['nama'] ?></option>
                        <?php endforeach ?>
                        <?= form_error('exampleDataList', '<small class="text-danger">', '</small>'); ?>


                    </datalist>
                </div>
                <div class="form-check mt-3 mb-3">
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="status" id="status" value="2">
                        <label class="form-check-label" for="status">
                            Izin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="3" name="status" id="status">
                        <label class="form-check-label" for="status">
                            Sakit
                        </label>
                    </div>
                    <?= form_error('status', '<small class="text-danger">', '</small>'); ?>

                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                    <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>

                </div>
                <div class="mb-3">
                    <a href="<?= base_url('beranda') ?>" onclick="return confirm('Yakin ingin membuang perubahan!')" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>


            </form>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>