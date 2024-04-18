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
</style>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/acoordeon.css')); ?>">
<div class="flex-container-horizontal s-empresas">
    <div id="content" class="page s-empresas">
        <section>
            <div class="content">
                <div class="personas-content">
                    <div class="pc-lef">
                        <h3>Productos</h3>
                        <h2>Empresas</h2>
                        <p>Adquiere tu firma electrónica, soluciones de gestión documental, seguridad digital y Blockchain, diseñados para evolucionar digitalmente a tu empresa. </p>
                        <div class="personas-productos desktop">
                        <link rel="stylesheet" href="<?php echo e(asset('assets/css/boootstrap.min.css')); ?>">
                            
                        <div class="carousel slide" id="myCarousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-2 pp-card">
                                                <span></span>
                                                <p>01.</p>
                                                <a class="btn-blue" href="#firma">Firma Electrónica</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-2 pp-card">
                                                <span></span>
                                                <p>02.</p>
                                                <a class="btn-blue" href="#gestor">Gestor Documental</a></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-2 pp-card">
                                                <span></span>
                                                <p>03.</p>
                                                <a class="btn-blue" href="#ssl">Certificado SSL</a></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-2 pp-card">
                                                <span></span>
                                                <p>04.</p>
                                                <a class="btn-blue" href="#st">Sellado</a></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-2 pp-card">
                                                <span></span>
                                                <p>05.</p>
                                                <a class="btn-blue" href="#block">Blockchain</a></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-2 pp-card">
                                                <span></span>
                                                <p>06.</p>
                                                <a class="btn-blue" href="#si">Seguridad</a></p>
                                            </div>
                                        </div>
                                       
                                    </div> 
                                    <a class="left carousel-control"  style="background-image: linear-gradient(to right,rgb(0 0 0 / 0%) 0,rgba(0,0,0,.0001) 100%);" href="#myCarousel" data-slide="prev">
                                    <img style="top: -20px;" src="<?php echo e(asset('assets/img/circulo-de-flecha-i.png')); ?>" alt="">
                                    </a>
                                    <a  class="right carousel-control" style="background-image: linear-gradient(to right,rgb(0 0 0 / 0%) 0,rgba(0,0,0,.0001) 100%);" href="#myCarousel" data-slide="next">
                                    <img style="top: -20px;" src="<?php echo e(asset('assets/img/circulo-de-flecha-d.png')); ?>" alt="" >
                                    </a>
                                    

                                </div>
                        </div>
                    </div>


                    <div class="pc-right">
                        <img src="<?php echo e(asset('assets/img/empresas-ilustracion.png')); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="s-empresas card-side1" id="firma">
            <div class="content">
                <div class="firmas-content">
                    <div class="fc-left">
                        <p><span><b>01</b> / 06</span> Casos de uso</p>
                        <h2>Firma Electrónica</h2>
                        <p class="text" style="text-align: justify;">Adquiere la aprobación de tus documentos de forma legal, segura y verificable. Encuentra aquí los diferentes tipos de firma electrónica, diseñadas según la necesidad específica de cada uno de nuestros usuarios.</p>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="s-empresas card-side2" id="firmae">
            <div class="content">
                <div class="firmas-content">
                    <div class="fc-right">
                        <div class="fc-card-content">
                            <div class="fc-card-content-row">
                                <div class="fc-card" onclick="changeImageuno()" data-open="facturacion-electronica">
                                    <img>
                                    <p>Firma <br>Electrónica</p>
                                    <p style="text-align: justify;">Se utiliza para firmar cualquier tipo de documento digital que requiera alto nivel de legalidad, seguridad y autenticación.</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="facturacion-certificada">
                                    <img>
                                    <p>Firma Electrónica de<br> Certificada </p>
                                    <p style="text-align: justify;">Esta firma mantiene un control único y exclusivo de la firma por parte del usuario. </p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                            </div>
                            <div class="fc-card-content-row">
                                <div class="fc-card" onclick="changeImageuno()" data-open="facturacion-constancia">
                                    <img>
                                    <p>Firma Electrónica<br> de Constancia</p>
                                    <p style="text-align: justify;">Consiste en aceptar el contenido de un documento digital, con la verificación de un PIN u OTP, o tan solo un click. </p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                                <div class="fc-card" onclick="changeImageuno()" data-open="facturacion-transaccional">
                                    <img>
                                    <p>Firma Electrónica<br> Transaccional </p>
                                    <p style="text-align: justify;">Diseñada para tener validez y duración en una sola transacción, garantizando la identidad de la persona.</p>
                                    <span><img src="<?php echo e(asset('assets/img/mas.svg')); ?>" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <!--   <div class="btn-casos-uso" style="display: block;text-align: center;border-radius: 5px;">
                        <a href="#gestor" style="border: 1px solid #fff3ed00;padding: 0px;border-radius: 25px"> 
                            <img  width="215" style="padding: 10px;" src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </a>
                    </div>-->
            </div>
        </section>

        <section id="gestor">
            <br>
            <br>
            <!-- INICIO GESTOR -->
            <div class="content">
                <div class="gestion-content">
                    <div class="gc-left">
                        <p><span><b>02</b> / 06</span> Casos de uso</p>
                        <h2>Gestor Documental</h2>
                        <p class="text" style="text-align: justify;">Administre sus documentos y fírmelos digitalmente, para tener acceso a sus documentos sin importar la hora o el lugar en el que se encuentre. </p>
                      <a href="precio-empresas">Adquirir</a>
                    </div>
                    <!-- CAMBIOS -->

                    <div class="gc-right">



                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- CAMBIOS -->
                    </div>
                </div>
               <!-- <div class="btn-casos-uso" style="display: block;text-align: center;border-radius: 5px;">
                        <a href="#ssl" style="border: 1px solid #fff3ed00;padding: 0px;border-radius: 25px"> 
                            <img  width="215" style="padding: 10px;" src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </a>
                    </div>-->
            </div>
            <!-- FIN GESTOR -->
        </section>

        <section id="ssl">
            <br>
            <div class="content">
                <div class="certificado-content">
                    <div class="gc-left">
                        <p><span><b>03</b> / 06</span> Casos de uso</p>
                        <h2>Certificado SSL</h2>
                        <p class="text" style="text-align: justify;">Este proporciona un canal seguro entre dos puntos de una red o dispositivo que
                                operan a través de Imnternet. Proveemos certificados para el uso corporativo como para la
                                creación de sitios web.</p>
                        <p class="text"><b>
                                <font color="#583BE2">¿Para qué sirve?</font>
                            </b></p>
                        <p class="text" style="text-align: justify;">El uso de SSL sirve para proteger las comunicaciones<br>
                                entre un navegador web y un servidor web.</p>
                      <a href="precio-empresas">Adquirir</a>
                        <a href="contactos">Contacto</a>
                    </div>

                    <div class="cc-right">

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                    </div>
                </div>
               <!-- <div class="btn-casos-uso" style="display: block;text-align: center;border-radius: 5px;">
                        <a href="#st" style="border: 1px solid #fff3ed00;padding: 0px;border-radius: 25px"> 
                            <img  width="215" style="padding: 10px;" src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </a>
                    </div>-->
            </div>
        </section>

        <section id="st">
            <div class="content">
                <div class="sellado-tiempo-content">
                    <div class="stc-left">
                        <p><span><b>04</b> / 06</span> Casos de uso</p>
                        <h2>Sellado de <br>Tiempo eNext</h2>
                        <h3 id="h-3" style="    font-size: 1.4em;">(Timestamp) con Blockchain</h3>
                        <p style="text-align: justify; margin-top: 20px;">Proporcionamos una prueba independiente e irrefutable de que los datos de una transacción, documento o firma digital, han existido y no han sido alterados en un lapso de tiempo determinado.</p>
                    </div>
                    <div class="stc-right">
                        <p style="text-align: justify;">Nuestra TSA (Autoridad de Sellado de Tiempo) genera pruebas que otorgan validez y evidencia legal a transacciones electrónicas de toda índole.<br /><br />
                            El Sello de Tiempo eNext sirve también para validar en qué momento el firmante aplicó una firma digital, así su validez puede verificarse en el largo plazo.<br /><br />
                            <b>
                                <font color="#5639e1">¿Para qué sirve?</font>
                            </b>
                        </p>
                        <ul style="list-style: circle;">
                            <li>● Plataformas electrónicas donde es indispensable la validación del tiempo en la que se realizó una transacción.</li>
                            <li>● Sistema de asistencia de personal con validación biométrica.</li>
                            <li>● Recepción digital de cualquier tipo de documentos por vía física a digital o, digital a digital.</li>
                            <li>● Emisión de comprobantes electrónicos como facturas, notas de compra, vouchers, etc.</li>
                            <li>● Para sellar códigos de programación.</li>
                        </ul>
                        <div class="stc-btn-contact">
                            <a href="precio-empresas" class="btn_fill_c1">Adquirir</a>
                            <a href="" class="btn_unfill_c1">Contacto</a>
                        </div>
                    </div>
                </div>
                <!--<div class="btn-casos-uso" style="display: block;text-align: center;border-radius: 5px;">
                        <a href="#block" style="border: 1px solid #fff3ed00;padding: 0px;border-radius: 25px"> 
                            <img  width="215" style="padding: 10px;" src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </a>
                    </div>-->
            </div>
        </section >
        <section style="position:relative" id="block">
            <div class="content">
                <div class="blockchain-content">
                    <div class="bc-left w50">
                        <p><span><b>05</b> / 06</span> Casos de uso</p>
                        <h2>Blockchain</h2>
                        <p style="text-align: justify;">eNext se convierte en el primer Ente de Certificación de Información acreditado en el Ecuador, que vincula sus cualidades y capacidades de administrador de certificados digitales con la seguridad que otorga el registro intransferible de la Blockchain.</p>
                        <div class="stc-btn-contact">
                            <a href="precio-empresas" class="btn_fill_c1">Adquirir</a>
                            <a href="" class="btn_unfill_c1">Contacto</a>
                        </div>
                    </div>
                    <div class="bc-right w50">
                    <left><h3 style="margin-left: 1px;">Beneficios de la Blockchain Privada de eNext</h3></left>
                    <div class="accordion" id="accordionExample">
  <div class="accordion-item" style="color: #fcfcfc; background-color: #343b56;border: var(--bs-accordion-border-width) solid #121b33;">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" style="color: #ffa400;background-color: #121b33;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Mayor confianza
      </button>
    </h2>
    <div id="collapseOne"  class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Con nuestra blockchain tendrá la seguridad de que los colaboradores recibirán datos precisos y oportunos, además de que sus registros de blockchain se compartirán solo con miembros de la red a los que haya autorizado.</div>
    </div>
  </div>
  <div class="accordion-item" style="color: #fcfcfc; background-color: #343b56;border: var(--bs-accordion-border-width) solid #121b33;">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" style="color: #ffa400;background-color: #121b33;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Mayor seguridad
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Todos los miembros que forman parte de la Blockchain eNext deben llegar a un consenso, y todas las transacciones validadas son inalterables ya que se registran de forma permanente.<br />Nadie, ni siquiera un administrador del sistema, puede suprimir una transacción.</div>
    </div>
  </div>
  <div class="accordion-item" style="color: #fcfcfc; background-color: #343b56;border: var(--bs-accordion-border-width) solid #121b33;">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" style="color: #ffa400;background-color: #121b33;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Más eficiencia
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Se elimina el tiempo perdido en las acciones de conciliación de registros.<br>Para acelerar las transacciones, un conjunto de reglas llamado contrato inteligente, se almacena en el blockchain y se ejecuta automáticamente. </div>
    </div>
  </div>
