<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="company-info">
            <img src="public/assets/logo.png" alt="Company Logo" class="logo">
            <h1>BMC MOTO CLUB</h1>
        </div>
        <ul class="navbar">
            <div class="home">
                <li><a href="index.php">Home</a></li>
            </div>
            <div class="profile">
                <li><a href="views/profile.php">Profile</a></li>
            </div>
            <div class="visi">
                <li><a href="views/visi_misi.php">Visi dan Misi</a></li>
            </div>
            <div class="produk">
                <li><a href="views/produk.php">Produk Kami</a></li>
            </div>
            <div class="kontak">
                <li><a href="views/kontak.php">Kontak Kami</a></li>
            </div>
            <div class="about">
                <li><a href="views/aboutUs.php"><b>About Us</b></a></li>
            </div>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <ul>
            <li><a href="views/artikel.php">Artikel</a></li>
            <li><a href="views/event.php">Event</a></li>
            <li><a href="views/gallery.php">Gallery Foto</a></li>
            <li><a href="views/client.php">Klien Kami</a></li>
            <li><a href="index.php?page=login">Login</a></li>
            <ul>
                <li><a href="index.php?page=signin">Sign In</a></li>
                <li><a href="index.php?page=signup">Sign Up</a></li>
            </ul>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="content">
        <!-- Isi konten utama di sini -->
        <div data-aos="slide-left" data-aos-duration="1000"> <h3>Selamat Datang di BMC Moto Club!</h3> </div>
        <div data-aos="fade-in" data-aos-duration="3000"><p>Bergabunglah dengan kami dalam petualangan tak terlupakan melintasi dunia motor yang menarik dan penuh semangat. Di BMC Moto Club, kami tidak hanya sekadar klub motor; kami adalah keluarga yang saling mendukung dan terinspirasi.</p> </div>

        <div data-aos="slide-left" data-aos-duration="2000"> <h3>Jelajahi Dunia Motor Bersama Kami</h3></div>
        <div data-aos="fade-in" data-aos-duration="3000"> <p>Dengan pengalaman bertahun-tahun dalam menghadirkan kegembiraan dan petualangan, kami telah menjadi pusat komunitas motor yang menghubungkan ribuan penggemar motor di seluruh dunia. Dari tur wisata motor yang epik hingga acara sosial yang menyenangkan, kami menyediakan platform untuk Anda mengeksplorasi, berbagi, dan merayakan cinta Anda pada motor.</p></div>

        <div data-aos="slide-left" data-aos-duration="3000"> <h3>Mengapa Memilih BMC Moto Club?</h3> </div>
        <div data-aos="fade-in" data-aos-duration="3000">
        <ol>
            <li><b> Pengalaman Terbaik:</b> Kami menyediakan pengalaman motor terbaik dengan kombinasi antara keamanan, kebersamaan, dan petualangan yang tak terlupakan.</li>
            <li><b> Komunitas yang Solid:</b> Bergabunglah dengan keluarga kami dan temukan hubungan yang kuat dengan sesama penggemar motor yang bersemangat.</li>
            <li><b> Kegiatan Seru:</b> Dari tur wisata motor hingga lokakarya teknis, kami menyelenggarakan berbagai acara yang dirancang untuk memenuhi berbagai minat dan kebutuhan.</li>
        </ol>
        </div>

        <div data-aos="slide-left" data-aos-duration="2000"><h3>Bergabunglah dengan Kami Sekarang!</h3> </div>
        <div data-aos="fade-in" data-aos-duration="3000"><p>Jadilah bagian dari BMC Moto Club dan temukan kegembiraan baru dalam setiap perjalanan Anda. Bergabunglah dengan komunitas kami hari ini dan temukan apa yang membuat dunia motor begitu mengagumkan!</p></div>
        <h2><a href="views/kontak.php">Hubungi Kami</a></div> untuk Informasi Lebih Lanjut!</h2>
    </main>

    <!-- Memuat library AOS dari CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

     <!-- Inisialisasi AOS -->
  <script>
    AOS.init();
  </script>
</body>

</html>