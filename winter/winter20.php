<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../gambar/logo3.png">
    <link href="../bulma/css/bulma.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet" type="text/css">
    <link href="../css-sendiri/pewarnaan.css" rel="stylesheet" type="text/css">
    <title>Anime News</title>
</head>
<body class="warna">
<br>

<nav class="level is-background">
    <p class="level-item has-text-centered">
        <a href="index.php">
            <img src="../gambar/anime.png" alt="" style="height: 60px;"> 
        </a>
    </p>
</nav>

<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <div class="navbar-menu is-active">
        <div class="navbar-start">

            <a href="../index.php" class="navbar-item">
            <span class="icon-text">
                <span class="icon">
                    <i class="fas fa-home"></i>
                </span>
            <span>Home</span>
                </span>
            </a>

            <a href="../jadwal.php" class="navbar-item">
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
                    <a href="../suggest.php" class="navbar-item">
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
        <strong>--Winter 2020--</strong>
    </div>
</div>

<section class="hero is-medium">
    <figure class="image is-3by1">
        <img src="../gambar/hh.jpg">
    </figure>
</section>

<br>

<section class="section">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth has-text-centered has-background-info-light">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Genre</th>
            <th>Studio</th>
            <th>Durasi per Menit</th>
        </tr>
        <?php
        include '../server.php';
        include '../tgl_indo_doang.php';
        date_default_timezone_get("ASIA/JAKARTA");
        $no = 1;
        $win20 = mysqli_query($connect, "SELECT * FROM winter20");
        while($w20 = mysqli_fetch_array($win20)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $w20['nama'];?></td>
                <td><?php echo tgl_indonesia($w20['tanggal']);?></td>
                <td><?php echo $w20['genre'];?></td>
                <td><?php echo $w20['studio'];?></td>
                <td><?php echo $w20['durasi'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>
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