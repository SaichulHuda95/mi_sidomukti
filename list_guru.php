<?php include_once("header.php") ?>
<?php include_once("navbar.php") ?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/app/bg_tittle.jpg);">
        <div class="container position-relative">
            <h1>Data Guru</h1>
            <p>MI Nurul Ulum Sidomukti didukung oleh tenaga pendidik yang kompeten, berdedikasi, dan berakhlak Islami dalam membimbing siswa menuju prestasi dan karakter mulia.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index">Beranda</a></li>
                    <li class="current">Data Guru</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Faculty  Staff Section -->
    <section id="faculty--staff" class="faculty--staff section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="departments-nav">
                        <h4 class="departments-title">Kategori</h4>
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#kepala-madrasah-tab">Kepala Madrasah</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#guru-kelas-tab">Guru Kelas</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#guru-mapel-tab">Guru Mapel</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#guru-agama-tab">Guru Agama</button>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-9" data-aos="fade-up" data-aos-delay="400">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kepala-madrasah-tab">
                            <div class="department-info mb-4">
                                <h3>Kepala Madrasah</h3>
                                <p>Kepala madrasah memimpin dan mengelola seluruh aktivitas di MI Nurul Ulum Sidomukti, mulai dari pengelolaan akademik, kepegawaian, hingga pengembangan mutu pendidikan.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-f-12.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Lisa Wong</h4>
                                            <p class="faculty-title">Department Chair, Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Molecular Biology</span>
                                                <span>Genetics</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:lwong@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="guru-kelas-tab">
                            <div class="department-info mb-4">
                                <h3>Guru Kelas</h3>
                                <p>Guru kelas di MI Nurul Ulum Sidomukti bertanggung jawab mendampingi siswa dalam kegiatan belajar sehari-hari. Mereka tidak hanya mengajarkan pelajaran umum, tetapi juga menanamkan nilai-nilai keislaman, kedisiplinan, dan akhlak mulia.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-m-3.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Jonathan Baker</h4>
                                            <p class="faculty-title">Department Chair, Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Artificial Intelligence</span>
                                                <span>Machine Learning</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:jbaker@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-f-5.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Sarah Wilson</h4>
                                            <p class="faculty-title">Associate Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Data Science</span>
                                                <span>Neural Networks</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-m-7.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Michael Chen</h4>
                                            <p class="faculty-title">Assistant Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Cybersecurity</span>
                                                <span>Blockchain Technology</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:mchen@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-f-9.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Emily Rodriguez</h4>
                                            <p class="faculty-title">Associate Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Software Engineering</span>
                                                <span>Human-Computer Interaction</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:erodriguez@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-m-11.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Robert Williams</h4>
                                            <p class="faculty-title">Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Algorithms</span>
                                                <span>Computational Theory</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:rwilliams@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-f-2.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Angela Davis</h4>
                                            <p class="faculty-title">Department Administrator</p>
                                            <div class="faculty-specialties">
                                                <span>Administration</span>
                                                <span>Student Services</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:adavis@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="guru-mapel-tab">
                            <div class="department-info mb-4">
                                <h3>Guru Mata Pelajaran</h3>
                                <p>Guru mata pelajaran memberikan pengajaran yang lebih fokus pada bidang studi tertentu seperti Bahasa Arab, Matematika, Bahasa Indonesia, dan lainnya, guna menunjang pemahaman siswa secara mendalam.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-f-8.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Patricia Lee</h4>
                                            <p class="faculty-title">Department Chair, Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Algebraic Topology</span>
                                                <span>Number Theory</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:plee@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-m-6.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Thomas Grant</h4>
                                            <p class="faculty-title">Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Analysis</span>
                                                <span>Differential Equations</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:tgrant@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="guru-agama-tab">
                            <div class="department-info mb-4">
                                <h3>Guru Agama</h3>
                                <p>Guru agama berperan penting dalam membina karakter Islami siswa melalui pelajaran seperti Al-Qur’an Hadits, Fiqih, Aqidah Akhlak, dan SKI, serta menjadi teladan dalam kehidupan sehari-hari.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="faculty-card">
                                        <div class="faculty-image">
                                            <img src="assets/img/person/person-m-9.webp" class="img-fluid" alt="Faculty Member">
                                        </div>
                                        <div class="faculty-info">
                                            <h4>Dr. Neil Armstrong</h4>
                                            <p class="faculty-title">Department Chair, Professor</p>
                                            <div class="faculty-specialties">
                                                <span>Quantum Physics</span>
                                                <span>Astrophysics</span>
                                            </div>
                                            <div class="faculty-contact">
                                                <a href="mailto:narmstrong@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                <a href="#" class="profile-link"><i class="bi bi-person"></i> Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Faculty  Staff Section -->

</main>
<?php include_once("footer.php") ?>