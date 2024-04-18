<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layout.menudos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .register-cont>img:first-child {
        content: url(img/logo-color1.svg);
    }

    .register-cont>img:nth-child(2) {
        border-left: 2px solid #000;
        content: url(img/user-black-ico.svg);
    }

    .flex-container-horizontal {
        background: var(--custom-soft-blue);
    }

    .felectronica-modal {
        background: var(--custom-soft-blue);
    }

    .gob-cont .content h2, .gob-cont .content p,
    .gob-cont .content .btn,
    .gob-cont .content ul {
        color: var(--custom-dark-blue);
    }
    .gob-cont .content p{
        font-size: 0.94em !important;
    }
    .gob-cont .content ul {font-family: 'PTSans-Regular';
    }
</style>
<div class="flex-container-horizontal">
    <div id="content" class="page s-gobierno open-modal-gob">
        <!--SERVICIOS PARA PERSONAS-->
        <section>
            <!-- <div class="content">
                <div class="personas-content">
                    <div class="pc-lef">
                        <h3>Productos </h3>
                        <h2>Gobierno</h2>
                        <p>Funcionarios públicos</p>
                        <div class="personas-productos">
                            <div class="pp-card">
                                <span></span>
                                <p>01.</p>
                                <a class="btn-blue" href="#firma">Firma Electrónica</a>
                            </div>
                        </div>

                    </div>
                    <div class="pc-right">
                        <img src="img/gobierno1.png" alt="">
                    </div>
                </div>
            </div> -->
            <div class="content">
                <div class="personas-content">
                    <div class="pc-lef">
                        <h3>Productos </h3>
                        <h2>Gobierno</h2>
                        <p>Funcionarios públicos</p>
                        <div class="personas-productos">
                            <div class="pp-card">
                                <span></span>
                                <p>01.</p>
                                <a class="btn-blue" href="#firma">Firma Electrónica</a>
                            </div>
                        </div>
                    </div>
                    <div class="pc-right">
                        <img src="<?php echo e(asset('assets/img/empresas-ilustracion.png')); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="firma" class="gob-cont">
            <div class="content">

                <div class="felectronica-modal-left">
                    <h2>Firmas<br> Electrónicas</h2>
                    <p style="text-align: justify;">Este tipo de certificación electrónica es aún más 
                       segura que la firma manuscrita, recoge todos los
                       elementos periciales y características especificadas
                       en la ley de gobierno electrónico del Ecuador,
                       y solo puede ser emitido por un Ente de Certificación
                       acreditado por la Agencia de Regulación y Control
                       de las Telecomunicaciones (ARCOTEL).
                        <br>
                    </p>
                    <br>
                    <div class="pp-card">
                    <a class="btn-blue" href="planes">Adquirir</a>
                    </div> 
                    
                </div>
                <!-- <img src="img/iconos-proceso.svg" alt=""> -->
                
                 <div class="felectronica-modal-right">
            <!-- <pre> -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <font color="#202945"><b>Para asegurar y garantizar la verificación de la identidad de<br>nuestros clientes, utilizamos :</b></font>
            <br><br>
            <img src="img/iconos-proceso.svg" alt="">
            <!-- <pre>  -->
            </div>

            <!--<div class="nav-buttons-modal">
                <div>
                </div>
                <div>
                    <span>
                        F.E<br>Certificada
                    </span>
                </div>
                </div>

            </div>-->
        </section>


    <!-- planes -->

    <div id="modal-planes-personas" class="planes-gobierno">
        <section id="home-s7" data-status-scroll="waiting" style="height: auto">
            <div class="content">
                <div class="planes-content">
                    <div class="pcc-left">
                        <h3>Obtén tu firma <br />electrónica</h3>
                        <p>y recibe acceso ilimitado en el tiempo que requieras.</p>
                    </div>
                    <div class="pcc-right">
                        <nav class="precio-archivo-token-tab-c1">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-personas-archivo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Archivo</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-personas-token" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Token</button>
                            </div>
                        </nav>
                    </div>
                    <div class="pc-options-tabs">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-personas-archivo" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="pc-options-tabs-archivo">


                                    <div class="price-card">
                                        <h3 class="time">
                                            1 Año
                                        </h3>
                                        <p class="price">
                                            <img src="img/symbol$.svg" alt="">
                                            22.40*
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">
                                            <b>*$1.87 por mes</b> facturado anualmente
                                        </p>
                                        <a class="card-tab-btn" href="#">Me interesa</a>
                                        <div class="card-tab-requirements">
                                            <span>
                                                *Ver requisitos
                                            </span>
                                            <div class="card-tab-requirements-content">
                                                <ul>Requerimientos
                                                    <li>Registrarse en nuestra plataforma</li>
                                                    <li>Cédula de identidad válida</li>
                                                    <li>Tarjeta de crédito o débito</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price-card more-sale">
                                        <h3 class="time">
                                            2 Años
                                        </h3>
                                        <p class="price">
                                            <img src="img/symbol$.svg" alt="">
                                            35.84*
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">
                                            <b>*$2.99 por mes</b> facturado anualmente
                                        </p>
                                        <a class="card-tab-btn" href="#">Me interesa</a>
                                        <div class="card-tab-requirements">
                                            <span>
                                                *Ver requisitos
                                            </span>
                                            <div class="card-tab-requirements-content">
                                                <ul>Requerimientos
                                                    <li>Registrarse en nuestra plataforma</li>
                                                    <li>Cédula de identidad válida</li>
                                                    <li>Tarjeta de crédito o débito</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="float-alert">
                                            Más <br> Popular
                                        </span>
                                    </div>

                                    <div class="price-card">
                                        <h3 class="time">
                                            3 Años
                                        </h3>
                                        <p class="price">
                                            <img src="img/symbol$.svg" alt="">
                                            50.40*
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">
                                            <b>*$4.20 por mes</b> facturado anualmente
                                        </p>
                                        <a class="card-tab-btn" href="#">Me interesa</a>
                                        <div class="card-tab-requirements">
                                            <span>
                                                *Ver requisitos
                                            </span>
                                            <div class="card-tab-requirements-content">
                                                <ul>Requerimientos
                                                    <li>Registrarse en nuestra plataforma</li>
                                                    <li>Cédula de identidad válida</li>
                                                    <li>Tarjeta de crédito o débito</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-personas-token" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="pc-options-tabs-archivo" style="justify-content: space-evenly;">
                                    <div class="price-card">
                                        <h3 class="time">
                                            1 Año
                                        </h3>
                                        <p class="price">
                                            <img src="img/symbol$.svg" alt="">
                                            47.04*
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">
                                            <b>*$3.92 por mes</b> facturado anualmente
                                        </p>
                                        <a class="card-tab-btn" href="#">Me interesa</a>
                                        <div class="card-tab-requirements">
                                            <span>
                                                *Ver requisitos
                                            </span>
                                            <div class="card-tab-requirements-content">
                                                <ul>Requerimientos
                                                    <li>Registrarse en nuestra plataforma</li>
                                                    <li>Cédula de identidad válida</li>
                                                    <li>Tarjeta de crédito o débito</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price-card more-sale">
                                        <h3 class="time">
                                            2 Años
                                        </h3>
                                        <p class="price">
                                            <img src="img/symbol$.svg" alt="">
                                            60.48*
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">
                                            <b>*$5.04 por mes</b> facturado anualmente
                                        </p>
                                        <a class="card-tab-btn" href="#">Me interesa</a>
                                        <div class="card-tab-requirements">
                                            <span>
                                                *Ver requisitos
                                            </span>
                                            <div class="card-tab-requirements-content">
                                                <ul>Requerimientos
                                                    <li>Registrarse en nuestra plataforma</li>
                                                    <li>Cédula de identidad válida</li>
                                                    <li>Tarjeta de crédito o débito</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="float-alert">
                                            Más <br> Popular
                                        </span>
                                    </div>

                                    <div class="price-card">
                                        <h3 class="time">
                                            3 Años
                                        </h3>
                                        <p class="price">
                                            <img src="img/symbol$.svg" alt="">
                                            75.04
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">
                                            <b>*$6.25 por mes</b> facturado anualmente
                                        </p>
                                        <a class="card-tab-btn" href="#">Me interesa</a>
                                        <div class="card-tab-requirements">
                                            <span>
                                                *Ver requisitos
                                            </span>
                                            <div class="card-tab-requirements-content">
                                                <ul>Requerimientos
                                                    <li>Registrarse en nuestra plataforma</li>
                                                    <li>Cédula de identidad válida</li>
                                                    <li>Tarjeta de crédito o débito</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- <div class="nav-buttons-modal">
                <div id="close-modal-precio-personas">
                </div>
                <div style="visibility: hidden">
                </div>
            </div>-->
        </section>
    </div>
    </div>
</div>
<div class="chat-bot">
   <a href="https://walink.co/53136b"> <img src="./img/iconsV-whatsapp.svg" alt=""> </a>
</div>
<?php
//require_once "home.php";
?>
	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/gobierno.blade.php ENDPATH**/ ?>