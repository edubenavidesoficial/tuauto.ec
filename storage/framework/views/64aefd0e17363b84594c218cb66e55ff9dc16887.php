<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layout.menudos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .register-cont>img:first-child{
        content: url(img/logo-color1.svg);
    }
    .register-cont>img:nth-child(2) {
        border-left: 2px solid #000;
        content: url(img/user-black-ico.svg);
    }
</style>
<section id="faq">
    <div class="content">
        <div class="faq-header">
            <p>
                FAQ´s
            </p>
            <h3>
                Preguntas<br>Frecuentes
            </h3>
        </div>
        <div class="faq-content">
            <div class="faq-content-head">
                <div class="faq-content-head-title">
                    <p>Lorem ipsum</p>
                    <span></span>
                </div>
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
            </div>
        </div>
    </div>
</section>
	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/faq.blade.php ENDPATH**/ ?>