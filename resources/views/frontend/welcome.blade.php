<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking Covid</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="00i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->


    <!-- ======= Header ======= -->
    <header id="header" class="top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">Tracking Covid<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#pencengahan">Pencengahan</a></li>
                    <li><a href="#gejala">Gejala</a></a></li>
                    <li><a href="#kontak">Kontak</a></a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Perkembangan COVID-19</h1>
            <h1><span>__________________________</span></h1>
            <h1><span>Lindungi Diri
                    Lindungi Sesama</span></h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <p></p>
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="icofont-sad"></i></div>
                            <h4 class="title"><a href="">Jumlah Positif</a></h4>
                            <p class="description">{{ $positif }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="icofont-wink-smile"></i></div>
                            <h4 class="title"><a href="">Jumlah Sembuh</a></h4>
                            <p class="description">{{ $sembuh }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="icofont-crying"></i></div>
                            <h4 class="title"><a href="">Jumlah Meninggal</a></h4>
                            <p class="description">{{ $meninggal }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Kasus Global</a></h4>
                            <p class="description"></p><?php echo $getglobal['value']; ?>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======== Table Section Lokal ======= -->
        <section id="provinsi" class="provinsi">
        </section>


        <div class="section-title" data-aos="zoom-out">
            <h2>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h2>
        </div>

        <div class="row content" data-aos="fade-up">

            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                <table class="table table-bordered table-striped mb-0 " width="100%">
                    <thead>
                        <tr>
                            <th scope="col">
                                <center>No</center>
                            </th>
                            <th scope="col">
                                <center>Provinsi</center>
                            </th>
                            <th scope="col">
                                <center>Jumlah Positif</center>
                            </th>
                            <th scope="col">
                                <center>Jumlah Sembuh</center>
                            </th>
                            <th scope="col">
                                <center>Jumlah Meninggal</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($lokal as $data)
                            <tr>
                                <th scope="row">
                                    <center>{{ $no++ }}</center>
                                </th>
                                <td>
                                    <center>{{ $data->nama_provinsi }}</center>
                                </td>
                                <td>
                                    <center>{{ number_format($data->jumlah_positif) }}</center>
                                </td>
                                <td>
                                    <center>{{ number_format($data->jumlah_sembuh) }}</center>
                                </td>
                                <td>
                                    <center>{{ number_format($data->jumlah_meninggal) }}</center>
                                </td>
                            </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        </div>
        </div>
        </section>
        <!-- ======== End Table Section Lokal ======= -->

        <!-- ======== Table Section Global ======= -->
        <section id="global" class="global">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Kasus Coronavirus Global</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Negara</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($globall as $data)
                                    <tr>
                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo $data['attributes']['Country_Region']; ?></td>
                                        <td> <?php echo number_format($data['attributes']['Confirmed']);
                                            ?></td>
                                        <td><?php echo number_format($data['attributes']['Recovered']);
                                            ?></td>
                                        <td><?php echo number_format($data['attributes']['Deaths']); ?></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table Section Global ======= -->
        <!-- ======= About Section ======= -->
        <section id="tentang" class="tentang">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang</h2>
                    <h3>Virus <span> Corona </span></h3>
                    <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang
                        menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona
                        bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga
                        kematian.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('frontend/assets/img/1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang
                            yang terpapar virus ini akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa
                            perlu dirawat di rumah sakit.</h3>
                        <p>
                            Penyebab dari wabah ini adalah coronavirus jenis baru yang disebut dengan novel coronavirus
                            2019 (2019-nCoV). Penyakit ini termasuk dalam golongan virus yang sama dengan virus penyebab
                            severe acute respiratory syndrome (SARS) dan Middle-East respiratory syndrome (MERS).
                        </p>
                    </div>
                </div>

            </div>




            <!-- ======= Clients Section ======= -->

            <!-- ======= PENCENGAHAN VIRUS CORONA ======= -->
            <section id="pencengahan" class="pencengahan">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Pencengahan</h2>
                        <h3>Bagaimana <span> Pencengahan Virus Corona?</span></h3>
                        <p>Lindungi diri Anda dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait virus
                            ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh otoritas
                            kesehatan setempat.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class=""></i></div>
                                <h4><a href="">1. Mencuci tangan dengan benar</a></h4>
                                <p>Cucilah tangan dengan air mengalir dan sabun, setidaknya selama 20 detik. </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class=""></i></div>
                                <h4><a href="">2. Menggunakan masker</a></h4>
                                <p>Banyak yang menggunakan masker kain untuk mencegah infeksi virus Corona, padahal
                                    masker tersebut belum tentu efektif. </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class=""></i></div>
                                <h4><a href="">3. Menjaga daya tahan tubuh</a></h4>
                                <p>Untuk menjaga dan meningkatkan daya tahan tubuh, Anda disarankan untuk mengonsumsi
                                    makanan sehat, seperti sayuran dan buah-buahan, dan makanan berprotein, seperti
                                    telur, ikan, dan daging tanpa lemak.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class=""></i></div>
                                <h4><a href="">4. Menerapkan physical distancing dan isolasi mandiri</a></h4>
                                <p>Pembatasan fisik atau physical distancing adalah salah satu langkah penting untuk
                                    memutus mata rantai penyebaran virus Corona. </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class=""></i></div>
                                <h4><a href="">5. Membersihkan rumah dan melakukan disinfeksi secara rutin</a></h4>
                                <p>elain kebersihan diri, menjaga kebersihan rumah juga sangat penting dilakukan selama
                                    pandemi COVID-19 berlangsung.</p>
                            </div>
                        </div>


            </section><!-- End Services Section -->



            <!-- ======= GEJALA  Section ======= -->
            <section id="gejala" class="gejala">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Gejala Virus Corona</h2>
                        <h3>Bagaimana <span>Gejala Virus Corona?</span></h3>
                        <p>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang
                            yang terpapar virus ini akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa
                            perlu dirawat di rumah sakit.
                        </p>
                    </div>

                    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                        <li>
                            <a data-toggle="collapse" class="" href="#faq1">Gejala yang paling umum?
                                <i class="icofont-simple-up"></i></a>
                            <div id="faq1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    1. Demam.
                                    <br>
                                    2. Batuk Kering.
                                    <br>
                                    3. Kelelahan.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq2" class="collapsed">Gejala yang sedikit tidak umum? <i
                                    class="icofont-simple-up"></i></a>
                            <div id="faq2" class="collapse" data-parent=".faq-list">
                                <p>
                                    1. rasa tidak nyaman dan nyeri
                                    <br>
                                    2. nyeri tenggorokan
                                    <br>
                                    3. diare
                                    <br>
                                    4. konjungtivitis (mata merah)
                                    <br>
                                    5. sakit kepala
                                    <br>
                                    6. hilangnya indera perasa atau penciuman
                                    <br>
                                    7. ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki

                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq3" class="collapsed">Gejala serius? <i
                                    class="icofont-simple-up"></i></a>
                            <div id="faq3" class="collapse" data-parent=".faq-list">
                                <p>
                                    1. kesulitan bernapas atau sesak napas
                                    <br>
                                    2. nyeri dada atau rasa tertekan pada dada
                                    <br>
                                    3. hilangnya kemampuan berbicara atau bergerak
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq4" class="collapsed">Segera cari bantuan medis jika Anda
                                mengalami gejala serius. Selalu hubungi dokter atau fasilitas kesehatan yang ingin Anda
                                tuju sebelum mengunjunginya.
                                <i class="icofont-simple-up"></i></a>
                            <div id="faq4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Orang dengan gejala ringan yang dinyatakan sehat harus melakukan perawatan mandiri
                                    di rumah.
                                    Rata-rata gejala akan muncul 5–6 hari setelah seseorang pertama kali terinfeksi
                                    virus ini, tetapi bisa juga 14 hari setelah terinfeksi
                                </p>
                            </div>
                        </li>


            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Kotak Section ======= -->
            <section id="kontak" class="kontak">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Kotak</h2>
                        <h3><span>Hubungi kami</span></h3>
                        <p>Segera cari bantuan medis jika Anda
                            mengalami gejala serius. Selalu hubungi dokter atau fasilitas kesehatan yang ingin Anda
                            tuju sebelum mengunjunginya.</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>
                                    Alamat kami</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Kami</h3>
                                <p>Siskaprak@gmail.com</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Telepon</h3>
                                <p>0823 7874 738</p>
                            </div>
                        </div>

                    </div>


            </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{--  --}}
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Bandung<span>.</span></h3>
                        <p>
                            Cibaduyut <br>
                            <br>
                            <br><br>
                            <strong>Telepon:</strong>0823 7874 738 <br>
                            <strong>Email:</strong> Siskaprak@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Tautan Berguna</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kotak Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pencengahan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gejala</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>pelayanan kami</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Jejaring Sosial Kami</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
