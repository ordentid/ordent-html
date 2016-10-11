<?php
include "header.php";
?>

    <header style="background-image: url('img/desktop.jpg');">
        <div class="intro-content">
            <!-- <img src="img/profile.png" class="img-responsive img-centered" alt=""> -->
            <div class="brand-name">We make web apps development</div>
        </div>
    </header>

    <section id="about" class="bg-blue">
        <div class="container-fluid">
            <div class="row text-center">
            	<div class="col-lg-2"></div>
                <div class="col-lg-8 wow fadeIn">
                    <h3>We help the people to order of intelligent</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <hr class="colored">
            	<div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </section>
    

    <section>
        <div class="container text-center wow fadeIn">
            <h2>Portfolio</h2>
            <hr class="colored">
            <p>Here are some other projects that we've worked on.</p>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <ul id="filters" class="clearfix">
                            <li>
                                <span class="filter active" data-filter="identity graphic logo web">All</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="identity">Identity</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="graphic">Graphic</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="web">Web</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="portfoliolist">
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/identity/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Generic Inc.</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/web/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Brands</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/graphic/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Excellence</a>
                                        <span class="text-category">Poster Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/web/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">YouTV</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/graphic/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Office Supplies</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/web/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Fooder</a>
                                        <span class="text-category">Mobile App</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/graphic/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Mountain Tea</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/graphic/4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Checkmark</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/identity/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Demish</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/web/4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">OneRepublic</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/graphic/5.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Postable</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="img/portfolio/grid/identity/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Simpli Nota</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Unbun Project</h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>The idea of digitalizing document, has been exercised over a thousand times. Yet up until now no one can come even close to present solution that can be deployed to a a lot of people. With help from people at Asia Foundation learn how we tackle this problem here.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-5">
                        <h3>GIMS</h3>
                        <h4>Goverment Integrated Management System</h4>
                        <p>Tasikmalaya is an ambitious city in West Java that have been through reformation. So when city government decide to do data and interface integration, it's become a challenge that they must tackle.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Smart Logistics</h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>Sebuah sistem Real Time data and information vessel and cargo service untuk membantu pelabuhan menginformasikan kedatangan kapal dan kargo. Produk ini diciptakan untuk mempermudah serta menambah efisiensi proses logistik yang berjalan saat ini. Sebuah projek kolaborasi dengan Integrasi Logistik Cipta Solusi dan Indonesia port Corporation (Pelindo).</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-5">
                        <h3>BPPT Online Website</h3>
                        <!-- <h4>Goverment Integrated Management System</h4> -->
                        <p>Aplikasi Website ini dibangun untuk menjadi pusat platform proses legalitas di Kota Bandung secara online, Website ini diharapkan memudahkan pengguna baik dari pihak publik maupun pengguna dari pihak BPPT.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Printmarket</h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>Sebuah E-Commerce Printing, berfokus pada mudahnya proses pemesanan dan banyaknya pilihan untuk mengubah detail spesifikasi pemesanan. aplikasi ini digunakan sebagai tempat pemesanan berbagai kebutuhan percetakan.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-5">
                        <h3>Incode.Design</h3>
                        <p>Website In.CoDe dibuat sebagai wadah untuk proses dan ajang kompetisi untuk mendorong kolaborasi masyarakat sipil, swasta, pemerintah, akademisi dan komunitas pengembang aplikasi (developer) untuk membangun solusi inovatif untuk menjawab tantangan utama pembangunan di Indonesia.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Associate of Civic Project East Venture Website</h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>Website yang dirancang untuk menampilkan portfolio perusahaan dengan desain yang menarik dan sesuai image perusahaan.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-5">
                        <h3>Kampoeng Moge Motorcycle and Parts</h3>
                        <p>Kampoeng Moge Motorcycle and Parts adalah website yang digunakan untuk menampilkan portofolio dan katalog produk yang didesain sesuai dengan image Kampoeng Moge.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Porter</h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>Aplikasi Website yang menyediakan service Template website E - commerce untuk pemilik tempat makan. Layanan yang disediakan oleh porter mencakup personalisasi website, menu makanan dan delivery order.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-5">
                        <h3>BKKBN</h3>
                        <p>Sebuah sistem informasi berbasis API yang diciptakan untuk memenuhi tantangan teknologi dalam program kampung Keluarga Berencana BKKBN.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Website Villa Dukuh</h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>Website yang berisi informasi detail mengenai Villa Dukuh, salah satu villa yang terletak di daerah Dukuh Pulau Bali, Indonesia.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-5">
                        <h3>Keuken</h3>
                        <p>Aplikasi Registrasi pengunjung Keuken, salah satu festival makanan terbesar di Kota Bandung, yang diselenggarakan oleh studio desain House The House.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container wow fadeIn">
            <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Website Ini Kisah Tiga Dara </h3>
                        <!-- <h4>Subheading</h4> -->
                        <p>Website untuk mempromosikan film Ini Kisah Tiga Dara yang terinspirasi dari film lawas berjudul Tiga Dara (1956) yang merupakan salah satu film karya Usmar Ismail.</p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "footer.php";
?>