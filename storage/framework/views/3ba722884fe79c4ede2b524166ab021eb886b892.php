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
<div class="flex-container-horizontal">
    <div id="content" class="page personas">
        <!--SERVICIOS PARA PERSONAS-->
        <section>
            <div class="content">
                <div class="personas-content">
                    <div class="pc-lef">
                         <h2>¡Gracias!</h2>
                        <p><b>¡Gracias por consultar! Nos pondremos en contacto contigo en breve.</b></p>
                       
                    
                    </div>

                    <div class="pc-right">
                        <img src="<?php echo e(asset('assets/img/avi.png')); ?>" alt="">
                       
                    </div>

                </div>

            </div>
        </section>

    
     </div>
 
  
    
    </div>
</div>

	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\enext\enext\resources\views/web/gracias.blade.php ENDPATH**/ ?>