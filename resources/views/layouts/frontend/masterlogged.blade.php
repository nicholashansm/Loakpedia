<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Logged - LoakPedia</title>
    <link rel="stylesheet" href="./LoakPedia/Logged/Project_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <nav>
        <div class="header">
            <a href="/homelogged"><img src="./LoakPedia/Logged/nadiaArtboard 1.png" alt="LoakPedia"></a>
            <div class="menu">

                <ul class="menu-links">

                    <!-- search bar -->
                    <div class="input-box">
                        <i class="uil uil-search"></i>
                        <input type="text" placeholder="Cari barangmu disini...">
                        <button class="button">Cari</button>
                    </div>

                    <!-- menu -->
                    <ul class="navigation">
                        <li><a class="active" href="/homelogged">Beranda</a></li>
                        <li><a href="/productlogged">Produk</a></li>
                        <li><a href="#"><i class='bx bx-bell'>Notifikasi</i> </a></li>
                        <li><a href="#"><i class='bx bxs-bookmarks'>Favorit</i> </a></li>
                        <li><a href="/emptycart"><i class='bx bx-cart'>Belanja</i> </a></li>
                        <li><a href="/toko"><i class='bx bx-store-alt'>Toko</i></a></li>
                        <!-- <li><a href="#"><i class='bx bx-user-circle'>Irwan</i></a></li> -->
                    </ul>

                    <div class="profile">
                        <a href="/profilepage"><img src="./LoakPedia/Logged/user.png" alt=""></a>
                    </div>

                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="foot-content">
            <div class="foot-top">
                <div class="logo-details">
                    <i class="fab fa-slack"></i>
                    <span class="logo_name">LoakPedia</span>
                </div>
                <div class="media-icons">
                    <p>Ikuti kami : </p>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Jelajah</li>
                    <!-- <li><a href="#">Home</a></li> -->
                    <li><a href="#">Kontak Media</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Mulai</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Layanan</li>
                    <li><a href="#">Histori Pesanan</a></li>
                    <li><a href="#">Lacak Pesanan</a></li>
                    <li><a href="#">Diskon</a></li>
                    <li><a href="#">Pengembalian</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Akun</li>
                    <li><a href="Project_Login.html">Profil</a></li>
                    <li><a href="Project_Login.html">Akun Saya</a></li>
                    <li><a href="#">Preferensi</a></li>
                    <li><a href="#">Biaya</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Kategori</li>
                    <li><a href="#">Laptop dan Komputer</a></li>
                    <li><a href="#">Kamera dan Fotografi</a></li>
                    <li><a href="#">Smartphone dan Tablet</a></li>
                    <li><a href="#">Permainan Video dan Konsol</a></li>
                    <li><a href="#">Waterproof Headphone</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright &#169; 2023 <a href="#">LoakPedia</a>All rights reserved</span>
                <span class="policy_term">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>
</body>
</html>
