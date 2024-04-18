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
        background: #EEEBFF;
    }
</style>
<div class="flex-container-horizontal">
    <div id="content" class="page">
        <section>
            <div class="content">
                <div class="centro-ayuda-content">
                    <div class="centro-ayuda-content-head">
                        <h2>Centro de<br> ayuda</h2>
                        <p>Si tienes dudas o necesitas ayuda, contamos con<br /> herramientas a tu disposición.</p>
                    </div>
                    <div class="centro-ayuda-content-cards">
                        <a class="centro-ayuda-content-cards-1">
                            <p>Videos</p>
                            <h3>Guías<br>Informáticas</h3>
                        </a>
                        <a href="faq" class="centro-ayuda-content-cards-2">
                            <p>Faq´s</p>
                            <h3>Preguntas<br>frecuentes</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/ayuda.blade.php ENDPATH**/ ?>