</div>
                    </div>
                </div>
               <!-- <div class="btn-casos-uso" style="display: block;text-align: center;border-radius: 5px;">
                        <a href="#si" style="border: 1px solid #fff3ed00;padding: 0px;border-radius: 25px"> 
                            <img  width="215" style="padding: 10px;" src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </a>
                    </div>-->
            </div>
        </section>
        <section id="si">
            <div class="content">
                <div class="como-ayudamos-content">
                    <div class="bc-left w50">
                        <p><span><b>06</b> / 06</span> Casos de uso</p>
                        <h2>Seguridad de<br /> la información</h2>
                        <p style="text-align: justify;">Actualmente las empresas le dan mayor importancia a la protección de sus activos de información, con el fin de generar confianza en su clientes, minimizando los riesgos con vulnerabilidades y amenazas informáticas.</p>
                        <div class="stc-btn-contact">
                            <a href="precio-empresas" class="btn_fill_c1">Adquirir</a>
                            <a href="" class="btn_unfill_c1">Contacto</a>
                        </div>
                    </div>
                    <div class="cac-right">
                        <!-- CARD INGENIERIA SOCIAL -->
                        <div class="cac-right-row" id="cardIS">

                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/ingenieria-social-ico.svg')); ?>" alt="">
                                <h3>Ingeniería Social </h3>
                            </div>
                            <div class="ac-right-text">
                                <p style="text-align: justify;">La ingeniería social son las diferentes técnicas de manipulación que usan los delincuentes cibernéticos para obtener información confidencial de los usuarios.</p>
                                <div class="fc-card" style="background: border-box; min-height: 1px;padding: 0px 0px;"  data-open="hola">
                                    <div class="saber-mas-btn" data-open="ingenieria-social">
                                        <buton>Saber más</buton>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- FIN CARD INGENIERIA SOCIAL -->

                        <!-- CARD SOCIAL LISTENING -->
                        <div class="cac-right-row" id="cardSL">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/social-listening-ico.svg')); ?>" alt="">
                                <h3>Social Listening</h3>
                            </div>
                            <div class="ac-right-text">
                                <p style="text-align: justify;">El Social Listening es una técnica que permite a las empresas conocer todo aquello que se habla de su marca en redes sociales a través de diferentes herramientas de monitorización. </p>
                                <div class="fc-card" style="background: border-box; min-height: 1px;padding: 0px 0px;"  data-open="hola1">
                                    <div class="saber-mas-btn" data-open="ingenieria-social">
                                    <buton>Saber más</buton>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- FIN CARD SOCIAL LISTENING -->

                        <!-- CARD ETHICAL HACKING -->
                        <div class="cac-right-row" id="cardEH">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/ethical-hacking-ico.svg')); ?>" alt="">
                                <h3>Ethical Hacking </h3>
                            </div>
                            <div class="ac-right-text">
                                <p style="text-align: justify;">En la actualidad la mayoría de las organizaciones se soportan en sistemas tecnológicos que contienen información valiosa de sus finanzas...</p>
                                <div class="fc-card" style="background: border-box; min-height: 1px;padding: 0px 0px;"  data-open="hola2">
                                    <div class="saber-mas-btn" data-open="ingenieria-social">
                                    <buton>Saber más</buton>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- FIN CARD ETHICAL HACKING -->
                    </div>
                </div>
                <!--<div class="btn-casos-uso" style="display: block;text-align: center;border-radius: 5px;">
                        <a href="#firma" style="border: 1px solid #fff3ed00;padding: 0px;border-radius: 25px"> 
                            <img  width="215" style="padding: 10px;" src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </a>
                    </div>-->
            </div>
        </section>

        <!-- Modals -->
        <div class="nav-scroll-bar">
            <div class="dots">
                <span>
                    <div class="dot-tooltip">Personas</div>
                </span>
                <span>
                    <div class="dot-tooltip">Firma electrónica</div>
                </span>
                <span>
                    <div class="dot-tooltip">Gestor documental</div>
                </span>
                <span>
                    <div class="dot-tooltip">Certificado SSL</div>
                </span>
            </div>
            <div class="dots-selector">
                <img src="<?php echo e(asset('assets/img/dot-selector-blue.svg')); ?>" alt="">
            </div>
        </div>
        <div class="casos-de-uso-blockchain">
            <div class="casos-de-uso-blockchain-cont">
                <div class="close-btn-cub"></div>
                <div class="w50">
                    <h3>Casos de uso</h3>
                    <p>Las empresas que lideran en innovación a nivel global han apostado por implementar dentro de sus organizaciones la Blockchain, con el gran objetivo de generar confianza, otorgar mayor seguridad en sus procesos y minimizar desacuerdos en la información.<br><br>Nuestra apuesta va en función de brindarles todos los beneficios de la blockchain, incluyendo todas las características de seguridad de la PKI eNext.</p>
                </div>
                <div class="w50">
                    <p>Alguno de los campos en los que se pueden aplicar nuestra Blockchain son:</p>
                    <div class="c-uso-l">
                        <ul class="w50">
                            <li>Cadena de suministro.</li>
                            <li>Cuidado de la salud.</li>
                            <li>Gobierno.</li>
                            <li>Venta minorista.</li>
                            <li>Medios y publicidad.</li>
                            <li>Petróleo y gas.</li>
                        </ul>
                        <ul class="w50">
                            <li>Telecomunicaciones.</li>
                            <li>Fabricación.</li>
                            <li>Seguro.</li>
                            <li>Servicios financieros.</li>
                            <li>Viajes y transporte.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- INICIO CAMBIO FIRMA -->
        <div class="felectronica-modal" data-target="facturacion-electronica">
            <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
            <div class="felectronica-modal-left">
                <h2>Firmas<br> Electrónicas</h2>
                <p style="text-align: justify;">Este tipo de certificación electrónica es aún más segura que la firma manuscrita, recoge todos los
                        elementos periciales y características especificadas en la ley de gobierno electrónico del Ecuador,
                        y solo puede ser emitido por un Ente de Certificación acreditado por la Agencia de Regulación y
                        Control de las Telecomunicaciones (ARCOTEL).
                    <br>
                <div class="cc-btn-contact">
                  <a href="precio-empresas">Adquirir</a>
                </div>
                </p>
            </div>
            <div class="felectronica-modal-right">
                <!-- <pre> -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <br>
                <font color="#fff"><b><b>Para asegurar y garantizar la verificación de la identidad de<br> nuestros clientes, utilizamos :</b></font>
                <br><br>
                <img src="<?php echo e(asset('assets/img/iconos-proceso.svg')); ?>" alt="">
                <!-- <pre>  -->
            </div>
            <div class="nav-buttons-modal">
                <div>
                    <span>
                        <br>
                    </span>
                </div>
                <div>
                    <span>
                        F.E<br>Certificada
                    </span>
                </div>
            </div>

        </div>
        <!-- FIN CAMBIO FIRMA -->

      

        <!-- INICIO CERTIFICA -->
        <div class="felectronica-modal fe-alt-bg" data-target="facturacion-certificada">
            <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
            <div class="felectronica-modal-left">
                <h2>Firma <br>Electrónica <br>Certificada</h2>
                <p style="text-align: justify;">Certifica las evidencias digitales creadas al firmar un documento. Esta firma otorga un alto nivel de
                    seguridad utilizando <b>sellado de tiempo, biometría y blockchain de eNext.</b></p>
                <div class="cc-btn-contact">
                  <a href="precio-empresas">Adquirir</a>
                    <a href="contactos">Contacto</a>
                </div>
            </div>
            <div class="felectronica-modal-right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                <ul>
                    <li class="item" id="fe-que-es-firma-certificada">
                        <a href="#fe-que-es-firma-certificada" class="btn"><span></span><b style="color: aliceblue;">¿Qué es la Firma Electrónica
                                Certificada?</b></a>
                        <div class="sub-item-faq">
                            <p style="text-align: justify;">Es aquella que mantiene un control único y exclusivo de la firma por parte del usuario.
                                <br>Está conectada, de tal manera, con los datos del documento firmado que cualquier
                                cambio ulterior es detectable. Al firmar documentos con la firma certificada, estos son
                                inalterables, al estar vinculados con la Blockchain de eNext.
                            </p>
                        </div>
                    </li>
                    <li class="item" id="fe-firma-certificada-uso">
                        <a href="#fe-firma-certificada-uso" class="btn"><span></span><b style="color: aliceblue;">¿Para qué sirve?</b></a>
                        <div class="sub-item-faq">
                            <p style="text-align: justify;">Con nuestra Firma Certificada usted podrá firmar todo tipo de documento digital que no
                                requiera tener validez legal. Puede ser utilizado para procesos internos de compañías,
                                notificaciones y comunicaciones entre terceros, trámites operativos repetitivos o
                                transaccionales. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-buttons-modal">
                <div>
                    <span>
                        F.E<br>Certificada
                    </span>
                </div>
                <div>
                    <span>
                        F.E<br>Constancia
                    </span>
                </div>
            </div>
        </div>
        <!-- FIN CERTIFICA -->

        <!-- INICIO CONSTANCIA -->
        <div class="felectronica-modal fe-alt-bg2" data-target="facturacion-constancia">
            <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
            <div class="felectronica-modal-left">
                <h2>Firma <br>Electrónica de<br> Constancia</h2>
                <p style="text-align: justify;">La firma electrónica de constancia consiste en aceptar el contenido de un documento digital, mediante
                    la verificación de un <b>PIN</b> u <b>OTP</b>, o tan solo un click. </p>
                <div class="cc-btn-contact">
                  <a href="precio-empresas">Adquirir</a>
                    <a href="contactos">Contacto</a>
                </div>
            </div>
            <div class="felectronica-modal-right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <ul>
                    <li class="item" id="fe-que-es-firma-constancia">
                        <a href="#fe-que-es-firma-constancia" class="btn"><span></span><b style="color: aliceblue;">¿Qué es la Firma Electrónica
                                de Constancia?</b></a>
                        <div class="sub-item-faq">
                            <p style="text-align: justify;">Es una aceptación tácita en la que existe una asociación lógica entre la cuenta de origen
                                del mensaje y la firma. Este tipo de firma permite evidenciar la trazabilidad de la
                                información generada. </p>
                        </div>
                    </li>
                    <li class="item" id="fe-firma-constancia-uso">
                        <a href="#fe-firma-constancia-uso" class="btn"><span></span><b style="color: aliceblue;">¿Para qué sirve?</b></a>
                        <div class="sub-item-faq">
                            <p style="text-align: justify;">Nuestra Firma Constancia puede ser utilizada para suscribir todo tipo de documentos,
                                transacciones o procesos en los que se requiere una rúbrica de constancia, por ejemplo
                                recibos, notas de entrega/recepción, etc. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-buttons-modal">
                <div>
                    <span>
                        F.E<br>Certificada
                    </span>
                </div>
                <div>
                    <span>
                        F.E<br>Transaccional
                    </span>
                </div>
            </div>
        </div>
        <!-- FIN CONSTANCIA -->

        <!-- INICIO TRANSACCIONAL -->
        <div class="felectronica-modal fe-alt-bg3" data-target="facturacion-transaccional">
            <img src="<?php echo e(asset('assets/img/close-btnimg.svg')); ?>" onclick="changeImagedos()" alt="">
            <div class="felectronica-modal-left">
                <h2>Firma <br>Electrónica <br>Transaccional</h2>
                <p style="text-align: justify;">Diseñada para tener validez y duración en una sola transacción, garantizando la identidad de la
                    persona, otorgando el más alto nivel de <b>legalidad, seguridad y autenticación.</b></p>
                <a id="ver-planes-personas-transaccional" href="precio-empresas-in" class="btn-yellow">Ver planes
                    <span class="btn-arrow"></span>
                </a>
            </div>
            <div class="felectronica-modal-right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OvCr0OSOxzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <ul>
                    <li class="item" id="fe-que-es-firma-transaccional">
                        <a href="#fe-que-es-firma-transaccional" class="btn"><span></span><b style="color: aliceblue;">¿Qué es la Firma
                                Electrónica Transaccional?</b></a>
                        <div class="sub-item-faq">
                            <p style="text-align: justify;">Nuestra firma transaccional contiene las mismas características de la firma electrónica,
                                es decir, cumple con todos los requerimientos normativos de la ley de gobierno
                                electrónico otorgando el más alto nivel de legalidad, seguridad y autenticación. </p>
                        </div>
                    </li>
                    <li class="item" id="fe-firma-transaccional-uso">
                        <a href="#fe-firma-transaccional-uso" class="btn"><span></span><b style="color: aliceblue;">¿Para qué sirve?</b></a>
                        <div class="sub-item-faq">
                            <p style="text-align: justify;">La Firma Transaccional está diseñada para procesos transaccionales de toda índole en los
                                cuales las contrapartes requieren el más alto nivel de seguridad y legalidad en la
                                suscripción de documentos digitales, como por ejemplo apertura de cuentas
                                corrientes/ahorros, solicitudes de créditos bancarios, contratos de prestación de
                                servicio de telefonía celular, etc.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-buttons-modal">
                <div>
                    <span>
                        F.E<br>
                    </span>
                </div>
               
            </div>
        </div>
        <!-- FIN TRANSACCIONAL -->

        <!-- INICIO nuevo -->
        <div class="felectronica-modal fe-alt-bg33" data-target="hola" style="    background-color: #fff8f4;">
            <img src="<?php echo e(asset('assets/img/visto.png')); ?>"  alt="">
            <div class="felectronica-modal-left">
            <img class="img-is" src="<?php echo e(asset('assets/img/ingenieria-social-ilustra.png')); ?>" style="margin-left: 0px;" alt="">
            </div>
            <div class="felectronica-modal-right">
                    <h2>Ingeniería <br>Social</h2>
                    <p style="text-align: justify;padding-right: 1rem;color: #202945;">La ingeniería social son las diferentes técnicas de manipulación que usan los delincuentes cibernéticos para obtener información confidencial de los usuarios.<br><br> Los ciberdelincuentes engañan a sus víctimas haciéndose pasar por otra persona. Por ejemplo, se hacen pasar por familiares, personas de soporte técnico, compañeros de trabajo o personas de confianza. El objetivo de este engaño es apropiarse de datos personales, contraseñas o suplantar la identidad de la persona engañada.</p>
                    <ul>
                        <li class="item" id="know-b4">
                            <a href="#know-b4" class="btn"><span></span><b style="    color: #202945;">Know B4</b></a>
                            <div class="sub-item-faq">
                                <p style="color: #202945;">Es la plataforma integrada y especializada en soluciones de capacitación y concientización de seguridad de la información mas grande del mundo. <br><br>Cada año ayuda a decenas miles de organizaciones en todo el mundo a gestionar el problema constante de la ingeniería social.</p>
                            </div>
                        </li>
                        <li class="item" id="cub-genera-resultados">
                            <a href="#cub-genera-resultados" class="btn"><span></span><b style="color: #202945;">Genera resultados y rentabilidad líderes en su sector:</b></a>
                            <div class="sub-item-faq">
                                <ul style="color: #202945;">
                                    <li>Reducción de infecciones de malware y ransomware.</li>
                                    <li>Reducción de pérdida de datos.</li>
                                    <li>Reducción del potencial de robo cibernético.</li>
                                    <li>Mayor productividad de los usuarios.</li>
                                    <li>Los usuarios tienen la seguridad como prioridad.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
           
        </div>
        <!-- FIN  -->
        <!-- INGENIERIA SOCIAL MODAL -->
         <!-- INICIO nuevo -->
         <div class="felectronica-modal fe-alt-bg33" data-target="hola1" style="    background-color: #fff8f4;">
            <img src="<?php echo e(asset('assets/img/visto.png')); ?>"  alt="">
            <div class="felectronica-modal-left">
            <img class="img-is" src="<?php echo e(asset('assets/img/social-listening-ilustra.png')); ?>" style="margin-left: 0px;" alt="">
            </div>
            <div class="felectronica-modal-right">
                    <h2>Social <br>Listening</h2>
                    <p style="text-align: justify;padding-right: 1rem;color: #202945;">El Social Listening es una técnica que permite a las empresas conocer todo aquello que se habla de su marca en redes sociales a través de diferentes herramientas de monitorización. 
                    <br>
