<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="flex-container-horizontal">
    <div id="content" class="page home">
        <!--INTRO-->
        <section>
            <div class="intro-cont">
                <span>
                    <!-- ANIMACION -->
                    <div class="lottie1">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@1.5.7/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_4pnrkf3w.json" background="transparent" speed="1" style="width: 110px; height: 110px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <!-- FIN ANIMACION -->

                </span>
                <div class="word"></div>

            </div>

        </section>
        <section>
            <!--<div class="intro-cont" style="display:none">
                <span></span>
                <div class="word"></div>
            </div>-->
            <div class="intro-vid">
                <div>
                    <h2>Haz parte de la transformación digital de tu empresa.</h2>
                </div>

                <div class="video-modal1">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <lottie-player class="play-button" src="https://assets2.lottiefiles.com/packages/lf20_aolblx3z.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                    </a>


                </div>

            </div>
        </section>
        <!--INTRO-->
        <section>
            <div class="content flex">

                <div class="content-left">
                    <h2>
                        ¡Obtén tu firma electrónica online de forma rápida y segura!
                    </h2>
                    <p>En pocos minutos y con tecnología de vanguardia. </p>

                   <!-- <a class="btn-yellow" href="https://enext.ec/landing_page/">¡Adquiere tu firma!</a>-->
                    <a class="btn-yellow" href="#casosPracticos-empresas">¡Adquiere tu firma!</a>



                </div>
                <div class="content-right">
                    <img src="<?php echo e(asset('assets/img/ilustracion2.png')); ?>" alt="">
                    <br><br>

                    <!-- ANIMACION -->
                    <div class="lottie">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                        </script>
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_4pnrkf3w.json" background="transparent" speed="1" style="width: 110px; height: 110px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <!-- FIN ANIMACION -->
                </div>

            </div>



        </section>
        <section>
            <div class="content" id="casosPracticos-empresas">
                <div id="carousel-casosPracticos-empresas" style="text-align: center" class="carousel slide mob" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('img/personas.png')); ?>" class="only-mob" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="<?php echo e(asset('img/empresa.png')); ?>" class="only-mob" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="<?php echo e(asset('img/gobierno.png')); ?>" class="only-mob" alt="">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-empresas" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-empresas" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="cat">
                    <p>Selecciona una categoría</p>
                </div>
                <div class="qe-content">

                    <div class="qe-card">

                        <a href="personas">
                            <div class="qe-card-title">
                                <h4 id="subrayado">Persona</h4>
                            </div>
                            <div class="qe-card-content">
                                <img src="<?php echo e(asset('assets/img/personas.png')); ?>" alt="">
                                <p>Personas naturales y profesionales sin RUC Personas naturales y profesionales con RUC Importadores y exportadores Compras públicas y SERCOP.</p>
                            </div>
                        </a>
                    </div>
                    <div class="qe-card">

                        <a href="empresas">
                            <div class="qe-card-title">
                                <h4 id="subrayado">Empresa</h4>
                            </div>
                            <div class="qe-card-content">
                                <img src="<?php echo e(asset('assets/img/empresa.png')); ?>" alt="">
                                <p>Representante legal - Miembro de empresa.</p>
                            </div>
                        </a>
                    </div>
                    <div class="qe-card">
                        <a href="gobierno">
                            <div class="qe-card-title">
                                <h4 id="subrayado">Gobierno</h4>
                            </div>
                            <div class="qe-card-content">
                                <img src="<?php echo e(asset('assets/img/gobierno.png')); ?>" alt="">
                                <p>Funcionarios públicos.</p>
                            </div>
                        </a>
                    </div>
                    <div class="btn-casos-uso">
                        <a href="casos-practicos">Conoce todos los casos de uso</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- PARA EL CHTABOOT -->
<div class="chat-bot">
    <a href="https://walink.co/53136b"> <img src="./img/iconsV-whatsapp.svg" alt=""> </a>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: fit-content;top:6rem">
    <button type="button" class="btn-close mttt" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url(assets/images/icons/eee.png) center/1em auto no-repeat; color: #f8f9fa; border: solid; border-radius: 12rem;opacity: .8;"></button>  
        <div class="modal-content" style="background-color: #faf8f85e;width: 100%;padding: 0.1rem;align-content: center;max-width: 660px;height: 450px;">
            <div class="modal-header" style="display: contents;">
             </div>
            <div class="modal-body"style="padding: 3px;" >
                <iframe src="https://www.youtube.com/embed/OvCr0OSOxzk?controls" style="max-width: 100%; height: -webkit-fill-available;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </iframe>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ingealim/public_html/enext.ingealimite.com/resources/views/welcome.blade.php ENDPATH**/ ?>