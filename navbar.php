<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="/index" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/app/logo_navbar.png" alt="" />
                <h1 class="sitename">MI Nurul Ulum Sidomukti</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index" class="<?= ($current_page == 'index') ? 'active' : '' ?>">Beranda</a></li>
                    <li class="dropdown">
                        <a href="profil" class="<?= ($current_page == 'profil' || $current_page == 'visi_misi' || $current_page == 'struktur_organisasi' || $current_page == 'prasarana') ? 'active' : '' ?>"><span>Profil Sekolah</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="profil">Tentang Sekolah</a></li>
                            <li><a href="visi_misi">Visi Misi</a></li>
                            <li><a href="struktur_organisasi">Struktur Organisasi</a></li>
                            <li><a href="prasarana">Sarana & Prasarana</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="kegiatan" class="<?= ($current_page == 'kegiatan' || $current_page == 'prestasi' || $current_page == 'galeri') ? 'active' : '' ?>"><span>Kegiatan</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="kegiatan">Ekstrakurikuler</a></li>
                            <li><a href="prestasi">Prestasi</a></li>
                            <li><a href="galeri">Galeri Foto</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="list_guru" class="<?= ($current_page == 'list_guru' || $current_page == 'staff') ? 'active' : '' ?>"><span>Tenaga Pendidik</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="list_guru">Data Guru</a></li>
                            <li><a href="staff">Staff & Karyawan</a></li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="berita"><span>Berita</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="berita">Informasi Terkini</a></li>
                            <li><a href="pengumuman">Pengumuman</a></li>
                        </ul>
                    </li> -->
                    <li><a href="contact" class="<?= ($current_page == 'contact') ? 'active' : '' ?>">Kontak Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>