<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/event.css">
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="company-info">
            <img src="../public/assets/logo.png" alt="Company Logo" class="logo">
            <h1>BMC MOTO CLUB</h1>
        </div>
        <ul class="navbar">
            <div class="home">
                <li><a href="../index.php">Home</a></li>
            </div>
            <div class="profile">
                <li><a href="profile.php">Profile</a></li>
            </div>
            <div class="visi">
                <li><a href="visi_misi.php">Visi dan Misi</a></li>
            </div>
            <div class="produk">
                <li><a href="produk.php">Produk Kami</a></li>
            </div>
            <div class="kontak">
                <li><a href="kontak.php">Kontak Kami</a></li>
            </div>
            <div class="about">
                <li><a href="aboutUs.php"><b>About Us</b></a></li>
            </div>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <ul>
            <li><a href="artikel.php">Artikel</a></li>
            <li><a href="event.php">Event</a></li>
            <li><a href="gallery.php">Gallery Foto</a></li>
            <li><a href="event.php">Klien Kami</a></li>
            <li><a href="#">Login</a></li>
            <ul>
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="content">
        <!-- Isi konten utama di sini -->
        <div class="img-event-container">
            <div class="img-event">
                <h3>Event Adventure Bikers</h3>
                <img src="../public/assets/event_adventure_bikers.jpeg" alt="harley">
                <p>Kegiatan event adventure bikers indonesia</p>
            </div>
            <div class="img-event">
                <h3>Event Kumpulan Motor Besar</h3>
                <img src="../public/assets/event_kumpulan_motor_besar.jpeg" alt="Ducati">
            </div>
            <div class="img-event">
                <h3>Gathering Akbar Bikers</h3>
                <img src="../public/assets/gathering akbar bikers.jpeg" alt="Ducati">
            </div>
            <div class="img-event">
                <h3>Bikers To Camp</h3>
                <img src="../public/assets/bikers to camp.jpeg" alt="Ducati">
            </div>
        </div>
    </main>

    <script src="public/js/script.js"></script>
</body>

</html>