<?php
require_once("server.php");

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];

    $input = "INSERT INTO masukan VALUES ('$nama','$tanggal','$kritik', '$saran')";
    mysqli_query($connect, $input);
    header("location: suggest.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="gambar/logo3.png">
    <link href="bulma/css/bulma.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="css-sendiri/pewarnaan.css" rel="stylesheet" type="text/css">
    <title>Anime News</title>
</head>
<body class="warna">

<br>

<nav class="level is-background">
    <p class="level-item has-text-centered">
        <a href="index.php">
            <img src="gambar/anime.png" alt="" style="height: 60px;"> 
        </a>
    </p>
</nav>

<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <div class="navbar-menu is-active">
        <div class="navbar-start">

            <a href="index.php" class="navbar-item">
            <span class="icon-text">
                <span class="icon">
                    <i class="fas fa-home"></i>
                </span>
            <span>Home</span>
                </span>
            </a>

            <a href="jadwal.php" class="navbar-item">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-calendar"></i>
                    </span>
                <span>Jadwal Anime Terbaru</span>
                    </span>
            </a>

            <a href="#" class="navbar-item">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-music"></i>
                    </span>
                <span>Musik Anime</span>
                    </span>
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Lainnya
                </a>

                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fas fa-info"></i>
                        </span>
                    <span>Informasi Tentang Kami</span>
                        </span>
                    </a>
                    <a href="#" class="navbar-item">
                        <span class="icon-text">
                            <span class="icon-text">
                                <span class="icon">
                                    <i class="fas fa-newspaper"></i>
                                </span>
                            </span>
                            <span>Berita Terbaru</span>
                        </span>
                    </a>
                    <a href="#" class="navbar-item">
                        <span class="icon-text">
                            <span class="icon-text">
                                <span class="icon">
                                    <i class="fas fa-hashtag"></i>
                                </span>
                            </span>
                            <span>Kunjungi Sosial Media</span>
                        </span>                          
                    </a>
                    <a href="suggest.php" class="navbar-item">
                        <span class="icon-text">
                            <span class="icon-text">
                                <span class="icon">
                                    <i class="fas fa-pen"></i>
                                </span>
                            </span>
                            <span>Kritik dan Saran</span>
                        </span>
                    </a>
                </div>
            </div>                         
        </div>
                        
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="level-item">
                    <div class="field has-addons">
                        <p class="control has-icons-left">
                        <span class="icon">
                            <i class="fas fa-search"></i>
                        </span>
                            <input class="input" type="text" placeholder="Search">
                        </p>
                        <p class="control">
                            <button class="button is-link">
                                Search
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> 
<div class="container is-fluid ">
        <div class="notification has-text-centered has-background-primary-light">
            <strong>--FORM KRITIK & SARAN--</strong>
        </div>
</div>

<section class="hero is-medium">
        <figure class="image is-3by1">
            <img src="gambar/hh.jpg">
        </figure>
</section>

<br>

<section class="section has-addons is-centered">
    <form class="box has-addons is-centered" action="form_saran.php" method="POST">
        <h2 class="title is-2 has-text-centered">
            Tempat Mengisi Kritik dan Saran
        </h2>
        <div class="field has-addons has-addons-centered">
            <div class="field">
                <label class="label has-text-centered">Username </label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium" type="text" placeholder="Nama" name="nama">
                    <span class="icon is-left">
                        <i class="fas fa-users"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="field has-addons has-addons-centered">
            <div class="field">
                <label class="label has-text-centered">Tanggal dan Jam</label>
                <div class="control has-icons-left has-icons-right">            
                    <input class="input is-medium" type="datetime-local" name="tanggal">
                    <span class="icon is-left">
                        <i class="far fa-calendar-times"></i>
                    </span>
                </div>  
            </div>
        </div>

        <div class="field has-addons has-addons-centered">
            <div class="field">
                <label class="label has-text-centered">Kritik</label>
                <div class="control">
                    <textarea class="textarea is-large" placeholder="Kritik" name="kritik"></textarea>
                </div>
            </div>
        </div>

        <div class="field has-addons has-addons-centered">
            <div class="field">
                <label class="label has-text-centered">Saran</label>
                <div class="control">
                    <textarea class="textarea is-large" placeholder="Saran" name="saran"></textarea>
                </div>
            </div>
        </div>

        <div class="buttons has-addons is-centered">
            <input class="button is-success is-selected" onClick="window.location.href='suggest.php'" name="submit" type="submit" value="Submit">
            <input class="button is-info is-selected" type="reset" value="Reset">
        </div>
    </form>
</section>

<br>

<footer class="footer has-background-link-light">
        <div class="content has-text-centered">
            <p>
                Muhammad Ilham Aqli Dilan
            </p>
            <p>
                1900018366
            </p>
            <p>
                Universitas Ahmad Dahlan
            </p>
            <p>
            Website Ini Dibuat untuk Memenuhi Ujian Akhir Semester pada Mata Kuliah Pemrograman Web.
            </p>

        </div>
</footer>
</body>
</html>