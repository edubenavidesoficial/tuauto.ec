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


<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-personas" role="tabpanel" aria-labelledby="nav-home-tab">
        <div id="planes-personas">
            <section class="todos-los-planes-b">
                <div class="content">
				
                    <div class="planes-personas-content">
                        <div class="ppc-head">
						<br><br>
                            <h3>Formulario de contacto</h3>
                            <span></span>
                        </div>
                        <div class="ppc-cont">
                            <nav class="precio-archivo-token-tab-c1">
							<center>	<form>
  <div class="form-row">
 
    <div class="form-group col-md-6">
      <label style="    float: left;">Nombre*</label>
      <input type="text" class="form-control-a"  style="border-bottom: 1px solid #646464;"  id="" placeholder="">
	  <span></span>
    </div>
	<br><br>
	<div class="form-group col-md-6">
      <label style="    float: left;">Correo electrónico corporativo*</label>
      <input type="email" class="form-control-a"  style="border-bottom: 1px solid #646464;"  id="" placeholder="">
	  <span></span>
    </div>
	<br><br>
	<div class="form-group col-md-6">
      <label style="    float: left;">Teléfono*</label>
      <input type="text" class="form-control-a"  style="border-bottom: 1px solid #646464;"  id="" placeholder="">
	  <span></span>
    </div>
	<br><br>
	<div class="form-group col-md-6">
      <label style="    float: left;">Sector</label>
      <input type="text" class="form-control-a"  style="border-bottom: 1px solid #646464;"  id="" placeholder="">
	  <span></span>
    </div>
	<br><br>
	<div class="form-group col-md-6">
      <label style="    float: left;">Sector</label>
      <select id="inputState" class="form-control-a" style="border-bottom: 1px solid #646464;">
	  <option>-- </option>
		<option>Bienes Raíces y Construcción </option>
		<option>Comercialización y Retail</option>
		<option>Fabricación y Distribución </option>
		<option>Organismos sin fines de lucro</option>
		<option>Recursos Naturales</option>
		<option>Salud</option>
		<option>Sector Público</option>
		<option>Servicios Financieros</option>
		<option>Telecomunicaciones, Tecnología </option>
        
      </select>
    </div>
	<br><br>
	<div class="form-group col-md-6">
      <label style="    float: left;">Mensaje</label>
      <input type="text" class="form-control-a"  style="border-bottom: 1px solid #646464;"  id="" placeholder="">
	  <span></span>
    </div>
  </div>

   
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" style="    float: inherit;" type="checkbox" id="gridCheck">
      <label class="form-check-label" style="font-size: 10px;">
	  He leído y acepto nuestros Términos de servicio y Política de privacidad*
      </label>
    </div>
	<br><br>
  </div> </center>
  <center>
 <a href="gracias" class="btn btn-primary" style="
background: #FFA400;width: 260px;">Enviar</a>
 </center>

</form>
                            </nav>
                          
                        </div>
                    </div>
                  
                </div>
            </section>
            
        </div>
    </div>
   
    
</div>

	
<?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ingealimitec2/public_html/demos/demo.ingealimite.com/resources/views/web/contactos.blade.php ENDPATH**/ ?>