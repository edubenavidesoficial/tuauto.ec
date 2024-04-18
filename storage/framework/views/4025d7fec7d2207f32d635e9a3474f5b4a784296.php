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
<div class="flex-container-horizontal">
    <div id="content" class="page">
        <section style="background: var(--custom-soft-blue);">
            <div class="content">
                <div class="tipos-firma-content">
                    <div class="tfc-left">
                        <img src="<?php echo e(asset('assets/img/quienes-somos-ilustra.png')); ?>" alt="">
                    </div>
                    <div class="tfc-right">
                        <h2>Quienes<br>somos</h2>
                        <div class="tfc-right-text">
                            eNext creamos y proveemos soluciones tecnológicas integrales e innovadoras basadas en identidad y seguridad digital, que incorporan el uso de certificación electrónica y blockchain para personas, empresas y gobierno.<br /><br />Trabajamos en conjunto con empresas tecnológicas de renombre a nivel global para otorgar a nuestros clientes productos y servicios de vanguardia y máxima calidad.<br><br>Somos un Ente de Certificación de Información y Servicios Relacionados, acreditado por la Agencia de Regulación y Control de las Telecomunicaciones del Ecuador (ARCOTEL).
                        </div>
                        <img src="<?php echo e(asset('assets/img/agencia-regulacion-tag.svg')); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/ingealimitec2/public_html/demos/demo.ingealimite.com/resources/views/web/quienes-somos.blade.php ENDPATH**/ ?>