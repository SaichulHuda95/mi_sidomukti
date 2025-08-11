<?php include_once("header.php") ?>
<?php include_once("navbar.php") ?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/app/bg_tittle.jpg);">
        <div class="container position-relative">
            <h1>Kontak Kami</h1>
            <p>Jika Anda memiliki pertanyaan, saran, atau ingin mengetahui lebih lanjut tentang MI Nurul Ulum Sidomukti, jangan ragu untuk menghubungi kami. Kami siap melayani dengan sepenuh hati demi terciptanya komunikasi yang baik antara madrasah dan masyarakat.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index">Beranda</a></li>
                    <li class="current">Kontak Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <!-- Contact Info Boxes -->
            <div class="row gy-4 mb-5">
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Alamat Kami</h4>
                            <p>Prubungan, Sidomukti, Kec. Bungah, Kabupaten Gresik, Jawa Timur 61152</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email</h4>
                            <p>mim.nurul.ulum.sidomukti@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="info-content">
                            <h4>Jam Operasional</h4>
                            <p>Sabtu - Kamis: 06.30 - 13.00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="info-content">
                            <h4>Nomor Telpon</h4>
                            <p>081232643577</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Maps (Full Width) -->
        <div class="map-section" data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7919.741463354669!2d112.49290388709758!3d-7.02447749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77e516c60cdf55%3A0x64b34712dc5d52ce!2sMI%20NURUL%20ULUM%20SIDOMUKTI%20BUNGAH%20GRESIK!5e0!3m2!1sid!2sid!4v1752770584489!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Contact Form Section (Overlapping) -->
        <div class="container form-container-overlap">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-10">
                    <div class="contact-form-wrapper">
                        <h2 class="text-center mb-4">Hubungi Kami</h2>

                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-person"></i>
                                            <input type="text" class="form-control" name="name" placeholder="Nama" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-envelope"></i>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-text-left"></i>
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-chat-dots message-icon"></i>
                                            <textarea class="form-control" name="message" placeholder="Tulis Pesan..." style="height: 180px" required=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Contact Section -->

</main>
<?php include_once("footer.php") ?>