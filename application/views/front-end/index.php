<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="gps track limbungan merupakan sebuah karya anak bangsa dari smk muhammadiyah 2 pekanbaru yang di rancang khusu untuk menjaga kendaraan anda, gps track limbungan juga menyediakan berbagai device yang dirancang khusus: sepeda motor, mobil, truck, eskapator dsb.">
    <meta content="gps, gps track limbungan, gps pku, gps pekanbaru, shield tracker, gpstrack, gpstracklimbungan, gps tracker, gps tv, gps smart" name="keywords">
    <meta name="author" content="gps track limbungan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Absensi</title>
    <link rel="stylesheet" href="<?= base_url('assets/assets-frontend/css/style.css') ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navigation">
        <div class="content-nav">
            <img src="https://www.smkmhd2pku.sch.id/assets/img/identitas/smkmuda.png" alt="Logo Image" class="image-nav" />

            <ul class="menu-nav">
                <div class="menu-icon close-mobile-btn">
                    <span class="material-symbols-outlined"> close </span>
                </div>

                <li><a href="#home">Home</a></li>
                <li><a href="#instruction">Instruction</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="menu-icon mobile-btn">
                <span class="material-symbols-outlined"> menu </span>
            </div>
        </div>
    </nav>


    <div id="home" class="background">
        <div class="content">
            <h1>Welcome to <span>Absensi website</span></h1>
            <p>
                "Sederhana, Cepat, dan Akurat" - Absensi menggunakan ID Card
                memastikan pencatatan kehadiran yang tepat waktu dan akurat.
            </p>
            <div class="button-content">
                <a href="" class="button"><span class="material-symbols-outlined"> person </span> Wali
                    Kelas</a>
                <a href="" class="button"><span class="material-symbols-outlined"> group </span> Wali
                    Murid</a>
            </div>
        </div>
    </div>

    <div class="container-grey">

        <div id="instruction" class="instruction">
            <h1 class="name">Instruction <span></span></h1>
            <div class="step">
                <img src="https://img.freepik.com/free-vector/features-overview-concept-illustration_114360-1481.jpg?w=740&t=st=1685678812~exp=1685679412~hmac=55c23371b2b36b6fee12fb716a814bfcdac99d34c2f65b3b704436d42201e0db" alt="ID Card" width="300" />
                <div class="data">
                    <h2>Langkah 1</h2>
                    <p>Siapkan ID Card Anda.</p>
                </div>
            </div>

            <div class="step">
                <img src="https://img.freepik.com/free-vector/features-overview-concept-illustration_114360-1481.jpg?w=740&t=st=1685678812~exp=1685679412~hmac=55c23371b2b36b6fee12fb716a814bfcdac99d34c2f65b3b704436d42201e0db" alt="Mesin Absensi" width="300" />
                <div class="data">
                    <h2>Langkah 2</h2>
                    <p>Pastikan mesin absensi dalam keadaan siap.</p>
                </div>
            </div>

            <div class="step">
                <img src="https://img.freepik.com/free-vector/features-overview-concept-illustration_114360-1481.jpg?w=740&t=st=1685678812~exp=1685679412~hmac=55c23371b2b36b6fee12fb716a814bfcdac99d34c2f65b3b704436d42201e0db" alt="ID Card ke Mesin Absensi" width="300" />
                <div class="data">
                    <h2>Langkah 3</h2>
                    <p>Dekatkan ID Card Anda ke mesin absensi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="faq" class="faq">
            <h1 class="name name-faq">Pertanyaan <span></span></h1>
            <div class="faq-list">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <p>Apa itu Lorem Ipsum?</p>
                    <span class="material-symbols-outlined faq-icon"> add </span>
                </div>
                <div class="faq-answer">
                    Lorem Ipsum adalah teks contoh yang digunakan dalam industri
                    percetakan dan penataan huruf. Teks Lorem Ipsum telah menjadi standar
                    contoh teks sejak tahun 1500an.
                </div>
            </div>

            <div class="faq-list">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <p>Bagaimana cara menggunakan fitur X?</p>
                    <span class="material-symbols-outlined faq-icon"> add </span>
                </div>
                <div class="faq-answer">
                    Untuk menggunakan fitur X, ikuti langkah-langkah berikut: ...
                </div>
            </div>

            <div class="faq-list">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <p>Apakah website ini gratis?</p>
                    <span class="material-symbols-outlined faq-icon"> add </span>
                </div>
                <div class="faq-answer">
                    Iya, website ini 100% gratis untuk digunakan.
                </div>
            </div>
        </div>

        <div id="contact" class="contact">
            <h1 class="name">Bantuan dan pesan <span></span></h1>
            <form>
                <div class="data-user">
                    <div class="nama">
                        <span class="material-symbols-outlined"> person </span>
                        <input type="text" name="name" id="name" placeholder="Nama" required />
                    </div>

                    <div class="email">
                        <span class="material-symbols-outlined"> mail </span>
                        <input type="email" name="email" id="email" placeholder="Email" required />
                    </div>
                </div>

                <div class="pesan">
                    <span class="material-symbols-outlined"> chat </span>
                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Pesan" required></textarea>
                </div>

                <button type="submit">Kirim sekarang</button>
            </form>
        </div>
    </div>

    <div class="container-grey">
        <div class="developer">
            <h1 class="name">Developer <span></span></h1>
            <div class="user-data">
                <div class="dev-data">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/user-1.jpeg" alt="User Image" />
                    <p class="dev-name">M.Restu Prayudha</p>
                    <p class="dev-work">Full-Stack Developer </p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="dev-data">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/user-2.jpeg" alt="User Image" />
                    <p class="dev-name">Zidan Rafif Pratama</p>
                    <p class="dev-work">IOT Enginer</p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="dev-data">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/chiko.jpeg" alt="User Image" />
                    <p class="dev-name">Chiko ID</p>
                    <p class="dev-work">Web Developer</p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="dev-data">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/user-4.jpeg" alt="User Image" />
                    <p class="dev-name">Nabil</p>
                    <p class="dev-work">Front-End Developer</p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="dev-data">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/user-5.jpeg" alt="User Image" />
                    <p class="dev-name">Syaqil</p>
                    <p class="dev-work">Front-End Developer</p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="dev-data">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/user-6.jpeg" alt="User Image" />
                    <p class="dev-name">Gilang</p>
                    <p class="dev-work">Front-End Developer</p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="dev-data mid">
                    <img class="image" src="<?= base_url('assets/assets-frontend/img') ?>/user-3.jpeg" alt="User Image" />
                    <p class="dev-name">Metika Putri</p>
                    <p class="dev-work">Administrasi</p>
                    <div class="dev-deks">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="address">
            <h1 class="judul">SMK Muhammadiyah 2 Pekanbaru</h1>
            <p class="alamat">
                <i class="fa-solid fa-location-dot"></i> Jl. KH. Ahmad Dahlan No. 90
                Pekanbaru, Riau
            </p>
            <p class="telp">
                <i class="fa-solid fa-phone"></i> Telepon : 0761-35778
            </p>
            <p class="mail">
                <i class="fa-solid fa-envelope"></i> Email :
                smkmudapekanbaru@gmail.com
            </p>
        </div>

        <div class="medsos">
            <ul>
                <li>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>

                <li>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </li>

                <li>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </li>

                <li>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</body>
<script src="<?= base_url('assets/assets-frontend/js') ?>/script.js"></script>

</html>