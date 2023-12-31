<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>veterinaria</title>
        <!-- Favicons -->
        <link rel="icon" href="{{asset('img/DrPetLogo.png')}}" type="image">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- CSS Files -->
        <link href="{{asset('landing/bootstrap/css/bootstrap.min.css ')}}" rel="stylesheet">
        <link href="{{asset('landing/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('landing/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('landing/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('landing/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{asset('landing/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

         <!-- Template Main CSS File -->
         <link href="{{asset('css/style.css')}}" rel="stylesheet">

    </head>
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <img src="{{asset('img/DrPetLogo.png')}}" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Quienes Somos</a></li>
                <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contáctanos</a></li>

                @if (Route::has('login'))
                    @auth
                        <li><a class="getstarted scrollto" href="{{ url('/inicio') }}">Inicio</a></li>
                        @else
                            <li><a class="getstarted scrollto" href="{{ route('login') }}">Log in</a></li>
                    @endauth
                @endif
            </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">La mejor solución para tu mascota</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Cuida a tus animales en la mejor clínica veterinaria. No compres, adopta.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                    <a href="#contact" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Contáctanos</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            </div>
        </section><!-- End Hero -->
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">

              <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                  <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                      <h3>Quienes Somos</h3>
                      <h2>Somos una clínica veterinaria donde atendemos todo tipo de animales.</h2>
                      <p>
                        NOMBRE VETERINARIA puede atender a sus animales con toda la confianza de que recibirá la mejor atención. Además, usted puede adoptar alguna de las mascotas que tenemos disponibles.
                      </p>
                      <div class="text-center text-lg-start">
                        <a href="#contact" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                          <span>Visitanos</span>
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('img/doctor2.png')}}" class="img-fluid" alt="">
                  </div>

                </div>
              </div>

            </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Servicios</h2>
                        <p>Los servicios de nuestra clínica son los siguientes</p>
                    </header>

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Adopción de animales</h3>
                            <p>Adopta animales de la manera más sencilla posible. Observa los animales que cuidamos en nuestra clínica y si quieres puedes adoptarlos</p>
                            <a href="#contact" class="read-more"><span>Visitenos</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Compra de productos</h3>
                            <p>Facilidad para comprar los productos que necesita su mascota sin ir a otro lugar ya que en nuestra plataforma puede ordenarlos.</p>
                            <a href="#contact" class="read-more"><span>Visitenos</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Registro de Mascotas</h3>
                            <p>Usted como dueño, puede tener en la plataforma un control sobre las vacunas y los tratamientos de su mascota.</p>
                            <a href="#contact" class="read-more"><span>Visitenos</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Services Section -->


            </section><!-- End Recent Blog Posts Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">

                <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contacto</h2>
                    <p>Contáctanos</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Dirección</h3>
                            <p>DIRECCION ORURO,<br> 8820 etccc</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Llamanos</h3>
                            <p>62834606<br>+telefono....</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>veterinaria@gmail.com<br>contacto@gmail.com</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3>Horarios</h3>
                            <p>Lunes - Viernes<br>9:00AM - 17:00PM</p>
                        </div>
                        </div>
                    </div>

                    </div>

                    <div class="col-lg-6">
                        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.307782894835!2d-103.32714258510869!3d20.657053586200988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b23a9bbba80d%3A0xdacdb7fd592feb90!2sCentro%20Universitario%20de%20Ciencias%20Exactas%20e%20Ingenier%C3%ADas!5e0!3m2!1ses!2smx!4v1623269858983!5m2!1ses!2smx" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>

                </div>

            </section><!-- End Contact Section -->

        </main><!-- End #main -->
         <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12 col-md-12 footer-info text-center" >
                        <a href="#" class="logo align-self-center">
                            <div class="align-center">
                                <img src="{{asset('img/DrPetLogo.png')}}" alt="">
                            </div>
                        </a>
                        <br>
                        <p>Somos una veterinaria con muchos años de experiencia en la atención de mascotas. Este sistema queda restringido al uso de las personas que pertenecen a la organización</p>

                    </div>
                </div>
            </div>
            </div>

            <div class="container">
            
            
            </div>
        </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- JS Files -->
        <script src="{{asset('landing/bootstrap/js/bootstrap.bundle.js')}}"></script>
        <script src="{{asset('landing/aos/aos.js')}}"></script>
        <script src="{{asset('landing/php-email-form/validate.js')}}"></script>
        <script src="{{asset('landing/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('landing/purecounter/purecounter.js')}}"></script>
        <script src="{{asset('landing/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('landing/glightbox/js/glightbox.min.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>
