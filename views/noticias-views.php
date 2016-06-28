
	<div class="container bloque-noticias">
		<div class="row">
			<div class="">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    			
    				<input class="form-control" name="filtro" id="buscar" placeholder="" maxlength="100" type="text" value="">
    			
  				</div>
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="botones-pad">
					
					<button type="submit" class="btn btn-warning">BUSCAR</button>
  	
					<button type="button" class="btn btn-success">LIMPIAR</button>
				
				</div>
  			</div>
  		</div>	
  	</div>			


	<div class="container bloque-noticias">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
				<?php
				foreach ($noticias as $noticia) { ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="noticia" style="padding-bottom:30px;">

						<div class="row" id="media">

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
								<div class="wow fadeIn animated altura" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
									<!-- Change the url -->
									<div class="embed-container">
										<?php echo $noticia['video']; ?>
										<img class="imagen-responsive" src="/vcamarasa/img/<?php echo $noticia['imagen_exterior']; ?>" />
									</div>	 
									
								</div>
							</div>

						</div>		
																	
						<div class="row" id="titulo-fecha">

							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9  ">
								<h4 class="title classic no-tabla titulo-noticias"><?php echo $noticia['titular']; ?></h4>
							</div>

							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<span class="estilo-fecha"><?php echo $noticia['fecha']; ?></span>
							</div>

						</div>
							
						<div class="row" id="contenido" style="min-height: 87px; overflow: hidden;">

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<p><?php $acortar =  $noticia['cuerpo']; echo substr($acortar, 0, 170); ?> [...]</p>
							</div>

						</div>	

					</div>	

				<?php } ?>
			</div>
		</div>
	</div>			
