@include('web.layout.header')
@include('web.layout.menu')
<style>
    .card-section {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px; /* Espacio entre secciones de la tarjeta */
}

.card-section h2 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #333333;
}

.card-section p {
    color: #666666;
    line-height: 1.6;
    margin-bottom: 15px;
}

.card-title {
font-size: 20px;
}
</style>
<div class="flex-container-horizontal">
    <div id="content" class="page">
        <section class="h2_about-area pt-120 pb-70">
    <img src="assets/img/about/2/shape-5.png" alt="" class="h2_about-top-shape">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4">
                <div class="h2_about-img mb-50">
                    <div class="h2_about-inner-img">
                        <img src="assets/img/about/2/1.jpg" alt="" class="h2_inner-img">
                        <img src="assets/img/about/2/shape-4.png" alt="" class="h2_inner-img-shape">
                    </div>
                 
                    <div class="h2_about-rating d-none d-sm-block">
                        <span><i class="fa-solid fa-star"></i></span>
                        <h5>Argentina</h5>
                    </div>
                    <div class="h2_about-img-shape d-none d-sm-block">
                        <img class="h2_about-shape-1" src="assets/img/about/2/shape-1.png" alt="">
                        <img class="h2_about-shape-2" src="assets/img/about/2/shape-2.png" alt="">
                        <img class="h2_about-shape-3" src="assets/img/about/2/shape-3.png" alt="">
                    </div>
                </div>
            </div>
          <div class="col-xl-8 col-lg-8 col-md-10 mb-50">
    <div class="section-area-2 mb-35">
        <p class="section-quote">¡No le pongas límites a tus sueños, el éxito espera por ti!</p>
        <h2 class="section-title mb-20">Quiénes Somos</h2>
        <p class="section-text">Innova Education Services es tu aliado estratégico en tu búsqueda de la excelencia académica. Con más de 7 años de experiencia, somos líderes en consultoría y gestión educativa para estudiantes que desean iniciar su formación profesional en las mejores universidades alrededor del mundo. Proporcionamos apoyo a los estudiantes desde el inicio del proceso y durante su estancia en el extranjero, tanto académica como personal, ofreciéndote todas las opciones de estudio disponibles en el exterior, teniendo en cuenta tus intereses, objetivos y presupuesto.</p>
        <div class="card-section">
            <h3 class="card-title">Misión</h3>
            <p class="card-text">Facilitar a los estudiantes la experiencia de estudiar en el extranjero, proporcionando servicios de asesoramiento, gestión y apoyo de alta calidad que genere la seguridad de sentirse como en casa.</p>
        </div>
        <div class="card-section">
            <h3 class="card-title">Visión</h3>
            <p class="card-text">Ser una empresa reconocida internacionalmente que garantice a los estudiantes la posibilidad de estudiar en cualquier parte del mundo.</p>
        </div>
        <div class="card-section">
            <h3 class="card-title">Valores</h3>
            <ul class="value-list">
                <li>Responsabilidad</li>
                <li>Honestidad</li>
                <li>Confianza</li>
                <li>Cumplimiento</li>
            </ul>
        </div>
    </div>
    <div class="h2_about-button">
        <a href="#" class="theme-btn theme-btn-medium">Más Detalles</a>
    </div>
</div>

        </div>
    </div>
</section>
    </div>
</div>
	
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
@include('web.layout.footer')
