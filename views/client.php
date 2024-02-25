<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/client.css">
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
        <div class="img-client-container">
            <div class="img-client">
                <h3>Harley-Davidson Club Jakarta</h3>
                <img src="../public/assets/harley_davidson.jpeg" alt="harley">
            </div>
            <div class="img-client">
                <h3>Ducati Indonesia</h3>
                <img src="../public/assets/ducati_indonesia.png" alt="Ducati">
            </div>
            <div class="img-client">
                <h3>Honda Riders Community</h3>
                <img src="../public/assets/honda_comunity.jpeg" alt="Honda">
            </div>
            <div class="img-client">
                <h3>Suzuki Owners Club</h3>
                <img src="../public/assets/suzuki_owner.png" alt="Suzuki">
            </div>
            <div class="img-client">
                <h3>BMW Motorrad Club Indonesia</h3>
                <img src="../public/assets/bmw.jpeg" alt="bmw">
            </div>
        </div>

    </main>

    <script src="public/js/script.js"></script>
</body>

</html>