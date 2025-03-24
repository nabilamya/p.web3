<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAJU - Pencarian</title>

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom Font "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Logo Tab -->
    <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* CSS : Navigation Bar */
        .navbar {
            background-image: url(../img/icon/navbar.png);
            background-size: cover;
            border-bottom-left-radius: 20em 28em;
            border-bottom-right-radius: 20em 28em;
            height: 80px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.325);
        }

        .navbar-brand {
            display: flex;
            justify-content: center;
            padding: 0px 0px 0% 0px !important;
            margin: 0px 5px 0px 0px !important;
            transition: 0.5s;
        }

        .navbar-brand:hover {
            filter: invert(100%) !important;
            opacity: 0.7;
        }

        .tombol_pencarian {
            display: block;
            width: 50px;
            height: auto;
            margin: 0 0 0 0;
            border: 1px solid rgba(14, 89, 129, 0.178);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            background: rgb(166, 214, 239) url(../img/icon/icon_cari.svg) no-repeat center / 25% !important;
            transition: 0.1s;
        }

        .tombol_pencarian:hover {
            border: none !important;
            filter: invert(20%) !important;
        }

        .tombol_pencarian:active {
            background-size: 50% !important;
        }

        .bar_pencarian {
            color: rgba(91, 91, 91, 0.57);
            border: 1px solid rgba(14, 89, 129, 0.178);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            text-indent: 12px;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .bar_pencarian input:focus,
        .bar_pencarian input:hover {
            color: #00282b;
            border: 1.5px solid #00282b;
        }

        .base_keranjang, .keranjang {
            margin: auto;
            width: 30px;
            height: 30px;
            display: block;
            transition: 0.3s;
            justify-content: center;
            align-items: center;
        }

        .keranjang:hover {
            transform: scale(1.2);
        }

        .keranjang:active {
            animation: beat 0.3s alternate;
            transform-origin: center;
        }

        @keyframes beat {
            to { transform: scale(1.4); }
        }

        .base_username {
            margin: auto;
            width: auto;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1.5px solid #f2f2f2;
            border-radius: 25px;
            color: #ffffff;
            font-family: "Poppins", sans-serif;
            letter-spacing: 1px;
            padding: 5px 12px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .tulisan {
            overflow: hidden;
            white-space: nowrap !important;
            text-overflow: ellipsis !important;
            max-width: calc(8vw) !important;
            width: auto;
            text-align: center;
        }

        .base_username:hover {
            background-color: #f2f2f2;
            color: rgb(39, 74, 94);
        }

        .base_profil, .profil {
            margin: auto;
            width: auto;
            height: 30px;
            display: flex;
            z-index: 110;
            transition: 0.3s;
            padding-right: 30;
            transition: 0.3s;
            right: 0;
        }

        .profil:hover {
            transform: scale(1.2);
        }

        .profil:active {
            animation: beat 0.3s alternate;
            transform-origin: center;
        }

        .container-fluid {
            max-width: 95% !important;
        }

        @media (max-width: 1245px) {
            .kolom_profil {
                display: none !important;
            }

            .kolom_logo,
            .kolom_pencarian {
                margin-left: 30px;
            }
        }

        @media (max-width: 992px) {
            .kolom_logo {
                margin: 0 0 0 50px;
            }
            .kolom_pencarian {
                margin: auto;
                max-width: 60vw;
            }
            .kolom_keranjang {
                display: none !important;
            }
            .kolom_nama {
                display: none;
            }
            .kolom_profil {
                display: flex !important;
            }
            .kolom_konten {
                width: auto !important;
                margin: 0 0 0 30px;
            }
        }

        @media (max-width: 741px) {
            .kolom_konten {
                display: none !important;
            }
            .kolom_logo {
                width: 20vw !important;
            }
            .kolom_pencarian {
                width: 60vw !important;
            }
        }

        @media (max-width: 540.98px) {
            .kolom_pencarian {
                display: none;
            }
            .kolom_logo {
                margin: 0 0 0 0 !important;
                width: 100% !important;
                align-items: center;
                justify-content: center;
                display: block !important;
            }
            .navbar-brand {
                align-items: center !important;
                justify-content: center !important;
            }
        }

        /* CSS : Isi Website */
        .isi {
            max-width: 100%;
            padding-top: 0px;
            margin: 0;
            overflow-x: hidden;
            padding-bottom: 100px;
        }

        .info-produk-baju .card-title,
        .info-produk-baju .card-text {
            line-clamp: 1;
            overflow: hidden;
            white-space: nowrap !important;
            text-overflow: ellipsis !important;
        }

        .foto_baju {
            min-width: 200px;
            aspect-ratio: 3/4;
            height: auto;
            object-fit: cover;
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            width: 100%;
            bottom: 0;
        }
        .footer .social-links {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }
        .footer .social-links li {
            margin: 0 10px;
        }
        .footer .social-links a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .footer .social-links a:hover {
            color: #ff6347
        }

        .base_profil:hover, .profil:hover {
            transform: scale(1.3);
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="col-2 kolom_logo">
                <a class="navbar-brand" href="../halaman_beranda/halaman_beranda.html">
                    <img src="../img/icon/logo2.png" alt="logo" width="auto" height="auto">
                </a>
            </div>

            <div class="col-7 kolom_pencarian">
                <!-- Bar Pencarian -->
                <form class="d-flex" style="padding-left: 20px;" action="" method="get">
                    <input class="bar_pencarian form-control me-2" name="pencarian" type="search" placeholder="Hari ini mau keren yang mana?" aria-label="Search" required maxlength="60">
                    <button class="tombol_pencarian btn btn-outline-success" type="submit"></button>
                </form>
            </div>

            <div class="col-3 row d-flex justify-content-center kolom_konten">
                <div class="col-auto d-flex kolom_keranjang">
                    <!-- Logo Keranjang -->
                    <button style="border: none; background: transparent;" class="base_keranjang">
                        <img src="..\img\icon\icon_keranjang.svg" alt="keranjang" class="keranjang">
                    </button>
                </div>

                <div class="col-md-6 kolom_nama d-flex">
                    <!-- Nama Pengguna -->
                    <a href="../halaman_list/list_sewa.html" class="base_username" id="username">
                        <div class="tulisan">Username</div>
                    </a>
                </div>

                <div class="col-auto d-flex kolom_profil">
                    <!-- Foto profil -->
                    <a href="../halaman_list/list_sewa.html" class="base_profil">
                        <img src="..\img\icon\profile.jpg" style="transform: scale(1.3); aspect-ratio: 1/1; object-fit: cover;" alt="photo_profil" class="profil rounded-circle border border-success border-opacity-25 shadow">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Isi Website -->
    <div class="isi" style="padding-bottom: 160px;">
        <!-- Content -->
        <div class="container-fluid mt-5">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 bg-light">
                    <ul class="list-group list-group-flush p-2 pt-4">
                        <li class="list-group-item bg-warning">
                            <i class="fas fa-list"></i> Kategori Produk
                        </li>
                        <li class="list-group-item">
                            <a href="../halaman_pencarian/halaman_pencarian.html?pencarian=Cosplay" class="dropdown-item">
                            <i class="fas fa-angle-right"></i> Cosplay
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../halaman_pencarian/halaman_pencarian.html?pencarian=Baju+Adat" class="dropdown-item">
                            <i class="fas fa-angle-right"></i> Baju Adat
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../halaman_pencarian/halaman_pencarian.html?pencarian=Marvel" class="dropdown-item">
                                <i class="fas fa-angle-right"></i> Marvel
                                </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../halaman_pencarian/halaman_pencarian.html?pencarian=Disney" class="dropdown-item">
                                <i class="fas fa-angle-right"></i> Disney
                                </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../halaman_pencarian/halaman_pencarian.html?pencarian=Halloween" class="dropdown-item">
                                <i class="fas fa-angle-right"></i> Halloween
                                </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../halaman_pencarian/halaman_pencarian.html?pencarian=Super+Hero" class="dropdown-item">
                                <i class="fas fa-angle-right"></i> Super Hero
                                </a>
                        </li>
                    </ul>
                </div>

                <!-- Hasil Pencarian -->
                <div class="col-md-10">
                    <p class="text-center fw-light my-4"> Menampilkan hasil pencarian <strong>"Pencarian"</strong>.<p>
                    <div class="row">
                        <!-- Example product card - for demonstration -->
                        <div class="col-md-3 mb-3">
                            <div class="info-produk-baju card">
                                <img src="../img/product-placeholder.jpg" class="card-img-top img-fluid foto_baju" alt="Product">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Kategori Produk</p>
                                    <table>
                                        <tr style="padding-bottom: 10px">
                                            <td style="padding-right:10px;">Tersewa <span style="font-weight: 750;">10</span> Kali</td>
                                            <td>|</td>
                                            <td style="padding-left:10px;">Rating <span style="font-weight: 750;">4.5</span> <i class="fa-solid fa-star" style="color: #FFD43B;"></i></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <button type="button" class="btn btn-primary">Rp 50.000/hari</button>
                                </div>
                            </div>
                        </div>

                        <!-- More product cards can be added here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 WAJU - Sewa Kostum Online</p>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
