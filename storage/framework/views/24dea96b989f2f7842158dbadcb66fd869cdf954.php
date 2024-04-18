<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
       <!-- sidebar-information-area-start -->
        <div class="sidebar-info side-info">
            <div class="sidebar-logo-wrapper mb-25">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-8">
                        <div class="sidebar-logo">
                            <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="logo-img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="sidebar-close-wrapper text-end">
                            <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
            <!-- header area start -->
        <?php echo $__env->make('web.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- header area end -->
        <main>
            <!-- banner area start -->
            <section class="h2_banner-area">
                <div class="h2_single-banner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="h2_banner-content">
                                   <div class="section-area-2 mb-45">
    <h1 class="section-title">Encuentra Estudios en <span>Argentina. <img src="assets/img/banner/2/line.png" alt=""></span></h1>
    <p class="section-text">A través de una combinación de conferencias, lecturas y discusiones, los estudiantes adquirirán una sólida base en psicología educativa.</p>
</div>

                                    <form action="#" class="h2_banner-form">
                                        <input type="text" placeholder="Search Course">
                                        <button type="submit"><i class="fa-thin fa-magnifying-glass"></i></button>
                                    </form>
                                   <span class="h2_banner-content-text">¿Tienes alguna pregunta? <a href="#">Obtén un Ejemplo Gratis</a></span>

                                    <div class="h2_banner-tutor">
                                        <div class="h2_banner-tutor-img">
                                            <div class="h2_banner-inner-img">
                                                <img src="assets/img/banner/2/tutor-1.png" alt="">
                                            </div>
                                            <div class="h2_banner-inner-img">
                                                <img src="assets/img/banner/2/tutor-2.png" alt="">
                                            </div>
                                            <div class="h2_banner-inner-img">
                                                <img src="assets/img/banner/2/tutor-3.png" alt="">
                                            </div>
                                            <div class="h2_banner-inner-img">
                                                <img src="assets/img/banner/2/tutor-4.png" alt="">
                                                <span>2k+</span>
                                            </div>
                                        </div>
                                       <div class="h2_banner-tutor-text">
    <span>Más de</span>
    <span>Argentina</span>
</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                                <div class="h2_banner-right pl-80">
                                    <div class="h2_banner-img">
                                        <img src="assets/img/banner/2/banner-bg.png" alt="">
                                    </div>
                                    <div class="h2_banner-right-shape">
                                        <img class="h2_banner-shape-1" src="assets/img/banner/2/shape_1.png" alt="">
                                        <div class="inner-shpae-1">
                                            <img class="h2_banner-shape-2" src="assets/img/banner/2/shape_2.png" alt="">
                                        </div>
                                    </div>
                                  <div class="h2_banner-meta">
    <div class="h2_banner-meta-info">
        <span>Curso Popular</span>
        <h5>¡Comienza a aprender hoy!</h5>
    </div>
    <div class="h2_banner-meta-rating">
        <span><i class="fa-solid fa-star"></i>4.5 </span>
        <h5>Estudia en Argentina</h5>
    </div>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- counter area start -->
           <div class="counter-area pt-120 pb-110">
    <div class="container">
        <div class="counter-wrap">
            <div class="row g-0">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa-thin fa-globe"></i>
                        </div>
                        <div class="counter-info">
                            <h3 class="counter-info-title">
                                <span class="odometer count_one" data-count="34">00</span>
                                <span>k</span>
                            </h3>
                            <span class="counter-info-text">Seguidores en el extranjero</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa-thin fa-book-open"></i>
                        </div>
                        <div class="counter-info">
                            <h3 class="counter-info-title">
                                <span class="odometer count_one" data-count="12">00</span>
                                <span>k</span>
                            </h3>
                            <span class="counter-info-text">Cursos completados</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa-thin fa-user-group"></i>
                        </div>
                        <div class="counter-info">
                            <h3 class="counter-info-title">
                                <span class="odometer count_one" data-count="214">00</span>
                                <span>k</span>
                            </h3>
                            <span class="counter-info-text">Estudiantes inscritos</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa-thin fa-medal"></i>
                        </div>
                        <div class="counter-info">
                            <h3 class="counter-info-title">
                                <span class="odometer count_one" data-count="56">00</span>
                                <span>k</span>
                            </h3>
                            <span class="counter-info-text">Profesores certificados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- counter area end -->

            <!-- category area start -->
            <section class="h2_category-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-area-2 small-section-area-2 text-center">
                    <h2 class="section-title mb-50">Explora Universitarios para Estudiar en <span>Argentina <img src="assets/img/banner/2/line.png" alt=""></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="h2_category-item mb-30">
                    <div class="h2_category-img">
                        <img src="assets/img/category/2/1.jpg" alt="">
                    </div>
                    <div class="h2_category-content">
                        <h5><a href="#">Ingeniería en Argentina</a></h5>
                        <p>Convenios Universitarios Disponibles</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="h2_category-item mb-30">
                    <div class="h2_category-img">
                        <img src="assets/img/category/2/2.jpg" alt="">
                    </div>
                    <div class="h2_category-content">
                        <h5><a href="#">Ciencias de la Computación en Argentina</a></h5>
                        <p>Convenios Universitarios Disponibles</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="h2_category-item mb-30">
                    <div class="h2_category-img">
                        <img src="assets/img/category/2/3.jpg" alt="">
                    </div>
                    <div class="h2_category-content">
                        <h5><a href="#">Arquitectura en Argentina</a></h5>
                        <p>Convenios Universitarios Disponibles</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="h2_category-item mb-30">
                    <div class="h2_category-img">
                        <img src="assets/img/category/2/4.jpg" alt="">
                    </div>
                    <div class="h2_category-content">
                        <h5><a href="#">Medicina en Argentina</a></h5>
                        <p>Convenios Universitarios Disponibles</p>
                    </div>
                </div>
            </div>
            <!-- Puedes continuar traduciendo los demás elementos según tu necesidad -->
        </div>
    </div>
</section>

            <!-- category area end -->

            <!-- course area start -->
            <section class="h2_course-area pt-110 pb-120">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-area-2">
                                <h2 class="section-title mb-50">Universidades
  <br>reconocidas  <span>internacionalmente <img src="assets/img/banner/2/line.png" alt=""></span></h2>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="h2_course-tab mb-40">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Todo
                                        <span>New</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">La Universidad de Buenos Aires </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Universidad Nacional de la Plata</button>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="h2_course-wrap">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="h2_course-item mb-30">
            <div class="h2_course-item-img">
                <a href="course-details.html"><img src="assets/img/course/2/1.jpg" alt=""></a>
            </div>
            <div class="h2_course-content">
                <div class="h2_course-content-top">
                    <div class="h2_course-rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span>(03 Reseñas)</span>
                    </div>
                    <div class="h2_course-save">
                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                    </div>
                </div>
                 <h5 class="h2_course-content-title"><a href="">Sin Datos Actualmente</a></h5>
                <div class="h2_course-content-info">
                    <span><i class="fa-thin fa-book-blank"></i>23 Lecciones</span>
                    <span><i class="fa-thin fa-user-group"></i>45 Estudiantes</span>
                </div>
                <p class="h2_course-content-text">
                    A través de una combinación de conferencias, lecturas y discusiones, los estudiantes obtendrán una sólida base en psicología educativa.
                </p>
                <div class="h2_course-content-author">
                    <div class="h2_course-author-img">
                        <img src="assets/img/course/2/author-1.jpg" alt="">
                    </div>
                    <div class="h2_course-author-info">
                        <span>Por <a href="#">n/a</a></span>
                    </div>
                </div>
            </div>
            <div class="h2_course-content-bottom">
                <div class="h2_course-bottom-price">
                    <span><del>00</del>00</span>
                </div>
                <div class="h2_course-bottom-btn">
                    <a href="course-details.html">Más Detalles<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="h2_course-item mb-30">
            <div class="h2_course-item-img">
                <a href="course-details.html"><img src="assets/img/course/2/2.jpg" alt=""></a>
            </div>
            <div class="h2_course-content">
                <div class="h2_course-content-top">
                    <div class="h2_course-rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span>(03 Reseñas)</span>
                    </div>
                    <div class="h2_course-save">
                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                    </div>
                </div>
                <h5 class="h2_course-content-title"><a href="">Sin Datos Actualmente</a></h5>
                <div class="h2_course-content-info">
                    <span><i class="fa-thin fa-book-blank"></i>54 Lecciones</span>
                    <span><i class="fa-thin fa-user-group"></i>72 Estudiantes</span>
                </div>
                <p class="h2_course-content-text">
                    A través de una combinación de conferencias, lecturas y discusiones, los estudiantes obtendrán una sólida base en Angular Development.
                </p>
                <div class="h2_course-content-author">
                    <div class="h2_course-author-img">
                        <img src="assets/img/course/2/author-2.jpg" alt="">
                    </div>
                   <div class="h2_course-author-info">
                        <span>Por <a href="#">n/a</a></span>
                    </div>
                </div>
            </div>
            <div class="h2_course-content-bottom">
                <div class="h2_course-bottom-price">
                    <span><del>00</del>00</span>
                </div>
                <div class="h2_course-bottom-btn">
                    <a href="course-details.html">Más Detalles<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="h2_course-item mb-30">
            <div class="h2_course-item-img">
                <a href="course-details.html"><img src="assets/img/course/2/3.jpg" alt=""></a>
            </div>
            <div class="h2_course-content">
                <div class "h2_course-content-top">
                    <div class="h2_course-rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span>(03 Reseñas)</span>
                    </div>
                    <div class="h2_course-save">
                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                    </div>
                </div>
                <h5 class="h2_course-content-title"><a href="">Sin Datos Actualmente</a></h5>
                <div class="h2_course-content-info">
                    <span><i class="fa-thin fa-book-blank"></i>67 Lecciones</span>
                    <span><i class="fa-thin fa-user-group"></i>24 Estudiantes</span>
                </div>
                <p class="h2_course-content-text">
                    A través de una combinación de conferencias, lecturas y discusiones, los estudiantes obtendrán una sólida base en el bienestar emocional.
                </p>
                <div class="h2_course-content-author">
                    <div class="h2_course-author-img">
                        <img src="assets/img/course/2/author-3.jpg" alt="">
                    </div>
                   <div class="h2_course-author-info">
                        <span>Por <a href="#">n/a</a></span>
                    </div>
                </div>
            </div>
            <div class="h2_course-content-bottom">
                <div class="h2_course-bottom-price">
                    <span><del>00</del>00</span>
                </div>
                <div class="h2_course-bottom-btn">
                    <a href="course-details.html">Más Detalles<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h2_course-item mb-30">
                                            <div class="h2_course-item-img">
                                                <a href="course-details.html"><img src="assets/img/course/2/1.jpg" alt=""></a>
                                            </div>
                                            <div class="h2_course-content">
                                                <div class="h2_course-content-top">
                                                    <div class="h2_course-rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        </ul>
                                                        <span>(03 Reviews)</span>
                                                    </div>
                                                    <div class="h2_course-save">
                                                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="h2_course-content-title"><a href="course-details.html">Introduction to Psychology Subject</a></h5>
                                                <div class="h2_course-content-info">
                                                    <span><i class="fa-thin fa-book-blank"></i>23 Lessons</span>
                                                    <span><i class="fa-thin fa-user-group"></i>45 Students</span>
                                                </div>
                                                <p class="h2_course-content-text">
                                                    Through a combination of lectures, readings and discussions students.
                                                </p>
                                                <div class="h2_course-content-author">
                                                    <div class="h2_course-author-img">
                                                        <img src="assets/img/course/2/author-1.jpg" alt="">
                                                    </div>
                                                    <div class="h2_course-author-info">
                                                        <span>By <a href="#">Eric Wid get</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h2_course-content-bottom">
                                                <div class="h2_course-bottom-price">
                                                    <span><del>$140</del>$96.00</span>
                                                </div>
                                                <div class="h2_course-bottom-btn">
                                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h2_course-item mb-30">
                                            <div class="h2_course-item-img">
                                                <a href="course-details.html"><img src="assets/img/course/2/2.jpg" alt=""></a>
                                            </div>
                                            <div class="h2_course-content">
                                                <div class="h2_course-content-top">
                                                    <div class="h2_course-rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        </ul>
                                                        <span>(03 Reviews)</span>
                                                    </div>
                                                    <div class="h2_course-save">
                                                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="h2_course-content-title"><a href="course-details.html">Complete Angular Developer in 2023</a></h5>
                                                <div class="h2_course-content-info">
                                                    <span><i class="fa-thin fa-book-blank"></i>54 Lessons</span>
                                                    <span><i class="fa-thin fa-user-group"></i>72 Students</span>
                                                </div>
                                                <p class="h2_course-content-text">
                                                    Through a combination of lectures, readings and discussions students.
                                                </p>
                                                <div class="h2_course-content-author">
                                                    <div class="h2_course-author-img">
                                                        <img src="assets/img/course/2/author-2.jpg" alt="">
                                                    </div>
                                                    <div class="h2_course-author-info">
                                                        <span>By <a href="#">Hanson Deck</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h2_course-content-bottom">
                                                <div class="h2_course-bottom-price">
                                                    <span><del>$120</del>$70.00</span>
                                                </div>
                                                <div class="h2_course-bottom-btn">
                                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h2_course-item mb-30">
                                            <div class="h2_course-item-img">
                                                <a href="course-details.html"><img src="assets/img/course/2/3.jpg" alt=""></a>
                                            </div>
                                            <div class="h2_course-content">
                                                <div class="h2_course-content-top">
                                                    <div class="h2_course-rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        </ul>
                                                        <span>(03 Reviews)</span>
                                                    </div>
                                                    <div class="h2_course-save">
                                                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="h2_course-content-title"><a href="course-details.html">The Science of Well-being for Teens</a></h5>
                                                <div class="h2_course-content-info">
                                                    <span><i class="fa-thin fa-book-blank"></i>67 Lessons</span>
                                                    <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                                </div>
                                                <p class="h2_course-content-text">
                                                    Through a combination of lectures, readings and discussions students.
                                                </p>
                                                <div class="h2_course-content-author">
                                                    <div class="h2_course-author-img">
                                                        <img src="assets/img/course/2/author-3.jpg" alt="">
                                                    </div>
                                                    <div class="h2_course-author-info">
                                                        <span>By <a href="#">Max Conversion</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h2_course-content-bottom">
                                                <div class="h2_course-bottom-price">
                                                    <span><del>$150</del>$99.00</span>
                                                </div>
                                                <div class="h2_course-bottom-btn">
                                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h2_course-item mb-30">
                                            <div class="h2_course-item-img">
                                                <a href="course-details.html"><img src="assets/img/course/2/4.jpg" alt=""></a>
                                            </div>
                                            <div class="h2_course-content">
                                                <div class="h2_course-content-top">
                                                    <div class="h2_course-rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        </ul>
                                                        <span>(03 Reviews)</span>
                                                    </div>
                                                    <div class="h2_course-save">
                                                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="h2_course-content-title"><a href="course-details.html">AWS Machine Learning Engineer</a></h5>
                                                <div class="h2_course-content-info">
                                                    <span><i class="fa-thin fa-book-blank"></i>57 Lessons</span>
                                                    <span><i class="fa-thin fa-user-group"></i>98 Students</span>
                                                </div>
                                                <p class="h2_course-content-text">
                                                    Through a combination of lectures, readings and discussions students.
                                                </p>
                                                <div class="h2_course-content-author">
                                                    <div class="h2_course-author-img">
                                                        <img src="assets/img/course/2/author-4.jpg" alt="">
                                                    </div>
                                                    <div class="h2_course-author-info">
                                                        <span>By <a href="#">Ravi O'Leigh</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h2_course-content-bottom">
                                                <div class="h2_course-bottom-price">
                                                    <span><del>$159</del>$98.00</span>
                                                </div>
                                                <div class="h2_course-bottom-btn">
                                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h2_course-item mb-30">
                                            <div class="h2_course-item-img">
                                                <a href="course-details.html"><img src="assets/img/course/2/5.jpg" alt=""></a>
                                            </div>
                                            <div class="h2_course-content">
                                                <div class="h2_course-content-top">
                                                    <div class="h2_course-rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        </ul>
                                                        <span>(03 Reviews)</span>
                                                    </div>
                                                    <div class="h2_course-save">
                                                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="h2_course-content-title"><a href="course-details.html">Introduction User Experience Design</a></h5>
                                                <div class="h2_course-content-info">
                                                    <span><i class="fa-thin fa-book-blank"></i>58 Lessons</span>
                                                    <span><i class="fa-thin fa-user-group"></i>50 Students</span>
                                                </div>
                                                <p class="h2_course-content-text">
                                                    Through a combination of lectures, readings and discussions students.
                                                </p>
                                                <div class="h2_course-content-author">
                                                    <div class="h2_course-author-img">
                                                        <img src="assets/img/course/2/author-5.jpg" alt="">
                                                    </div>
                                                    <div class="h2_course-author-info">
                                                        <span>By <a href="#">Valentino Morose</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h2_course-content-bottom">
                                                <div class="h2_course-bottom-price">
                                                    <span><del>$135</del>$69.00</span>
                                                </div>
                                                <div class="h2_course-bottom-btn">
                                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h2_course-item mb-30">
                                            <div class="h2_course-item-img">
                                                <a href="course-details.html"><img src="assets/img/course/2/6.jpg" alt=""></a>
                                            </div>
                                            <div class="h2_course-content">
                                                <div class="h2_course-content-top">
                                                    <div class="h2_course-rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        </ul>
                                                        <span>(03 Reviews)</span>
                                                    </div>
                                                    <div class="h2_course-save">
                                                        <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="h2_course-content-title"><a href="course-details.html">Spoken English for Career Develop</a></h5>
                                                <div class="h2_course-content-info">
                                                    <span><i class="fa-thin fa-book-blank"></i>35 Lessons</span>
                                                    <span><i class="fa-thin fa-user-group"></i>24 Students</span>
                                                </div>
                                                <p class="h2_course-content-text">
                                                    Through a combination of lectures, readings and discussions students.
                                                </p>
                                                <div class="h2_course-content-author">
                                                    <div class="h2_course-author-img">
                                                        <img src="assets/img/course/2/author-6.jpg" alt="">
                                                    </div>
                                                    <div class="h2_course-author-info">
                                                        <span>By <a href="#">Dylan Meringue</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h2_course-content-bottom">
                                                <div class="h2_course-bottom-price">
                                                    <span><del>$230</del>$173</span>
                                                </div>
                                                <div class="h2_course-bottom-btn">
                                                    <a href="course-details.html">More Details<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- course area end -->

            <!-- about area start -->
          <section class="h2_about-area pt-120 pb-70">
    <img src="assets/img/about/2/shape-5.png" alt="" class="h2_about-top-shape">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="h2_about-img mb-50">
                    <div class="h2_about-inner-img">
                        <img src="assets/img/about/2/1.jpg" alt="" class="h2_inner-img">
                        <img src="assets/img/about/2/shape-4.png" alt="" class="h2_inner-img-shape">
                    </div>
                    <div class="h2_about-inner-img2">
                        <img src="assets/img/about/2/2.jpg" alt="">
                        <div class="h2_about-img-button"><a href="https://www.youtube.com/watch?v=dMlASgogxo4" class="popup-video"><i class="fa-solid fa-play"></i></a></div>
                    </div>
                    <div class="h2_about-rating d-none d-sm-block">
                        <span><i class="fa-solid fa-star"></i>4.5 (Hoy)</span>
                        <h5>Argentina</h5>
                    </div>
                    <div class="h2_about-img-shape d-none d-sm-block">
                        <img class="h2_about-shape-1" src="assets/img/about/2/shape-1.png" alt="">
                        <img class="h2_about-shape-2" src="assets/img/about/2/shape-2.png" alt="">
                        <img class="h2_about-shape-3" src="assets/img/about/2/shape-3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10 mb-50">
                <div class="section-area-2 mb-35">
                    <h2 class="section-title mb-20">La Educación en Argentina Juega un Papel Crucial en Dar Forma a la Vida de sus <span>Estudiantes <img src="assets/img/banner/2/line.png" alt=""></span></h2>
                    <p class="section-text">
                        Los educadores tienen un rol fundamental en el desarrollo de los estudiantes. En Argentina, la educación ofrece oportunidades excepcionales para el crecimiento académico y personal.
                    </p>
                </div>
                <div class="h2_about-button">
                    <a href="#" class="theme-btn theme-btn-medium">Más Detalles</a>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- about area end -->

            <!-- cta 2 area start -->
           <div class="h2_cta-area">
    <div class="container">
        <div class="h2_cta-wrap bg-default pt-70 pb-80" data-background="assets/img/cta/2/1.jpg">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="h2_cta-content">
                        <div class="section-area-2 small-section-area-2 text-center">
                            <h2 class="section-title mb-30">¿Estás listo para comenzar <br>
                                tus <span>Estudios? <img src="assets/img/banner/2/line.png" alt=""></span></h2>
                        </div>
                        <form action="#" class="h2_cta-content-form">
                            <input type="email" placeholder="Buscar programa de estudio">
                            <button type="submit">Comenzar a aprender hoy</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- cta 2 area end -->

          

            <!-- blog area start -->
           <section class="h2_blog-area pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-area-2 mb-50 text-center h2_blog-section-area">
                    <h2 class="section-title mb-30">Nuestros Últimos 
                        <span>Artículos <img src="assets/img/banner/2/line.png" alt=""></span></h2>
                    <p class="section-text">
                        Explora nuestros artículos educativos centrados en estudiar en Argentina. A través de estas lecturas, obtendrás información valiosa sobre las oportunidades educativas en Argentina y cómo aprovechar al máximo tu experiencia de estudio en el país.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="h2_blog-item mb-30">
                    <div class="h2_blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/2/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><i class="fa-thin fa-user"></i>Admin</span>
                            <span><i class="fa-thin fa-clock"></i>23 de Junio, 2023</span>
                        </div>
                        <h5 class="h2_blog-content-title"><a href="blog-details.html">Semana de Educación: Noticias y Perspectivas sobre Políticas y Prácticas Educativas.</a></h5>
                        <a href="#" class="theme-btn blog-btn t-theme-btn">Leer Más</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="h2_blog-item mb-30">
                    <div class="h2_blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/2/blog-2.jpg" alt=""></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><i class="fa-thin fa-user"></i>Admin</span>
                            <span><i class="fa-thin fa-clock"></i>23 de Junio, 2023</span>
                        </div>
                        <h5 class="h2_blog-content-title"><a href="blog-details.html">La Red de Aprendizaje: Enseñanza y Aprendizaje con Argentina.</a></h5>
                        <a href="#" class="theme-btn blog-btn t-theme-btn">Leer Más</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="h2_blog-item mb-30">
                    <div class="h2_blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/2/blog-3.jpg" alt=""></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><i class="fa-thin fa-user"></i>Admin</span>
                            <span><i class="fa-thin fa-clock"></i>23 de Junio, 2023</span>
                        </div>
                        <h5 class="h2_blog-content-title"><a href="blog-details.html">Nada es Imposible de Aprender Si Tienes Pasión por Esta Materia.</a></h5>
                        <a href="#" class="theme-btn blog-btn t-theme-btn">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- blog area end -->

           <!-- Área de llamada a la acción (CTA) -->
<div class="cta-area">
    <div class="container">
        <div class="cta-wrapper">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="cta-content mb-30 mb-lg-0">
                        <span class="cta-subtitle">¡Descubre tus Oportunidades de Estudio!</span>
                        <h2 class="cta-title">¿Estás Listo para Comenzar tus Estudios en Argentina?</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="cta-button">
                        <a href="#" class="cta-btn"><i class="fa-brands fa-apple"></i>Apple Store</a>
                        <a href="#" class="cta-btn"><i class="fa-brands fa-google-play"></i>Google Play</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- cta area end -->
        </main>
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php /**PATH /home/ingealimitec2/public_html/argentina.ingealimite.com/resources/views/welcome.blade.php ENDPATH**/ ?>