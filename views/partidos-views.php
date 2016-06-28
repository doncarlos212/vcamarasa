
<div class="container-fluid text-center estilo-container-datos" id="stats">
	<div class="row">
		<!-- Columna de partidos -->
		<!-- <div class="col-lg-6 no-padding">


			<div class="contador-estilos">
				
				<div class="estilo-equipos">
					
					<div>
						<img class="estilo-logo" src="/vcamarasa/img/<?php echo $consultas[0][0]['logo_1']; ?>" />
					</div>
					<h5>
						<?php echo $consultas[0][0]['equipo_1']; ?>
					</h5>
				</div>
				
				
				<div class="estilo-vs">
					<span>-</span>
						VS
					<span>-</span>
					<br>
					<div class="estilo-canal">
					<?php echo $consultas[0][0]['canal']; ?>
				</div>	
				</div>
			
				<div class="estilo-equipos">
					
					<div>
						<img class="estilo-logo" src="/vcamarasa/img/<?php echo $consultas[0][0]['logo_2']; ?>" />
					</div>
					<h5>
						<?php echo $consultas[0][0]['equipo_2']; ?>
					</h5>
				</div>
				
			</div>
			
			<div class="estilo-info">
				
				<i class="fa fa-calendar">&nbsp;<?php echo $consultas[0][0]['fecha']; ?></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o">&nbsp;<?php echo $consultas[0][0]['hora']; ?></i> 
				<br>	
				<i class="fa fa-map-marker">&nbsp;<span class="estilo-estadio"><?php echo $consultas[0][0]['estadio']; ?><span></i>
					
			</div>
		
		</div> --> <!-- col -->

		<!-- Columna de partidos -->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">

			<div class="contador-estilos">
				
				<div class=" wow fadeInLeft text-center" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
					<div class="facts one col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img class="estilo-logo" src="/vcamarasa/img/logo-depor.png" />
						<h3><?php echo $consultas[0][0]['equipo_1']; ?></h3> 
					</div>

					<div class="estilo-vs">
						<span>- VS -</span>
						<br />
						<div class="estilo-canal">
							<?php echo $consultas[0][0]['canal']; ?>
						</div>	
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img class="estilo-logo" src="/vcamarasa/img/<?php echo $consultas[0][0]['logo_2']; ?>" />
						<h3><?php echo $consultas[0][0]['equipo_2']; ?></h3> 
					</div>

				</div>

			</div>
			
			<div class="estilo-info">
				<i class="fa fa-calendar">&nbsp;<?php echo $consultas[0][0]['fecha']; ?></i>&nbsp;&nbsp;&nbsp;
				<i class="fa fa-clock-o">&nbsp;<?php echo $consultas[0][0]['hora']; ?></i> 
				<br />	
				<i class="fa fa-map-marker">&nbsp;<span class="estilo-estadio"><?php echo $consultas[0][0]['estadio']; ?><span></i>
			</div>
		
		</div> <!-- col -->

		<!-- Columna de estadisticas -->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">

		<div id="capa">	
			<div class="contador-estilos">
				
				<div class=" wow fadeInRight text-center" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
					
					<div class="facts one col-lg-3 col-md-3 col-sm-3 col-xs-3 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php echo $consultas[3][0]['totalpartidos']; ?></span>
						</div>
						<h3>Partidos</h3> 
					</div>

					<div class="facts two col-lg-3 col-md-3 col-sm-3 col-xs-3 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php echo $consultas[3][0]['totalminutos']; ?></span>
						</div>
						<h3>Minutos</h3> 
					</div>

					<div class="facts two col-lg-3 col-md-3 col-sm-3 col-xs-3 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php echo $consultas[3][0]['totalminutos']; ?></span>
						</div>
						<h3>Minutos</h3> 
					</div>

					<div class="facts two col-lg-3 col-md-3 col-sm-3 col-xs-3 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php echo $consultas[3][0]['totalminutos']; ?></span>
						</div>
						<h3>Minutos</h3> 
					</div>

				</div>
			</div>
		</div>
		<div id="capa1">	
				
			<div class="contador-estilos">
				
				<div class=" wow fadeInLeft text-center" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
					<div class="facts one col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][0]['posicion']=="centro") {
							
							echo $consultas[5][0]['partidos'];
							
							}
							?></span>
						</div>
						<h4>Partidos</h4> 
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][0]['posicion']=="centro") {
							
							echo $consultas[5][0]['minutos'];
							
							}
							?></span>
						</div>
						<h4>Minutos</h4> 
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][0]['posicion']=="centro") {
							
							echo $consultas[5][0]['minutos'];
							
							}
							?></span>
						</div>
						<h4>Minutos</h4> 
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][0]['posicion']=="centro") {
							
							echo $consultas[5][0]['minutos'];
							
							}
							?></span>
						</div>
						<h4>Minutos</h4> 
					</div>

				</div>
			</div>
		</div>

			
				
		
		<div id="capa2">
			
			<div class="contador-estilos">
				
				<div class=" wow fadeInLeft text-center" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
					
					<div class="facts one col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
							
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][1]['posicion']=="lateral") {
							
							echo $consultas[5][1]['partidos'];
							
							}
							?></span>
						</div>

						<h4>Partidos</h4> 
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][1]['posicion']=="lateral") {
							
							echo $consultas[5][1]['minutos'];
							
							}
					
							?></span>
						</div>
						<h4>Minutos</h4> 
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][0]['posicion']=="centro") {
							
							echo $consultas[5][0]['minutos'];
							
							}
							?></span>
						</div>
						<h4>Minutos</h4> 
					</div>

					<div class="facts two col-lg-6 col-md-6 col-sm-6 col-xs-6 altura-contador">
						
						<div class="facts-num">
							<span class="counter"><?php 
							if ($consultas[5][0]['posicion']=="centro") {
							
							echo $consultas[5][0]['minutos'];
							
							}
							?></span>
						</div>
						<h4>Minutos</h4> 
					</div>
				
				</div>
			
						
			</div>
		</div>

	

			<div class="estilo-estaditicas col-lg-12">
				<div class="row">

					<div onclick="total()" class="col-lg-4 col-md-4 col-xs-4 col-sm-4 estilo-botones-estadisticas">
						<span class="estilo-estadio">Total</span>
					</div>
					<?php 
					$contador = 1;
					foreach ($consultas[4] as $consulta) { ?>
						<div onclick="equipo<?php echo $contador; ?>()" class="col-lg-4 col-md-4 col-xs-4 col-sm-4 estilo-botones-estadisticas">
							<span class="estilo-estadio"><?php echo $consulta['equipo']; ?></span>
						</div>
					<?php 
					$contador++;
					} ?>

				</div>	
			</div>
		
		</div> <!-- col -->

	</div> <!-- row -->
