<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>

.contact-form {
    display: grid;
    gap: 15px;
}

.form-group {
    display: grid;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 24px;
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
        <h2 class="section-title mb-20">Contactos</h2>
    </div>
    <form class="contact-form">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        </div>
        <button type="submit" class="theme-btn theme-btn-medium">Enviar</button>
    </form>
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
	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/innovaeducations/public_html/resources/views/web/contactos.blade.php ENDPATH**/ ?>