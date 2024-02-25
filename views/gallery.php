<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/gallery.css">
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
            <li><a href="client.php">Klien Kami</a></li>
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
        <h2>Gallery BMC MOTO CLUB :</h2>
        <div class="img-gallery-container">
            <div class="img-gallery">
                <h3>Harley Davidson Touring</h3>
                <img src="../public/assets/Touring_harley.jpeg" alt="harley">
            </div>
            <div class="img-gallery">
                <h3>BMW Mottorad Touring</h3>
                <img src="../public/assets/touring_bmw.jpeg" alt="Ducati">
            </div>
            <div class="img-gallery">
                <h3>Touring BMC ALL CLUB</h3>
                <img src="../public/assets/event_adventure_bikers.jpeg" alt="Ducati">
            </div>
            <div class="img-gallery">
                <h3>GARASI MOTO CLUB</h3>
                <img src="../public/assets/garasi_moto_club_2.jpeg" alt="Ducati">
            </div>
        </div>
    </main>

    <script src="public/js/script.js"></script>
</body>

</html>