</div> <!--container-->


<div class="container-fluid fondo container-altura">
	<div class="row ">
		
		<!--Noticias -->
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 estilo-bloque-noticias borde-derecho col-altura">

			<div class="row antirow estilos-responsive">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-bottom">					
					<h3 class="title classic">Últimas Noticias</h3>
				</div>

			</div>	

			<!--Bucle que repite las ultimas 3 noticias -->
			<div class="row antirow estilos-responsive">
				
				<?php for($i=0;$i<4;$i++){ ?>
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="noticia" style="padding-bottom:30px;">

						<div class="row" id="media">

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
								<div class="wow fadeIn animated altura" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
									<!-- Change the url -->
									<div class="embed-container">
										<?php echo $consultas[1][$i]['video']; ?>
										<img class="imagen-responsive" src="/vcamarasa/img/<?php echo $consultas[1][$i]['imagen_exterior']; ?>" />
									</div>	 
									
								</div>
							</div>

						</div>		
																	
						<div class="row" id="titulo-fecha">

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
								<h3 class="title classic no-tabla titulo-noticias"><?php echo $consultas[1][$i]['titular']; ?></h3>
							</div>

							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<span class=""><?php echo $consultas[1][$i]['fecha']; ?></span>
							</div>

						</div>
							
						<div class="row" id="contenido" style="min-height: 87px; overflow: hidden;">

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<p><?php $acortar =  $consultas[1][$i]['cuerpo']; echo substr($acortar, 0, 170); ?> [...]</p>
							</div>

						</div>	

					</div>	

				<?php }	?> <!--Fin del Bucle -->
			</div>
						
		</div>	
			
			<!-- Panel Derecho -->	
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 borde-izquierdo col-altura">
					<div class="row">
						<!-- Bloque de Campus -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campus text-center">
						<img src="#" / >
						</div>		
						<!-- Bloque de Twitter -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 twitter text-center">
							<a class="twitter-timeline" href="https://twitter.com/vicama8" data-widget-id="709660240946581504"
							data-chrome="nofooter noheader noborders" >Tweets por el @vicama8.</a>
							

						</div>
						
					</div>	

		</div>	
	</div>
