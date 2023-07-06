    <!DOCTYPE html>
    <html>
    <head>
        <title>Data Diri</title>
        <style>
            .profile-img {
                width: 200px;
            }
        </style>
    </head>
    <body>
        <h1>Data Diri Mahasiswa</h1>
        <?php
        $nama = "I Wayan Wahyu Kusuma";
        $umur = 2115101035;
        $prodi = "Ilmu Komputer";
        $alamat = "Jl. Batuyang Gang Kakak Tua Matahari No.8";
        $email = "wahyukusuma1521@gmail.com";
        $gambar = "wahyu_foto.png";
    

        echo "<h2>Nama: $nama</h2>";
        echo "<p>Umur: $umur</p>";
        echo "<p>Prodi: $prodi</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Email: $email</p>";
        echo "<img src='$gambar' alt='Profil' class='profile-img'>";
        ?>
    </body>
    </html>
