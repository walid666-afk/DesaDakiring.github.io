<?php 
include 'template/header.php';
include '../db/connection.php';
 ?>
    <!-- header-start -->
        <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="../img/logo.png" alt="" width="55rem">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="../">Home</a></li>
                                        <li><a href="galeri.php">Galeri</a></li>
                                        <li><a href="peta.php">Peta Desa</a></li>
                                        <li><a href="hubungi.php">Hubungi</a></li>
                                        <li><a class="active" href="#">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg banner-bg-1 overlay2 ptb200">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-1">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>FAQ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- faq-area-start -->
    <div class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Apa itu Desa Dakiring?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                DAKIRING adalah desa di kecamatan SOCAH,BANGKALAN,Jawa TIMUR.Desa Dakiring Mempunyai 5 Dusun, diantaranya yaitu Dusun Gendut, Dusun Tanggungan, Dusun Gunongan, Dusun Pesisir, dan Dusun Buluh. Sebagian Desa Dakiring memiliki topografi wilayah berupa persawahan dan langsung bersebelahan dengan laut jawa...
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Bagaimana kehidupan sosialnya?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                Kehidupan sosial ekonomi masyarakat pada masa
pasca pembangunan tambak udang buatan. Secara umum dapat di katakan
bahwa kehidupan sosial ekonomi masyarakat akan meningkat setelah adanya
pembangunan tambak udang buatan ini. Warga desa Pataonan terutama yang
bertempat tinggal di dusun duwek betoh mencoba berbagai pekerjaan yang
berhubungaan dengan kegiatan perikanan, sehingga membuat penduduknya
mampu memenuhi kebutuhan akan kesejahteraan melalui pekerjaan, namun
untuk saat ini mayoritas penduduk desa tersebut memiliki keterampilan
dibidang perikanan seperti budidaya tambak.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Sejarah Desa Dakiring?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                <p>Pada zaman dahulu kala tepatnya di zamannya Raja-Raja babad tanah
Madura, nama suatu Desa atau wilayah tidak terlepasnya dari suatu
peristiwa atau kejadian yang terjadi disuatu desa tersebut, begitu juganama Desa Pataonan menurut legenda rakyat, konon dahulu kala ada
seorang tokoh yang disegani diwilayah tersebut melakukan Tapa Brata
(Meditasi) di Desa tersebut.</p>
<p>Dalam meditasinya itu beliau berkeinginan mendapatkan suatu pusaka
tersebut, kemudian pada suatu hari beliau melakukan pertapaannya hingga
bertahun-tahun lamanya (Ataonan), sehingga dari peristiwa itulah oleh
masyarakat dijadikan suatu nama Desa menjadi Desa Pataonan disitulah
awalmu mulanya Desa Pataonan terbentuk.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- faq-area-start -->
    
    <!-- footer-start -->
    <footer class="footer-area" style="background-color: #222; color: #ffcc00;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt="" width="50rem"> </a>
                        <p>Kantor Desa Dakiring <br>
                            Jl.Kiayi Marhaban, Dusun Gendut, Kec. Socah, Kab. Bangkalan,Jawa Timur. <br>69161
                        </p>
                        <div class="social-links">
                            <ul>
                                <li><a href="#" style="color: #ffcc00;"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#" style="color: #ffcc00;"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#" style="color: #ffcc00;"> <i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_icon">
                        <div class="office-location">
                            <ul>
                                <li>
                                    <strong>Indonesia</strong>
                                    <strong>Jawa Timur,Indonesia <br>
                                        +62 12345678</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <small style="color: #ffcc00;">Copyright by Desa Dakiring &copy;2025 | <b>KKN Kelompok 15</b></small>
            </center>
        </div>
        
    </footer>
        <?php 
        include 'template/footer.php';
         ?>
    <!--end footer-->