<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Masuk</title>
    <link rel="stylesheet" href="registrasi.css">

    <!-- Custom font "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icon & Bootstrap -->
    <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Bootstrap JS dari file lokal -->
    <script src="..\bootstrap\js\bootstrap.min.js"></script>

    <!-- Logo Tab -->
    <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">

    <style>
        body {
            background-image: url(../img/foto/bg_baru.svg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .navbar {
            background-image: url(../img/icon/navbar.png);
            background-size: cover;
            width: 104%;
            height: 100px;
            display: block;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            border-bottom-left-radius: 20em 28em;
            border-bottom-right-radius: 20em 28em;
            margin-left: -2%;
            margin-right: 0;
            padding: 1rem 0;
            top: 0;
            left: 0;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.325);
            z-index: 100;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 100%;
        }

        .navbar .container a {
            margin-left: 50px;
        }

        .logo {
            width: 200px;
            height: 75px;
            margin-top: -1.5%;
            margin-left: 0;
            margin-right: 5%;
            object-fit: cover;
            display: block;
            transition: 0.3s;
            padding-right: 10px;
        }

        .slogan {
            text-decoration: none;
            margin-top: auto;
            margin-top: 0;
            width: 3000px;
            text-align: left;
            margin-left: 0 auto;
            margin-right: 0 auto;
            padding-left: 20px;
            letter-spacing: 3px;
            color: white;
        }

        .navbar .container .logo:hover {
            filter:invert(100%) !important;
            opacity: 0.7;
        }

        .navbar .masuk-daftar {
            margin-top: 0;
            margin-right: 5%;
        }

        .masuk {
            background-color: #f2f2f2;
            color: #a6a6a6;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .masuk:hover {
            filter:invert(100%) !important;
            opacity: 0.7;
        }

        .daftar {
            background-color: none;
            border: 2px #f2f2f2 solid;
            color: #f2f2f2;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .daftar:hover {
            filter:invert(100%) !important;
            opacity: 0.7;
        }

        /* Alert styles */
        .alert {
            padding: 12px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 15px;
            opacity: 1;
            transition: opacity 0.6s;
        }

        .alert.success {
            background-color: #00d876; /* Green */
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        /* Media query for slogan */
        @media (max-width: 792px) {
            .slogan {
                display: none !important;
            }
        }
    </style>
</head>

<body style="flex-direction: column !important;">

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container d-flex">
            <div class="col-md-3 d-flex">
                <!-- Logo -->
                <a href="..\halaman_utama\halaman_utama.html">
                    <img src="../img/icon/logo.svg" alt="logo" class="logo">
                </a>
            </div>

            <div class="col-md-6 d-flex justify-content-center-start">
                <!-- Slogan -->
                <p class="slogan">
                    Jadi bintang itu pakai yang keren
                </p>
            </div>

            <div class="col-md-3">
                <!-- Tombol Daftar & Masuk -->
                <div class="masuk-daftar">
                    <table>
                        <tr>
                            <td style="padding-left: 10%;"><a href="..\halaman_registrasi\registrasi.html" class="daftar" style="font-weight: bold;">DAFTAR</a></td>
                            <td><a href="..\halaman_masuk\halaman_masuk.html" class="masuk" style="font-weight: bold;">MASUK</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </nav>

    <!-- Isi Website -->
    <div class="isi" style="padding-top: 80px; padding-bottom: 100px; margin: 0; vertical-align: middle; width: 100%; text-align: center;">
        <!-- Judul -->
        <div class="Registrasi-box">
            <div class="registrasi-header">
                <header>Buat Akun Baru</header>
                <!-- Slogan -->
                <p>
                    Jelajahi ribuan busana dengan harga bersaing
                </p>
            </div>

            <!-- Data diri -->
            <form method="post" action="javascript:void(0);" id="registrationForm">
                <!-- Alert messages container (hidden by default) -->
                <div id="alertContainer" style="display: none;"></div>

                <div class="input-box">
                    <input type="text"
                        id="nama_pengguna"
                        class="input-field"
                        name="nama_pengguna"
                        placeholder="Nama Pengguna"
                        required>
                </div>

                <div class="input-box">
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                </div>

                <div class="input-box">
                    <input type="password" name="kata_sandi" class="input-field" placeholder="Kata Sandi" required>
                </div>

                <!-- Submit -->
                <br>
                <div class="Input-Submit">
                    <button type="submit" class="submit-btn">
                        Buat Akun
                    </button>
                </div>
                <br>
            </form>

            <p>Sudah mempunyai akun? <a href="..\halaman_masuk\halaman_masuk.html">Masuk</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <!-- Include your footer content here or link to external footer.css -->
    </footer>

    <!-- Script -->
    <script>
        // Username to lowercase converter
        document.addEventListener('DOMContentLoaded', function() {
            var usernameInput = document.getElementById('nama_pengguna');

            usernameInput.addEventListener('input', function(e) {
                var start = this.selectionStart;
                var end = this.selectionEnd;

                // Convert text to lowercase
                this.value = this.value.toLowerCase();

                // Restore the selection range
                this.setSelectionRange(start, end);
            });

            // Handle form submission (mock functionality)
            document.getElementById('registrationForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // Example of showing success message (frontend only)
                var alertContainer = document.getElementById('alertContainer');
                alertContainer.innerHTML = `
                    <div class="alert success">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <p style="font-size: 14px;">Akun telah berhasil dibuat.</p>
                    </div>
                `;
                alertContainer.style.display = 'block';

                // Add event listener for close button
                var closeButtons = document.getElementsByClassName('closebtn');
                for (var i = 0; i < closeButtons.length; i++) {
                    closeButtons[i].onclick = function() {
                        var div = this.parentElement;
                        div.style.opacity = "0";
                        setTimeout(function(){ div.style.display = "none"; }, 600);
                    };
                }
            });
        });
    </script>
</body>
</html>