Su función principal es medir la efectividad y la frecuencia de aquello que se dice de nuestra marca en los distintos medios sociales y evaluar el impacto que tienen esas conversaciones en la reputación de la marca. Pero además, esta técnica también permite conocer qué dicen los usuarios de nuestros máximos competidores y del mercado general.
                   </p>
                   
                </div>
           
        </div>
        <!-- FIN  -->
        <!-- INGENIERIA SOCIAL MODAL -->
         <!-- INICIO nuevo -->
         <div class="felectronica-modal fe-alt-bg33" data-target="hola2" style="    background-color: #fff8f4;">
            <img src="<?php echo e(asset('assets/img/visto.png')); ?>"  alt="">
            <div class="felectronica-modal-left">
            <img class="img-is" src="<?php echo e(asset('assets/img/ethical-hacking-ilustra.png')); ?>" style="margin-left: 0px;" alt="">
            </div>
            <div class="felectronica-modal-right">
                    <h2>Ethical<br> hacking</h2>
                    <p style="text-align: justify;padding-right: 1rem;color: #202945;">El objetivo fundamental del Ethical Hacking es explotar las vulnerabilidades existentes en los sistemas, realizando pruebas de intrusión a fin de verificar y evaluar la seguridad física y lógica de los sistemas de información, servidores, bases de datos, redes de computadores, aplicaciones web, etc.<br><br>
                    Las pruebas de penetración permiten descubrir las vulnerabilidades, analizarlas, evaluarlas, categorizarlas, y proponer correctivos en base a las prioridades de la organización.</p>
                    <ul>
                       
                        <li class="item" id="cub-genera-hoy">
                            <a href="#cub-genera-hoy" class="btn"><span></span><b style="color: #202945;">Los beneficios que ofrece el Ethical Hacking son:</b></a>
                            <div class="sub-item-faq">
                                <ul style="color: #202945;">
                                <li>Otorgar un panorama de las vulnerabilidades encontradas para tomar medidas.</li>
                                    <li>Evidenciar configuraciones inadecuadas en las aplicaciones.</li>
                                    <li>Identificar qué sistemas no se encuentran actualizados.</li>
                                    <li>Optimizar recursos para afrontar situaciones de riesgo.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
           
        </div>
        <!-- FIN  -->
        <!-- INGENIERIA SOCIAL MODAL -->

        <div class="cusoblockain-modal" data-target="ingenieria-social">

            <dialog id="modal1">

                <button id="btn-modal" style="color: #FFFFFF;" class="close-btn-cub" onclick="window.modal1.close();">X</button>
                <div class="felectronica-modal-left">
                    <img class="img-is" src="<?php echo e(asset('assets/img/ingenieria-social-ilustra.png')); ?>" alt="">
                </div>
                <div class="felectronica-modal-right">
                    <h2>Ingeniería <br>Social</h2>
                    <p style="text-align: justify;">La ingeniería social son las diferentes técnicas de manipulación que usan los delincuentes cibernéticos para obtener información confidencial de los usuarios.<br><br> Los ciberdelincuentes engañan a sus víctimas haciéndose pasar por otra persona. Por ejemplo, se hacen pasar por familiares, personas de soporte técnico, compañeros de trabajo o personas de confianza. El objetivo de este engaño es apropiarse de datos personales, contraseñas o suplantar la identidad de la persona engañada.</p>
                    <ul>
                        <li class="item" id="know-b4">
                            <a href="#know-b4" class="btn"><span></span><b style="color: aliceblue;">Know B4</b></a>
                            <div class="sub-item-faq">
                                <p>Es la plataforma integrada y especializada en soluciones de capacitación y concientización de seguridad de la información mas grande del mundo. <br><br>Cada año ayuda a decenas miles de organizaciones en todo el mundo a gestionar el problema constante de la ingeniería social.</p>
                            </div>
                        </li>
                        <li class="item" id="cub-genera-resultados">
                            <a href="#cub-genera-resultados" class="btn"><span></span><b style="color: aliceblue;">Genera resultados y rentabilidad líderes en su sector:</b></a>
                            <div class="sub-item-faq">
                                <ul>
                                    <li>Reducción de infecciones de malware y ransomware.</li>
                                    <li>Reducción de pérdida de datos.</li>
                                    <li>Reducción del potencial de robo cibernético.</li>
                                    <li>Mayor productividad de los usuarios.</li>
                                    <li>Los usuarios tienen la seguridad como prioridad.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
              
            </dialog>
        </div>
        <!-- FIN INGENIERIA SOCIAL MODAL -->

        <div class="cusoblockain-modal" data-target="social-listening">

            <dialog id="modal2">
                <button id="btn-modal" style="color: #FFFFFF;" class="close-btn-cub" onclick="window.modal2.close();">X</button>
                <div class="felectronica-modal-left">
                    <img class="img-sl" src="<?php echo e(asset('assets/img/social-listening-ilustra.png')); ?>" alt="">
                </div>
                <div class="felectronica-modal-right">
                    <h2>Social <br>Listening</h2>
                    <p>El Social Listening es una técnica que permite a las empresas conocer todo aquello que se habla de su marca en redes sociales a través de diferentes herramientas de monitorización. <br><br>Su función principal es medir la efectividad y la frecuencia de aquello que se dice de nuestra marca en los distintos medios sociales y evaluar el impacto que tienen esas conversaciones en la reputación de la marca. Pero además, esta técnica también permite conocer qué dicen los usuarios de nuestros máximos competidores y del mercado general.</p>
                </div>
                <!-- <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div> -->
            </dialog>
        </div>
        <div class="cusoblockain-modal" data-target="ethical-hacking">

            <dialog id="modal3">
                <button id="btn-modal" style="color: #FFFFFF;" class="close-btn-cub" onclick="window.modal3.close();">X</button>
                <div class="felectronica-modal-left">
                    <img class="img-eh" src="<?php echo e(asset('assets/img/ethical-hacking-ilustra.png')); ?>" alt="">
                </div>
                <div class="felectronica-modal-right">
                    <h2>Ethical <br>hacking</h2>
                    <p>El objetivo fundamental del Ethical Hacking es explotar las vulnerabilidades existentes en los sistemas, realizando pruebas de intrusión a fin de verificar y evaluar la seguridad física y lógica de los sistemas de información, servidores, bases de datos, redes de computadores, aplicaciones web, etc. <br><br>Las pruebas de penetración permiten descubrir las vulnerabilidades, analizarlas, evaluarlas, categorizarlas, y proponer correctivos en base a las prioridades de la organización.</p>
                    <ul>
                        <li class="item" id="ethical-hacking-beneficios">
                            <a href="#ethical-hacking-beneficios" class="btn"><span></span><b style="color: aliceblue;">Los beneficios que ofrece el Ethical Hacking son:</b></a>
                            <div class="sub-item-faq">
                                <ul>
                                    <li>Otorgar un panorama de las vulnerabilidades encontradas para tomar medidas.</li>
                                    <li>Evidenciar configuraciones inadecuadas en las aplicaciones.</li>
                                    <li>Identificar qué sistemas no se encuentran actualizados.</li>
                                    <li>Optimizar recursos para afrontar situaciones de riesgo.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="nav-buttons-modal">
            <div>
            </div>
            <div>
            </div>
        </div> -->
            </dialog>
        </div>
        <div id="modal-planes-personas">
            <section id="home-s7" data-status-scroll="waiting" style="height: auto">
                <div class="content">
                    <div class="planes-content">
                        <div class="pcc-left">
                            <h3>Obtén tu firma <br />electrónica</h3>
                            <p>y recibe acceso ilimitado en el tiempo que requieras.</p>
                        </div>
                        <div class="pcc-right">
                            <!-- <div class="pc-tab-buttons">
                            <div class="pc-tab-archivo active">
                                Archivo
                            </div>
                            <div class="pc-tab-archivo">
                                Token
                            </div>
                        </div> -->
                            <nav class="precio-archivo-token-tab-c2">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-personas-archivo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Archivo</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-personas-token" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Token</button>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-personas-archivo" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="pc-options-tabs-archivo">
                                    <div class="price-card">
                                        <h3 class="time">
                                            1 Mes
                                        </h3>
                                        <p class="price">
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
                                            10.99
                                        </p>
                                        <p class="tax-label">
                                            * Incluye IVA
                                        </p>
                                        <p class="card-note">

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
                                            1 Año
                                        </h3>
                                        <p class="price">
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                            <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                <div class="nav-buttons-modal">
                    <div id="close-modal-precio-personas">
                    </div>
                    <div style="visibility: hidden">
                    </div>
                </div>
            </section>
        </div>
        <div id="modal-planes-personas">
            <section id="home-s7" class="s-empresas" data-status-scroll="waiting">
                <div class="content">
                    <div class="planes-content">
                        <div class="pcc-left">
                            <h3>Obtén tu firma <br />electrónica</h3>
                            <p>y recibe acceso ilimitado en el tiempo que requieras.</p>
                        </div>
                        <div class="pcc-right">
                            <div class="pc-tab-buttons">
                                <div class="pc-tab-archivo active">
                                    Archivo
                                </div>
                                <div class="pc-tab-archivo">
                                    Token
                                </div>
                            </div>
                        </div>
                        <div class="pc-options-tabs">
                            <div class="pc-options-tabs-archivo">
                                <div class="price-card">
                                    <h3 class="time">
                                        1 Mes
                                    </h3>
                                    <p class="price">
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
                                        10.99
                                    </p>
                                    <p class="tax-label">
                                        * Incluye IVA
                                    </p>
                                    <p class="card-note">

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
                                        1 Año
                                    </h3>
                                    <p class="price">
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                            <div class="pc-options-tabs-archivo token" style="justify-content: space-evenly;">
                                <div class="price-card">
                                    <h3 class="time">
                                        1 Año
                                    </h3>
                                    <p class="price">
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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
                                        <img src="<?php echo e(asset('assets/img/symbol$.svg')); ?>" alt="">
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

<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/empresas.blade.php ENDPATH**/ ?>