</div>		

<!--Widget de Instagram -->
<div class="container-fluid fondo">
	<div class="row borde-instagram">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 altura-instagram">
				<!-- SnapWidget -->
				
				<iframe src="http://snapwidget.com/in/?u=dmljYW1hOHxpbnwxMjV8NXwxfHxub3wwfGZhZGVPdXR8b25TdGFydHx5ZXN8eWVz&ve=160316"
				title="Instagram Widget" class="snapwidget-widget" allowTransparency="true"
				frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; border-bottom: 1px solid #FFF;"></iframe>

		</div>
	</div>		
</div>

<!-- Logos de patrocinadores -->

<div id="colaboradores" class="container fondo text-center">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 altura-colaboradores">
			<h2 class="estilo-titulos">COLABORADORES</h2>
			<div class="col-lg-1"></div>
			<div class="col-lg-2 col-md-3 col-sm-2 col-xs-2 altura-partners">
				<img class="estilo-partners" src="/vcamarasa/img/buenos/mizuno-gris.png" onmouseover="this.src='/vcamarasa/img/buenos/mizuno.png';"
				onmouseout="this.src='/vcamarasa/img/buenos/mizuno-gris.png';"/>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 altura-partners">
				<img class="estilo-partners" src="/vcamarasa/img/buenos/alfredo-gris.png" onmouseover="this.src='/vcamarasa/img/buenos/alfredo.png';"
				onmouseout="this.src='/vcamarasa/img/buenos/alfredo-gris.png';"/>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 altura-partners">
				<img class="estilo-partners" src="/vcamarasa/img/buenos/save-gris.png" onmouseover="this.src='/vcamarasa/img/buenos/save.png';"
				onmouseout="this.src='/vcamarasa/img/buenos/save-gris.png';"/>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 altura-partners">
				<img class="estilo-partners" src="/vcamarasa/img/buenos/seleccion-gris.png" onmouseover="this.src='/vcamarasa/img/buenos/seleccion.png';"
				onmouseout="this.src='/vcamarasa/img/buenos/seleccion-gris.png';"/>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 altura-partners">
				<img class="estilo-partners" src="/vcamarasa/img/buenos/levante-gris.png" onmouseover="this.src='/vcamarasa/img/buenos/levante.png';"
				onmouseout="this.src='/vcamarasa/img/buenos/levante-gris.png';"/>
			</div>

			
			<div class="col-lg-1"></div>
			
		
		</div>
	</div>
</div>

<!--Formulario Contacto -->

<div id="contacto" class="container-fluid fondo-diferente text-center">
	<div class="row">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 altura-formulario">
			<h2 class="estilo-titulos">CONTACTO</h2>
			<form>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 formulario-izquierda">
					<input type="text" class="form-control campos estilo-input" id="email" placeholder="Email">
					<input type="text" class="form-control campos estilo-input" id="asunto" placeholder="Asunto">
					<input type="text" class="form-control estilo-input" id="nombre" placeholder="Nombre">


				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 formulario-derecha">
					<textarea class="form-control campo-texto estilo-input" rows="7" placeholder="Mensaje"></textarea>
				</div>
				
				
					<button type="submit" class="btn btn-warning estilos-boton">ENVIAR</button>
				
			</form>	

		</div>
	</div>
</div>		