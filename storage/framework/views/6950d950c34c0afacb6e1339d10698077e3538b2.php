<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layout.menutres', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</style>
<div class="flex-container-horizontal cuso-content">
    <div id="content" class="page casos-practicos">
        <!--CASOS PRACTICOS-->
        <section class="s-empresas">
            <div class="content">
                <div class="personas-content">
                    <div class="pc-lef">
                        <h3>Casos </h3>
                        <h2>Prácticos</h2>
                        <p>Si su empresa está evolucionando al siguiente nivel, nosotros nos transformarnos en su aliado en esa transición optimizando el manejo de sus documentos digitales.

                            Descubra cómo las empresas del futuro se apoyan en soluciones de firma electrónica para destacarse frente a su competencia, proporcionando valor agregado a sus clientes.
                        </p>
                        <div class="gc-left">
                            <a class="ver-casos" href="#casos">Ver casos</a>

                        </div>


                    </div>
                    <div class="pc-right">
                        <img src="<?php echo e(asset('assets/img/casos-practicos.png')); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="s-empresas card-side1" id="casos">
            <div class="content">
                <div class="firmas-content">
                    <div class="fc-left">
                        <p><span><b style="color: aliceblue;">01</b> / 02</span> Casos de uso</p>
                        <h2>Sectores</h2>
                        <p class="text">Como enext contamos con presencia en los sectores más importantes de la indistria nacional e internacional.</p>
                        <div class="gc-left">
                            <a class="ver-casos" href="">Adquirir</a>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="s-empresas card-side3">
            <div class="content">
                <div class="firmas-content">
                    <div class="fc-right">
                        <div class="fc-card-content1">
                            <div class="fc-card-content-row1">
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-banca">
                                    <img src="<?php echo e(asset('assets/img/banca.png')); ?>" alt="">
                                    <p>Banca</p>
                                    <p>Una experiencia en Banca que evoluciona al siguiente nivel...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-seguros">
                                    <img src="<?php echo e(asset('assets/img/corporativo.png')); ?>" alt="">
                                    <p>Seguros</p>
                                    <p>Nos aseguramos de que sus pólizas cumplan los más altos requerimientos ... </p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-bienes-raices">
                                    <img src="<?php echo e(asset('assets/img/bienes-raices.png')); ?>" alt="">
                                    <p>Bienes Raíces </p>
                                    <p>Toda la gestión y firma electrónica de documentos relacionados con el... </p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-corporativo">
                                    <img src="<?php echo e(asset('assets/img/corporativo.png')); ?>" alt="">
                                    <p>Corporativo </p>
                                    <p>La gestión diaria de la empresa se ve beneficiada con la optimización...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-hoteles">
                                    <img src="img/hoteles-restaurantes.png')}}" alt="">
                                    <p>Hoteles, restaurantes y cafeterías </p>
                                    <p>Si tu negocio se centra en el mundo de la Hotelería o similares, y realizas...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>

                            </div>
                            <div class="fc-card-content-row1">
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-sector-legal">
                                    <img src="<?php echo e(asset('assets/img/sector-legal.png')); ?>" alt="">
                                    <p>Sector Legal</p>
                                    <p>Como Entes de Certificación de la Información nos aseguramos...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-empresas-servicios">
                                    <img src="<?php echo e(asset('assets/img/empresas-servicios.png')); ?>" alt="">
                                    <p>Empresas de servicios </p>
                                    <p>Sea aún más eficiente con sus conversiones comerciales usando la firma electrónica...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-educacion">
                                    <img src="<?php echo e(asset('assets/img/educacion.png')); ?>" alt="">
                                    <p>Educación </p>
                                    <p>Nos encargamos de la gestión documental entre la institución educativa,...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="cuso-modal-salud">
                                    <img src="<?php echo e(asset('assets/img/salud.png')); ?>" alt="">
                                    <p>Salud </p>
                                    <p>Ahora el servicio hacia nuestro recurso más importante se ve totalmente...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="" style="visibility:hidden">
                                    <img src="<?php echo e(asset('assets/img/salud.png')); ?>" alt="">
                                    <p>Salud </p>
                                    <p>Ahora el servicio hacia nuestro recurso más importante se ve totalmente...</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="s-empresas card-side4" >
            <div class="content" style="display: inline-block;">
                <div class="como-ayudamos-content">
                    <div class="bc-left w50">
                        <p><span><b style="color: #583be2;">02</b> / 02</span> Casos de uso</p>
                        <h2>En su empresa</h2>
                        <p>Permítannos poner en la vanguardia de tecnología a sus equipos con el sistema de firma electrónica más seguro y de fácil uso del mercado.<br /><b style="color: #583be2;;">Departamentos</b><br /><br /> La gestión diaria de su empresa se ve beneficiada con la optimización de documentos con nuestra amplia gama de soluciones de firma electrónica.</p>
                        <div class="stc-btn-contact">
                            <a href="" class="btn_fill_c1">Adquirir</a>
                            <a href="" class="btn_unfill_c1">Contacto</a>
                        </div>
                    </div>
                    <div class="cac-right" style="border: 0">
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/dep-administrativo-finanzas-ico.svg')); ?>" alt="">
                                <h3>Departamento Administrativo y Finanzas</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Comunicación interdepartamental más ágil, más segura, más ordenada, cero papel.</p>
                                <div class="saber-mas-btn" onclick="changeImageuno()" data-open="departamento-administrativo">Saber más</div>
                            </div>
                        </div>
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/social-listening-ico.svg')); ?>" alt="">
                                <h3>Departamento Comercial</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Flujos de información jerárquicos totalmente verificables, identificables y fáciles de gestionar. </p>
                                <div class="saber-mas-btn" onclick="changeImageuno()" data-open="departamento-comercial">Saber más</div>
                            </div>
                        </div>
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/ethical-hacking-ico.svg')); ?>" alt="">
                                <h3>Departamento de RRHH</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Realice sus procesos de contratación de manera ágil, otorgando a la vez a sus contratos el mayor nivel de legalidad. </p>
                                <div class="saber-mas-btn" onclick="changeImageuno()" data-open="departamento-rrhh">Saber más</div>
                            </div>
                        </div>
                    </div>
                    <div class="cac-right" style="border: 0">
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/dep-administrativo-finanzas-ico.svg')); ?>" alt="">
                                <h3>Departamento Jurídico</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Toda la documentación legal de su compañía como contratos, acuerdos de confidencialidad, memorandos, notificaciones, actas de junto, etc.</p>
                                <div class="saber-mas-btn" onclick="changeImageuno()" data-open="departamento-juridico">Saber más</div>
                            </div>
                        </div>
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/social-listening-ico.svg')); ?>" alt="">
                                <h3>Departamento Logístico</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Los niveles de calidad en tiempos de respuesta se ven beneficiados con la digitalización de documentos de respaldo.</p>
                                <div class="saber-mas-btn" data-open="departamento-logistico">Saber más</div>
                            </div>
                        </div>
                        <div class="cac-right-row" style="visibility:hidden">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/social-listening-ico.svg')); ?>" alt="">
                                <h3>Departamento Logístico</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Los niveles de calidad en tiempos de respuesta se ven beneficiados con la digitalización de documentos de respaldo.</p>
                                <div class="saber-mas-btn">Saber más</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- modal casos practicos banca-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-banca">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Banca</h2>
            <p>La Banca del mañana, que evoluciona al siguiente nivel!
                Nuestros niveles de firma electrónica le permitirán ofrecer a sus clientes una solución práctica, segura y fácil de usar.
               
                Sorprenda a sus clientes con una solución que es parte de la banca del futuro.
            </p>
            <ul style="padding-left: 0rem;">
                <li class="item" id="fe-tipo-de-documento">
                    <a href="#fe-tipo-de-documento" class="btn"><span></span><b style="color: aliceblue;">Firmar digitalmente nunca fue tan fácil</b></a>
                    <div class="sub-item-faq">
                        <p>Nuestas firmas se emiten en pocos y a un bajo costo. </p>
                    </div>
                </li>
                <li class="item" id="fe-facturacion-electronica">
                    <a href="#fe-facturacion-electronica" class="btn"><span></span><b style="color: aliceblue;">Los más niveles de seguridad del mercado</b></a>
                    <div class="sub-item-faq">
                        <p>eNext utiliza tecnología de vanguardia para verificar la identidad de sus usuarios</p>
                    </div>
                </li>
                <li class="item" id="fe-tramites">
                    <a href="#fe-tramites" class="btn"><span></span><b style="color: aliceblue;">Cumplimiento de la normativa de gobierno Electrónico </b></a>
                    <div class="sub-item-faq">
                        <p>Avalados por la <b>ARCOTEL</b> como Entes d certificación, nos regismo a la leu de Gobierno Electrónico vigente</p>
                    </div>
                </li>
            </ul>
            <br>
            

        </div>
        <!-- f -->
        <div class="felectronica-modal-right">
                <img src="<?php echo e(asset('assets/./img/banca_2.png')); ?>" alt="" width="390vh" height="390vh">
            <!--<div id="carousel-casosPracticos-banca" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/amigable.png" alt="">
                                <p>Amigable</p>
                                <p>Fácil de usar para todos</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-mob">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-banca" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-banca" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->

        </div>
        <!-- f -->
        <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
                <span>
                    Seguros
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos seguros-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-seguros">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Seguros</h2>
            <p>Nos aseguramos de que sus pólizas cumplan los más altos requerimientos de legalidad. Con el uso de nuestra Firma Transaccional obtendrá de sus clientes una póliza firmada con absoluto reconocimiento legal.
                <br><br><br>
                Potencie sus procesos comerciales con una herramienta de vanguardia en el sector de seguros.

            </p>
            <br>
            <ul style="padding-left: 0rem;">
                <li class="item" id="cp-seguros-procesos-optimizados">
                    <a href="#cp-seguros-procesos-optimizados" class="btn"><span></span><b style="color: aliceblue;">Procesos Optimizados</b></a>
                    <div class="sub-item-faq">
                        <p>La contratación de pólizas de seguros con firma digital en un instante </p>
                    </div>
                </li>
                <li class="item" id="cp-seguros-niveles-de-seguridad">
                    <a href="#cp-seguros-niveles-de-seguridad" class="btn"><span></span><b style="color: aliceblue;">Los más niveles de seguridad del mercado</b></a>
                    <div class="sub-item-faq">
                        <p>eNext utiliza tecnología de vanguardia para verificar la identidad de sus usuarios</p>
                    </div>
                </li>
                <li class="item" id="cp-seguros-cumplimiento-normativa">
                    <a href="#cp-seguros-cumplimiento-normativa" class="btn"><span></span><b style="color: aliceblue;">Cumplimiento de la normativa de gobierno Electrónico </b></a>
                    <div class="sub-item-faq">
                        <p>Avalados por la <b>ARCOTEL</b> como Entes de certificación, nos regimos a la leu de Gobierno Electrónico vigente</p>
                    </div>
                </li>
            </ul>

        </div>

        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/seguros.png')); ?>" alt="" width="390vh" height="390vh">
            <!-- <div id="carousel-casosPracticos-seguros" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/amigable.png" alt="">
                                <p>Amigable</p>
                                <p>Fácil de usar para todos</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-mob">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-seguros" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-seguros" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->

        </div>
        <div class="nav-buttons-modal">
            <div>
                <span>
                    Banca
                </span>
            </div>
            <div>
                <span>
                    Sector<br> Legal
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos sector legal-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-sector-legal">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Sector Legal</h2>
            <p>Como Entes de Certificación de la Información nos aseguramos el no repudio de los documentos firmados digitalmente con las firmas eNext. Acelere los procesos documentales de sus clientes con seguridad y sobre todo validez legal.
                <br><br><br>
                Transporte a su firma de abogados hacia futuro de la seguridad digital

            </p>
            <br>
            <ul style="padding-left: 0rem;">
                <li class="item" id="cuso-legal-procesos">
                    <a href="#cuso-legal-procesos" class="btn"><span></span><b style="color: aliceblue;">Procesos Optimizados</b></a>
                    <div class="sub-item-faq">
                        <p>La contratación de pólizas de seguros con firma digital en un instante </p>
                    </div>
                </li>
                <li class="item" id="cuso-legal-procesos">
                    <a href="#cuso-legal-procesos" class="btn"><span></span><b style="color: aliceblue;">Los más altos niveles de seguridad del mercado</b></a>
                    <div class="sub-item-faq">
                        <p>eNext utiliza tecnología de vanguardia para verificar la identidad de sus usuarios</p>
                    </div>
                </li>
                <li class="item" id="cuso-legal-cumplimiento">
                    <a href="#cuso-legal-cumplimiento" class="btn"><span></span><b style="color: aliceblue;">Cumplimiento de la normativa de gobierno Electrónico </b></a>
                    <div class="sub-item-faq">
                        <p>Avalados por la <b>ARCOTEL</b> como Entes d certificación, nos regismo a la leu de Gobierno Electrónico vigente</p>
                    </div>
                </li>
            </ul>

        </div>

        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/legal_1.png')); ?>" alt="" width="390vh" height="390vh">
            <!-- <div id="carousel-casosPracticos-legal" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/seguridad-corporativa.png" alt="">
                                <p>Certificado y Seguro</p>
                                <p>Se beneficiará del uso de firmas electrónicas emitidas por un Ente de Certificación.</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/gestion-documental.png" alt="">
                                <p>Gestión Documental</p>
                                <p>Administre todos sus documentos de manera ágil y segura.</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-legal" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-legal" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->

        </div>

        <div class="nav-buttons-modal">
            <div>
                <span>
                    Seguros
                </span>
            </div>
            <div>
                <span>
                    Empresas de<br>Servicios
                </span>
            </div>
        </div>
    </div>

    <!--modal en su empresa-->

    <div class="felectronica-modal casosp-modal" data-target="departamento-administrativo">
        <div class="close-btn-cub" onclick="changeImagedos()"></div>
        <div class="felectronica-modal-right">
            <h2>Departamento <br>Administrativo <br>y Finanzas</h2>
            <p style="text-align: justify;">Comunicación interdepartamental más ágil, más segura, más ordenada, cero papel.<br><br> Manejo de Nomina de empleados, contabilidad, gestión de medios financieros, proveeduría, coordinación de servicios generales, servicios médicos, manejo y digitalización de archivo.</p>
        </div>
        <div class="felectronica-modal-left">
            <img src="<?php echo e(asset('assets/img/departamento-financiero.png')); ?>" alt="">
        </div>
        <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div>
    </div>

    <div class="felectronica-modal casosp-modal" data-target="departamento-juridico">
        <div class="close-btn-cub" onclick="changeImagedos()"></div>
        <div class="felectronica-modal-right">
            <h2>Departamento <br />Jurídico</h2>
            <p style="text-align: justify;">Toda la documentación legal de su compañía como contratos, acuerdos de confidencialidad, memorandos, notificaciones, actas de junto, etc., protegidos con nuestra firma electrónica legal y resguardados en la Blockchain. </p>
        </div>
        <div class="felectronica-modal-left">
            <img src="<?php echo e(asset('assets/img/departamento-juridico-modal.png')); ?>" alt="">
        </div>
        <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div>
    </div>

    <div class="felectronica-modal casosp-modal" data-target="departamento-logistico">
        <div class="close-btn-cub" onclick="changeImagedos()"></div>
        <div class="felectronica-modal-right">
            <h2>Departamento <br>Logístico</h2>
            <p style="text-align: justify;">Optimice la calidad en tiempos de respuesta con la digitalización de documentos de respaldo.<br><br> Flujos de información para optimizar y controlar inventarios, procesos de almacén (procesos de picking), transporte de distribución de mercadería, mejoramiento de logística inversa, trazabilidad (compra: producción, almacenaje, transporte, distribución y venta) <br><br> Ya no es necesario realizar trámites o solicitudes de movimiento de activos y productos a través de documentación física.<br><br> Todo en un solo ambiente digital y con verificación del usuario.
            </p>
        </div>
        <div class="felectronica-modal-left">
            <img src="<?php echo e(asset('assets/img/departamento-logistico-ilustra.png')); ?>" alt="">
        </div>
        <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div>
    </div>



    <div class="felectronica-modal casosp-modal" data-target="departamento-comercial">
        <div class="close-btn-cub" onclick="changeImagedos()"></div>
        <div class="felectronica-modal-right">
            <h2>Departamento Comercial</h2>
            <p style="text-align: justify;">Garantizamos la fidelización de clientes y proveedores, a través de la digitalización de comunicaciones encaminadas a gestionar oportunamente requerimientos y necesidades.<br><br> Gestión de pedidos, cambios, devoluciones, garantía de productos por parte de clientes, órdenes de compra, entrega de activos o recursos de marketing y ventas; contratos, convenios comerciales.<br><br> Trazabilidad de información: Director Comercial – Gerente Comercial – Jefe de Ventas – Vendedor – Asistente – Personal de Servicio al Cliente para evaluar tiempos de respuesta, solución de problemas y otros requerimientos.</p>
        </div>
        <div class="felectronica-modal-left">
            <img src="<?php echo e(asset('assets/img/departamento-comerncial.png')); ?>" alt="">
        </div>

        <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div>
    </div>

    <div class="felectronica-modal casosp-modal" data-target="departamento-rrhh">
        <div class="close-btn-cub" onclick="changeImagedos()"></div>
        <div class="felectronica-modal-right">
            <h2>Departamento <br />de RRHH</h2>
            <p style="text-align: justify;">Realice sus procesos de contratación de manera ágil, otorgando a la vez a sus contratos el mayor nivel de legalidad. <br><br>Procesos de contratación de personal, documentación de remuneraciones (roles de pago), compensaciones, beneficios, convenios de compromiso o cumplimiento, formación y desarrollo (evaluaciones), gestión de rendimiento, retroalimentación de empleados, normas de salud y seguridad.</p>
        </div>
        <div class="felectronica-modal-left">
            <img src="<?php echo e(asset('assets/img/departamento-rrhh.png')); ?>" alt="">
        </div>

        <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div>
    </div>


    <!-- modal casos practicos empresas de servicios-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-empresas-servicios">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Empresas de servicios</h2>
            <p>Sea aún más eficiente con sus conversiones comerciales usando la firma electrónica en contratos de prestación de servicios. Con nuestros procesos digitales con firma electrónica transaccional, usted optimizará la gestión de su equipo comercial y ahorrará valioso tiempo a sus clientes.
                <br><br>
                Permítanos apoyar en el crecimiento de su empresa

            </p>
            <br>
            <ul style="padding-left: 0rem;">
                <li class="item" id="cuso-empresas-procesos">
                    <a href="#cuso-empresas-procesos" class="btn"><span></span><b style="color: aliceblue;">Procesos Optimizados</b></a>
                    <div class="sub-item-faq">
                        <p>La contratación de sus servicios a tan solo un click. </p>
                    </div>
                </li>
                <li class="item" id="cuso-registro-contractual">
                    <a href="#cuso-registro-contractual" class="btn"><span></span><b style="color: aliceblue;">Legalidad y seguridad</b></a>
                    <div class="sub-item-faq">
                        <p>Nada mejor que mantener un registro contractual 100% seguro y legal</p>
                    </div>
                </li>

            </ul>

        </div>
        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/servicios_1.png')); ?>" alt="" width="390vh" height="390vh">
            <!-- <div id="carousel-casosPracticos-empresas" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/gestion-documental.png" alt="">
                                <p>Gestión Documental</p>
                                <p>Administre todos sus procesos de manera ágil y segura.</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/seguridad-corporativa.png" alt="">
                                <p>Seguridad total</p>
                                <p>Sus procesos quedarán firmados con una firma electrónica (legal).</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                        </div>
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
            </div> -->

        </div>
        <div class="nav-buttons-modal">
            <div>
                <span>
                    Sector<br>Legal
                </span>
            </div>
            <div>
                <span>
                    Bienes Raíces
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos Bienes Raíces-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-bienes-raices">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Bienes Raíces</h2>
            <p>Toda la gestión y firma electrónica de documentos relacionados con el negocio inmobiliario serán optimizados con eNext. Usted podrá cerrar negocios, sean estos de alquiler o compra venta de inmuebles, desde cualquier lugar, con nuestros productos de firma electrónica legal

                <br><br><br>
                Construimos junto a usted los bienes raíces del futuro.

            </p>
            <br>
            <ul style="padding-left: 0rem;">
                <li class="item" id="cu-braices-procesos">
                    <a href="#cu-braices-procesos" class="btn"><span></span><b style="color: aliceblue;">Procesos contractuales optimizados</b></a>
                    <div class="sub-item-faq">
                        <p>La firma de contratos inmobiliarios en pocos minutos con el más alto nivel de legalidad </p>
                    </div>
                </li>
                <li class="item" id="cu-braices-altos-niveles">
                    <a href="#cu-braices-altos-niveles" class="btn"><span></span><b style="color: aliceblue;">Los más altos niveles de seguridad del mercado</b></a>
                    <div class="sub-item-faq">
                        <p>eNext utiliza tecnología de vanguardia para verificar la identidad de sus usuarios</p>
                    </div>
                </li>

                <li class="item" id="cu-braices-cumplimiento">
                    <a href="#cu-braices-cumplimiento" class="btn"><span></span><b style="color: aliceblue;">Cumplimiento de la normativa de Gobierno Electrónico</b></a>
                    <div class="sub-item-faq">
                        <p>Avalados por la <b>ARCOTEL</b> como Entes d certificación, nos regismo a la leu de Gobierno Electrónico vigente</p>
                    </div>
                </li>

            </ul>

        </div>

        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/servicios_1.png')); ?>" alt="" width="390vh" height="390vh" >
            <!-- <div id="carousel-casosPracticos-bienes" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/gestion-documental.png" alt="">
                                <p>Gestión Documental</p>
                                <p>Administre todos sus procesos de manera ágil y segura.</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/seguridad-corporativa.png" alt="">
                                <p>Seguridad total</p>
                                <p>Sus procesos quedarán firmados con una firma electrónica (legal).</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-bienes" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-bienes" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->

        </div>
        <div class="nav-buttons-modal">
            <div>
                <span>
                    Empresas de<br /> servicios
                </span>
            </div>
            <div>
                <span>
                    Educación
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos Educación-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-educacion">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Educación</h2>
            <p>Nos encargamos de la gestión documental entre la institución educativa, sus alumnos y padres de familia, para que la misión de impartir conocimiento tenga una plena garantía en el flujo de información.

                <br><br><br><br>
                Llevaremos a su institución educativa a estar a la vanguardia de la seguridad digital

            </p>
            <br><br>
            <ul style="padding-left: 0rem;">
                <li class="item" id="cuso-educacion-simplificamos">
                    <a href="#cuso-educacion-simplificamos" class="btn"><span></span><b style="color: aliceblue;">Simplificamos la gestión documental</b></a>
                    <div class="sub-item-faq">
                        <p>Facilitamos el manejo de documentos de toda índole: circulares, convocatorias, notificaciones, recordatorios y demás. </p>
                    </div>
                </li>
                <li class="item" id="cuso-educacion-seguridad">
                    <a href="#cuso-educacion-seguridad" class="btn"><span></span><b style="color: aliceblue;">Seguridad y confidencialidad</b></a>
                    <div class="sub-item-faq">
                        <p>eNext utiliza tecnología de vanguardia para verificar la identidad de sus usuarios</p>
                    </div>
                </li>

                <li class="item" id="cuso-educacion-ambiental">
                    <a href="#cuso-educacion-ambiental" class="btn"><span></span><b style="color: aliceblue;">Ambiental</b></a>
                    <div class="sub-item-faq">
                        <p>Impulsamos el desuso del papel.</p>
                    </div>
                </li>

            </ul>

        </div>
        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/edu_1.png')); ?>" alt="" width="470vh" height="400vh">
            <!-- <div class="gc-card-content">
                <div class="gc-card">
                    <img src="img/procesos-eficientes.png" alt="">
                    <p>Procesos eficentes</p>
                    <p>Podrá llegar con todo tipo de documentación certificada digitalmente, de manera rápida a profesores, alumnos y padres.</p>
                </div>
                <div class="gc-card">
                    <img src="img/seguridad-corporativa.png" alt="">
                    <p>Sistema educativo del mañana</p>
                    <p>Sus procesos documentales en digital con los más altos estándares de seguridad.</p>
                </div>

            </div> -->

        </div>
        <div class="nav-buttons-modal">
            <div>
                <span>
                    Bienes Raíces
                </span>
            </div>
            <div>
                <span>
                    Corporativo
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos Corporativo-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-corporativo">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Corporativo</h2>
            <p>La gestión diaria de la empresa se ve beneficiada con la optimización de documentos con firma digital.
            </p>
            <br><br>
        </div>

        <div class="felectronica-modal-right">
                <img src="<?php echo e(asset('assets/img/corporativo_1.png')); ?>" alt="" width="390vh" height="390vh">
            <!-- <div id="carousel-casosPracticos-corporativa" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/amigable.png" alt="">
                                <p>Amigable</p>
                                <p>Fácil de usar para todos</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-mob">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-corporativa" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-corporativa" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="gc-card-content">
            </div> -->

        </div>

        <div class="nav-buttons-modal">
            <div>
                <span>
                    Educación
                </span>
            </div>
            <div>
                <span>
                    Salud
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos Salud-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-salud">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Salud</h2>
            <p>Las instituciones de salud podrán agilizar sus procesos de gestión hacia sus pacientes de forma totalmente remota. Ya no será necesario el gasto innecesario de tiempo y recursos para tramitar tus requerimientos: </p>
            <br><br>
            <p>Agendamiento de citas médicas.
            </p>
            <p>Recepción de informes médicos, solicitud de exámenes médicos, resultados, tramite de seguro médico, recetas, reclamaciones.</p>
        </div>

        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/salud_1.png')); ?>" alt="" width="390vh" height="390vh" >
            <!-- <div id="carousel-casosPracticos-salud" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/amigable.png" alt="">
                                <p>Amigable</p>
                                <p>Fácil de usar para todos</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-mob">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-salud" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-salud" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->

        </div>
        <div class="nav-buttons-modal">
            <div>
                <span>
                    Corporativo
                </span>
            </div>
            <div>
                <span>
                    Hoteles <br>Restaurantes
                </span>
            </div>
        </div>
    </div>


    <!-- modal casos practicos Hoteles, Restaurantes y Cafeterías-->

    <div class="felectronica-modal casosp-modal" data-target="cuso-modal-hoteles">
        <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
        <div class="felectronica-modal-left">
            <h2>Hoteles, Restaurantes y Cafeterías</h2>
            <p>Si tu negocio se centra en el mundo de la Hotelería o similares, y realizas alquiler de espacios para eventos, podrás gestionar tus contratos de prestación de servicios de manera digital y segura. Nuestra firma electrónica, te permite gestionar contratos de manera totalmente legal con tu cliente. </p>
        </div>

        <div class="felectronica-modal-right">
            <img src="<?php echo e(asset('assets/img/hoteles_1.png')); ?>" alt="" width="390vh" height="390vh">
            <!-- <div id="carousel-casosPracticos-hoteles" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/amigable.png" alt="">
                                <p>Amigable</p>
                                <p>Fácil de usar para todos</p>
                            </div>
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/100verde.png" alt="">
                                <p>100% Verde</p>
                                <p>Sabemos que a usted le importa el medio ambiente como a nosotros.</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-mob">
                        <div class="gc-card-content">
                            <div class="gc-card">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                            <div class="gc-card" style="visibility:hidden">
                                <img src="img/eficiente.png" alt="">
                                <p>Eficiente</p>
                                <p>Todos sus procesos documentales en un solo lugar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-casosPracticos-hoteles" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-casosPracticos-hoteles" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div> -->

        </div>
        <div class="nav-buttons-modal">
            <div>
                <span>
                    Salud
                </span>
            </div>
            <div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="chat-bot">
   <a href="https://walink.co/53136b"> <img src="./img/iconsV-whatsapp.svg" alt=""> </a>
</div>
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/casos-practicos.blade.php ENDPATH**/ ?>