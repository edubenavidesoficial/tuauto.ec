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
</style>
<section class="todos-los-planes-h" >
    <div class="content">
        <div class="cabecera">
            <p style="padding: 160px;"></p>
            <h1>Adquiere tu firma</h1>
            <p>Tarifas firmas electrónicas enext</p>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link personas active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-personas" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        <p>Personas</p>
                        <p>Personas naturales y profesionales con o sin RUC -<br /> Importadores y exportadores - Compras públicas y SERCOP.</p>
                    </button>
                    <button class="nav-link empresas" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-empresas" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <p>Empresas</p>
                        <p>Representante legal - Miembro de empresa.</p>
                    </button>
                    <button class="nav-link gobierno" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-gobierno" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                        <p>Gobierno</p>
                        <p>Funcionarios públicos.</p>
                    </button>
                </div>
            </nav>
           
        </div>
</section>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-personas" role="tabpanel" aria-labelledby="nav-home-tab">
        <div id="planes-personas">
            <section class="todos-los-planes-b">
                <div class="content">
                    <div class="planes-personas-content">
                        <div class="ppc-head">
                            <h3>Obtén tu firma electrónica</h3>
                            <span></span>
                            <p>Adquiere la aprobación de tus documentos de forma legal, segura y verificable. Encuentra aquí los diferentes tipos de firma electrónica, diseñadas según la necesidad específica de cada uno de nuestros usuarios.</p>
                        </div>
                        <div class="ppc-cont">
                            <nav class="precio-archivo-token-tab-c1">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-personas-archivo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Archivo</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-personas-token" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Token</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-personas-archivo" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="pc-options-tabs-archivo">
                                        <div class="price-card">
                                            <h3 class="time">
                                                1 Mes
                                            </h3>
                                            <p class="price">
                                                <img src="img/symbol$.svg" alt="">
                                                10.99
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">

                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">
                                                <div class="card-tab-requirements-content">
                                                    <ul>Requerimientos
                                                        <li>Registrarse en nuestra plataforma</li>
                                                        <li>Cédula de identidad válida</li>
                                                        <li>Tarjeta de crédito o débito</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

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
                                                35.48
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">
                                                <b>*$1.87 por mes</b> facturado anualmente
                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">

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
                                                50.40
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">
                                                <b>*$1.87 por mes</b> facturado anualmente
                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">

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
                                    <div class="pc-options-tabs-archivo token" style="justify-content: space-evenly;">
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
                    <div class="ppc-nuestras-firmas">
                        <span></span>
                        <div class="ppc-nf-left">
                            <img src="img/firma-electronica-certificada-ico.svg" alt="">
                            <h3>Firma Electrónica<br /> Certificada</h3>
                            <p>Certifica las evidencias digitales creadas al firmar un documento. Esta firma otorga un alto nivel de seguridad utilizando <b>sellado de tiempo, biometría y blockchain de eNext.</b></p>
                            <ul><b>¿Para qué sirve?</b>
                                <li>Con nuestra Firma Certificada usted podrá firmar todo tipo de documento digital que no requiera tener validez legal. </li>
                                <li>Puede ser utilizado para procesos internos de compañías, notificaciones y comunicaciones entre terceros, trámites operativos repetitivos o transaccionales. </li>
                            </ul>
                            <a href="">Adquirir</a>
                        </div>
                        <div class="ppc-nf-right">
                            <img src="img/firma-electronica-certificada-ico.svg" alt="">
                            <h3>Firma Electrónica <br />de Constancia</h3>
                            <p>La firma electrónica de constancia consiste en aceptar el contenido de un documento digital, mediante la verificación de un <b>PIN</b> u <b>OTP</b>, o tan solo un <b>click</b>. </p>
                            <ul><b>¿Para qué sirve?</b>
                                <li>Nuestra Firma Constancia puede ser utilizada para suscribir todo tipo de documentos, transacciones o procesos en los que se requiere una rúbrica de constancia, por ejemplo recibos, notas de entrega/recepción, etc. </li>
                            </ul>
                            <a href="">Adquirir</a>
                        </div>
                        <span></span>
                    </div>
                    <div class="ppc-firma-transaccional">
                        <div class="ppc-head">
                            <h3>Obtén tu firma Electrónica Transaccional </h3>
                            <br />
                            <p>Diseñada para tener validez y duración en una sola transacción, garantizando la identidad de la persona, otorgando el más alto nivel de <b>legalidad, seguridad y autenticación.</b></p>
                        </div>
                        <div class="pc-options-tabs-archivo" style="position: relative">
                            <div class="price-card">
                                <h3 class="time">
                                    1 - 1000
                                    <span>Cantidad de transacciones</span>
                                </h3>
                                <p class="price">
                                    <img src="img/symbol$.svg" alt="">
                                    22.40*
                                </p>
                                <p class="tax-label">
                                    * Incluye IVA
                                </p>
                                <p class="card-note">
                                    <b>*De un solo uso</b>
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

                            <div class="price-card">
                                <h3 class="time">
                                    1001 - 3000
                                    <span>Cantidad de transacciones</span>
                                </h3>
                                <p class="price">
                                    <img src="img/symbol$.svg" alt="">
                                    22.40*
                                </p>
                                <p class="tax-label">
                                    * Incluye IVA
                                </p>
                                <p class="card-note">
                                    <b>*De un solo uso</b>
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
                            <div class="price-card opt2 more-sale">
                                <h3 class="time">
                                    3001 - 5000
                                    <span>Cantidad de transacciones</span>
                                </h3>
                                <p class="price">
                                    <img src="img/symbol$.svg" alt="">
                                    22.40*
                                </p>
                                <p class="tax-label">
                                    * Incluye IVA
                                </p>
                                <p class="card-note">
                                    <b>*De un solo uso</b>
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
            </section>
            <section class="conoce-mas">
                <div class="content">
                    <div class="conoce-mas-content">
                        <h3>Conoce más de nuestros productos digitales</h3>
                        <div class="conoce-mas-text">
                            <p>Contamos con más productos que te brindarán mayores beneficios.</p>
                            <ul>
                                <li>Gestor Documental</li>
                                <li>Certificado SSL</li>
                            </ul>
                            <a href="">Ver más productos</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tienes-dudas-plan">
                <div class="content">
                    <h3>¿Tienes más preguntas?</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                    <div class="faq-content-head-content">
                        <div id="faq1">
                            <ul>
                                <li class="item" id="faq1-item">
                                    <a href="#faq1-item" class="btn">¿QUE ES UN ENTE DE CERTIFICACIÓN DE INFORMACIÓN?</a>
                                    <div class="sub-item-faq">
                                        <p>La Ley de Comercio Electrónico y sus reglamentos vigentes señalan que un Ente de Certificación de Información son aquellas empresas unipersonales o personas jurídicas que emiten certificados de firma electrónica y pueden prestar otros servicios relacionados con la firma electrónica.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq2">
                            <ul>
                                <li class="item" id="faq2-item">
                                    <a href="#faq2-item" class="btn">¿ES ENEXT UN ENTE DE CERTIFICACIÓN DE INFORMACIÓN?</a>
                                    <div class="sub-item-faq">
                                        <p>eNext es una marca registrada que pertenece a LAZZATE Cia. Ltda.
                                            Lazzate Cia. Ltda. es un Ente de Certificación de Información y Servicios Relacionados acreditado por la Agencia de Regulación y Control de las Telecomunicaciones ARCOTEL, bajo la legislación vigente de Gobierno Electrónico del Ecuador.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq3">
                            <ul>
                                <li class="item" id="faq3-item">
                                    <a href="#faq3-item" class="btn">¿QUÉ CATEGORÍAS DE FIRMA ELECTRÓNICA TIENE ENEXT?</a>
                                    <div class="sub-item-faq">
                                        <p>eNext tiene a disposición de sus usuarios diferentes clases de firma electrónica. Cada una de ellas está diseñada para atender diferentes necesidades y requerimientos, así tenemos:
                                            <br><br>
                                            Firma Electrónica Legal
                                            Firma Electrónica Certificada
                                            Firma Electrónica de Constancia
                                            Firma Electrónica Transaccional
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq4">
                            <ul>
                                <li class="item" id="faq4-item">
                                    <a href="#faq4-item" class="btn">¿QUÉ ES LA FIRMA ELECTRÓNICA LEGAL?</a>
                                    <div class="sub-item-faq">
                                        <p>Garantiza la identidad de la persona, otorgando el más alto nivel de legalidad, seguridad y autenticación de cualquier tipo de documento digital.
                                            <br><br>
                                            Es un certificado digital (firma electrónica avanzada) que se utiliza para firmar electrónicamente cualquier tipo de documento digital que requiera tener un alto nivel de legalidad, seguridad y autenticación de identidad del firmante.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq5">
                            <ul>
                                <li class="item" id="faq5-item">
                                    <a href="#faq5-item" class="btn">¿QUÉ ES LA FIRMA ELECTRÓNICA CERTIFICADA?</a>
                                    <div class="sub-item-faq">
                                        <p>Certifica las evidencias digitales creadas al firmar un documento. Esta firma otorga un alto nivel de seguridad utilizando sellado de tiempo, biometría y blockchain de eNext.
                                            <br><br>
                                            Nuestra firma electrónica certificada permite identificar al firmante con un alto grado de confianza gracias a los datos contenidos en su estructura, sin embargo, no otorga todos los niveles de protección para que tenga absoluta validez legal en procesos que así lo requieran.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-faq-planes">
                        <a href="ayuda">ir a centro de ayuda </a>
                        <a href="contactos">¿Tienes dudas? Contáctanos</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-empresas" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div id="planes-empresas">
            <section class="todos-los-planes-b">
                <div class="content">
                    <div class="planes-personas-content">
                        <div class="ppc-head">
                            <h3>Obtén tu firma electrónica</h3>
                            <span></span>
                            <p>Adquiere la aprobación de tus documentos de forma legal, segura y verificable. Encuentra aquí los diferentes tipos de firma electrónica, diseñadas según la necesidad específica de cada uno de nuestros usuarios.</p>
                        </div>
                        <div class="ppc-cont">
                            <nav class="precio-archivo-token-tab-c1">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-empresas-archivo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Archivo</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-empresas-token" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Token</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-empresas-archivo" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="pc-options-tabs-archivo">
                                        <div class="price-card">
                                            <h3 class="time">
                                                1 Mes
                                            </h3>
                                            <p class="price">
                                                <img src="img/symbol$.svg" alt="">
                                                10.99
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">

                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">
                                                <div class="card-tab-requirements-content">
                                                    <ul>Requerimientos
                                                        <li>Registrarse en nuestra plataforma</li>
                                                        <li>Cédula de identidad válida</li>
                                                        <li>Tarjeta de crédito o débito</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

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
                                                35.48
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">
                                                <b>*$1.87 por mes</b> facturado anualmente
                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">

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
                                                50.40
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">
                                                <b>*$1.87 por mes</b> facturado anualmente
                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">

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
                                <div class="tab-pane fade" id="nav-empresas-token" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="pc-options-tabs-archivo token" style="justify-content: space-evenly;">
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
                    <div class="ppc-nuestras-firmas">
                        <span></span>
                        <div class="ppc-nf-left">
                            <img src="img/firma-electronica-certificada-ico.svg" alt="">
                            <h3>Firma Electrónica<br /> Certificada</h3>
                            <p>Certifica las evidencias digitales creadas al firmar un documento. Esta firma otorga un alto nivel de seguridad utilizando <b>sellado de tiempo, biometría y blockchain de eNext.</b></p>
                            <ul><b>¿Para qué sirve?</b>
                                <li>Con nuestra Firma Certificada usted podrá firmar todo tipo de documento digital que no requiera tener validez legal. </li>
                                <li>Puede ser utilizado para procesos internos de compañías, notificaciones y comunicaciones entre terceros, trámites operativos repetitivos o transaccionales. </li>
                            </ul>
                            <a href="">Adquirir</a>
                        </div>
                        <div class="ppc-nf-right">
                            <img src="img/firma-electronica-certificada-ico.svg" alt="">
                            <h3>Firma Electrónica <br />de Constancia</h3>
                            <p>La firma electrónica de constancia consiste en aceptar el contenido de un documento digital, mediante la verificación de un <b>PIN</b> u <b>OTP</b>, o tan solo un <b>click</b>. </p>
                            <ul><b>¿Para qué sirve?</b>
                                <li>Nuestra Firma Constancia puede ser utilizada para suscribir todo tipo de documentos, transacciones o procesos en los que se requiere una rúbrica de constancia, por ejemplo recibos, notas de entrega/recepción, etc. </li>
                            </ul>
                            <a href="">Adquirir</a>
                        </div>
                        <span></span>
                    </div>
                    <div class="ppc-firma-transaccional">
                        <div class="ppc-head">
                            <h3>Obtén tu firma Electrónica Transaccional </h3>
                            <br />
                            <p>Diseñada para tener validez y duración en una sola transacción, garantizando la identidad de la persona, otorgando el más alto nivel de <b>legalidad, seguridad y autenticación.</b></p>
                        </div>
                        <div class="pc-options-tabs-archivo" style="position: relative">
                            <div class="price-card">
                                <h3 class="time">
                                    1 - 1000
                                    <span>Cantidad de transacciones</span>
                                </h3>
                                <p class="price">
                                    <img src="img/symbol$.svg" alt="">
                                    22.40*
                                </p>
                                <p class="tax-label">
                                    * Incluye IVA
                                </p>
                                <p class="card-note">
                                    <b>*De un solo uso</b>
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

                            <div class="price-card">
                                <h3 class="time">
                                    1001 - 3000
                                    <span>Cantidad de transacciones</span>
                                </h3>
                                <p class="price">
                                    <img src="img/symbol$.svg" alt="">
                                    22.40*
                                </p>
                                <p class="tax-label">
                                    * Incluye IVA
                                </p>
                                <p class="card-note">
                                    <b>*De un solo uso</b>
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
                            <div class="price-card opt2 more-sale">
                                <h3 class="time">
                                    3001 - 5000
                                    <span>Cantidad de transacciones</span>
                                </h3>
                                <p class="price">
                                    <img src="img/symbol$.svg" alt="">
                                    22.40*
                                </p>
                                <p class="tax-label">
                                    * Incluye IVA
                                </p>
                                <p class="card-note">
                                    <b>*De un solo uso</b>
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
                        </div>

                    </div>
                </div>
            </section>
            <section class="conoce-mas">
                <div class="content">
                    <div class="conoce-mas-content">
                        <h3>Conoce más de nuestros productos digitales</h3>
                        <div class="conoce-mas-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                            <div>
                                <ul>
                                    <li>Gestor Documental</li>
                                    <li>Certificado SSL</li>
                                    <li>Sellado de tiempo eNext</li>
                                </ul>
                                <ul>
                                    <li>Blockchain</li>
                                    <li>Seguridad de la información</li>
                                </ul>
                            </div>
                            <a href="personas#gestor">Ver más productos</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tienes-dudas-plan">
                <div class="content">
                    <h3>¿Tienes más preguntas?</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                    <div class="faq-content-head-content">
                        <div id="faq1">
                            <ul>
                                <li class="item" id="faq1-item">
                                    <a href="#faq1-item" class="btn">¿QUE ES UN ENTE DE CERTIFICACIÓN DE INFORMACIÓN?</a>
                                    <div class="sub-item-faq">
                                        <p>La Ley de Comercio Electrónico y sus reglamentos vigentes señalan que un Ente de Certificación de Información son aquellas empresas unipersonales o personas jurídicas que emiten certificados de firma electrónica y pueden prestar otros servicios relacionados con la firma electrónica.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq2">
                            <ul>
                                <li class="item" id="faq2-item">
                                    <a href="#faq2-item" class="btn">¿ES ENEXT UN ENTE DE CERTIFICACIÓN DE INFORMACIÓN?</a>
                                    <div class="sub-item-faq">
                                        <p>eNext es una marca registrada que pertenece a LAZZATE Cia. Ltda.
                                            Lazzate Cia. Ltda. es un Ente de Certificación de Información y Servicios Relacionados acreditado por la Agencia de Regulación y Control de las Telecomunicaciones ARCOTEL, bajo la legislación vigente de Gobierno Electrónico del Ecuador.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq3">
                            <ul>
                                <li class="item" id="faq3-item">
                                    <a href="#faq3-item" class="btn">¿QUÉ CATEGORÍAS DE FIRMA ELECTRÓNICA TIENE ENEXT?</a>
                                    <div class="sub-item-faq">
                                        <p>eNext tiene a disposición de sus usuarios diferentes clases de firma electrónica. Cada una de ellas está diseñada para atender diferentes necesidades y requerimientos, así tenemos:
                                            <br><br>
                                            Firma Electrónica Legal
                                            Firma Electrónica Certificada
                                            Firma Electrónica de Constancia
                                            Firma Electrónica Transaccional
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq4">
                            <ul>
                                <li class="item" id="faq4-item">
                                    <a href="#faq4-item" class="btn">¿QUÉ ES LA FIRMA ELECTRÓNICA LEGAL?</a>
                                    <div class="sub-item-faq">
                                        <p>Garantiza la identidad de la persona, otorgando el más alto nivel de legalidad, seguridad y autenticación de cualquier tipo de documento digital.
                                            <br><br>
                                            Es un certificado digital (firma electrónica avanzada) que se utiliza para firmar electrónicamente cualquier tipo de documento digital que requiera tener un alto nivel de legalidad, seguridad y autenticación de identidad del firmante.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq5">
                            <ul>
                                <li class="item" id="faq5-item">
                                    <a href="#faq5-item" class="btn">¿QUÉ ES LA FIRMA ELECTRÓNICA CERTIFICADA?</a>
                                    <div class="sub-item-faq">
                                        <p>Certifica las evidencias digitales creadas al firmar un documento. Esta firma otorga un alto nivel de seguridad utilizando sellado de tiempo, biometría y blockchain de eNext.
                                            <br><br>
                                            Nuestra firma electrónica certificada permite identificar al firmante con un alto grado de confianza gracias a los datos contenidos en su estructura, sin embargo, no otorga todos los niveles de protección para que tenga absoluta validez legal en procesos que así lo requieran.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-faq-planes">
                        <a href="ayuda">ir a centro de ayuda </a>
                        <a href="contactos">¿Tienes dudas? Contáctanos</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-gobierno" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div id="planes-gobierno">
            <section class="todos-los-planes-b">
                <div class="content">
                    <div class="planes-personas-content">
                        <div class="ppc-head">
                            <h3>Obtén tu firma electrónica</h3>
                            <span></span>
                            <p>Adquiere la aprobación de tus documentos de forma legal, segura y verificable. Encuentra aquí los diferentes tipos de firma electrónica, diseñadas según la necesidad específica de cada uno de nuestros usuarios.</p>
                        </div>
                        <div class="ppc-cont">
                            <nav class="precio-archivo-token-tab-c1">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-gobierno-archivo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Archivo</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-gobierno-token" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Token</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-gobierno-archivo" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="pc-options-tabs-archivo">
                                        <div class="price-card">
                                            <h3 class="time">
                                                1 Mes
                                            </h3>
                                            <p class="price">
                                                <img src="img/symbol$.svg" alt="">
                                                10.99
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">

                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">
                                                <div class="card-tab-requirements-content">
                                                    <ul>Requerimientos
                                                        <li>Registrarse en nuestra plataforma</li>
                                                        <li>Cédula de identidad válida</li>
                                                        <li>Tarjeta de crédito o débito</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

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
                                                35.48
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">
                                                <b>*$1.87 por mes</b> facturado anualmente
                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">

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
                                                50.40
                                            </p>
                                            <p class="tax-label">
                                                * Incluye IVA
                                            </p>
                                            <p class="card-note">
                                                <b>*$1.87 por mes</b> facturado anualmente
                                            </p>
                                            <a class="card-tab-btn" href="#">Me interesa</a>
                                            <div class="card-tab-requirements">

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
                                <div class="tab-pane fade" id="nav-gobierno-token" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="pc-options-tabs-archivo token" style="justify-content: space-evenly;">
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
            </section>
            <section class="tienes-dudas-plan">
                <div class="content">
                    <h3>¿Tienes más preguntas?</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                    <div class="faq-content-head-content">
                        <div id="faq1">
                            <ul>
                                <li class="item" id="faq1-item">
                                    <a href="#faq1-item" class="btn">¿QUE ES UN ENTE DE CERTIFICACIÓN DE INFORMACIÓN?</a>
                                    <div class="sub-item-faq">
                                        <p>La Ley de Comercio Electrónico y sus reglamentos vigentes señalan que un Ente de Certificación de Información son aquellas empresas unipersonales o personas jurídicas que emiten certificados de firma electrónica y pueden prestar otros servicios relacionados con la firma electrónica.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq2">
                            <ul>
                                <li class="item" id="faq2-item">
                                    <a href="#faq2-item" class="btn">¿ES ENEXT UN ENTE DE CERTIFICACIÓN DE INFORMACIÓN?</a>
                                    <div class="sub-item-faq">
                                        <p>eNext es una marca registrada que pertenece a LAZZATE Cia. Ltda.
                                            Lazzate Cia. Ltda. es un Ente de Certificación de Información y Servicios Relacionados acreditado por la Agencia de Regulación y Control de las Telecomunicaciones ARCOTEL, bajo la legislación vigente de Gobierno Electrónico del Ecuador.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq3">
                            <ul>
                                <li class="item" id="faq3-item">
                                    <a href="#faq3-item" class="btn">¿QUÉ CATEGORÍAS DE FIRMA ELECTRÓNICA TIENE ENEXT?</a>
                                    <div class="sub-item-faq">
                                        <p>eNext tiene a disposición de sus usuarios diferentes clases de firma electrónica. Cada una de ellas está diseñada para atender diferentes necesidades y requerimientos, así tenemos:
                                            <br><br>
                                            Firma Electrónica Legal
                                            Firma Electrónica Certificada
                                            Firma Electrónica de Constancia
                                            Firma Electrónica Transaccional
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq4">
                            <ul>
                                <li class="item" id="faq4-item">
                                    <a href="#faq4-item" class="btn">¿QUÉ ES LA FIRMA ELECTRÓNICA LEGAL?</a>
                                    <div class="sub-item-faq">
                                        <p>Garantiza la identidad de la persona, otorgando el más alto nivel de legalidad, seguridad y autenticación de cualquier tipo de documento digital.
                                            <br><br>
                                            Es un certificado digital (firma electrónica avanzada) que se utiliza para firmar electrónicamente cualquier tipo de documento digital que requiera tener un alto nivel de legalidad, seguridad y autenticación de identidad del firmante.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq5">
                            <ul>
                                <li class="item" id="faq5-item">
                                    <a href="#faq5-item" class="btn">¿QUÉ ES LA FIRMA ELECTRÓNICA CERTIFICADA?</a>
                                    <div class="sub-item-faq">
                                        <p>Certifica las evidencias digitales creadas al firmar un documento. Esta firma otorga un alto nivel de seguridad utilizando sellado de tiempo, biometría y blockchain de eNext.
                                            <br><br>
                                            Nuestra firma electrónica certificada permite identificar al firmante con un alto grado de confianza gracias a los datos contenidos en su estructura, sin embargo, no otorga todos los niveles de protección para que tenga absoluta validez legal en procesos que así lo requieran.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-faq-planes">
                        <a href="ayuda">ir a centro de ayuda </a>
                        <a href="contactos">¿Tienes dudas? Contáctanos</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ingealim/public_html/enext.ingealimite.com/resources/views/web/planes.blade.php ENDPATH**/ ?>