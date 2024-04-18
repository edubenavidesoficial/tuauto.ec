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
<div class="flex-container-horizontal" style="background: var(--custom-soft-blue);">
    <div id="content" class="page">
        <section style="background: var(--custom-soft-blue);">
            <div class="content">
                <div class="como-ayudamos-content">
                    <div class="cac-left">
                        <div>
                            <h2>Cómo te<br />ayudamos</h2>
                            <img src="<?php echo e(asset('assets/img/como-te-ayudamos.png')); ?>" alt="">
                        </div>
                    </div>
                    <div class="cac-right">
                        <br><br>
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/seguridad-digital-ico.svg')); ?>" alt="">
                                <h3>Seguridad digital</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Todos tus procesos de firma electrónica están respaldados por un sistema de seguridad digital que garantiza la autoridad y veracidad de los datos, así como la invulnerabilidad en todas las etapas.</p>
                            </div>
                        </div>
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/tegnologia-vanguardia-ico.svg')); ?>" alt="">
                                <h3>Tecnología de vanguardia</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Los recursos tecnológicos utilizados en los procesos de diseño e implementación de nuestros productos, dan como resultado un valor agregado y diferenciador, lo que hace que nuestros clientes no duden en poner en nuestras manos sus requerimientos y necesidades.</p>
                            </div>
                        </div>
                        <div class="cac-right-row">
                            <div class="ac-right-title">
                                <img src="<?php echo e(asset('assets/img/almacenamiento-nube-ico.svg')); ?>" alt="">
                                <h3>Almacenamiento en la nube</h3>
                            </div>
                            <div class="ac-right-text">
                                <p>Ahora podrá acceder a su firma electrónica donde quiera que se encuentre con nuestro servicio de almacenamiento seguro en la nube. Tendrá acceso a su certificado desde su computador, laptop o dispositivo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/como-te-ayudamos.blade.php ENDPATH**/ ?>