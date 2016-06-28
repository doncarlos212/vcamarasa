


	<div class="container-fluid text-center">
		<div class="row">
			<!-- Columna de partidos -->
			<div class="col-lg-6 no-padding">

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
			
			</div> <!-- col -->

				<div class="col-lg-6 no-padding"><!-- Columna de estadisticas -->

				<div class="contador-estilos">
					
								<div class=" wow fadeInLeft text-center" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
				<div class="facts one col-md-6 col-sm-6">
					<span class="facts-icon"><i class="fa fa-user"></i></span>
					<div class="facts-num">
						<span class="counter">1200</span>
					</div>
					<h3>Partidos</h3> 
				</div>

				<div class="facts two col-md-6 col-sm-6">
					<span class="facts-icon"><i class="fa fa-institution"></i></span>
					<div class="facts-num">
						<span class="counter">1277</span>
					</div>
					<h3>Minutos</h3> 
				</div>

			</div>

				</div>
				
				<div class="estilo-info">
					
					<i class="fa fa-calendar">&nbsp;<?php echo $consultas[0][0]['fecha']; ?></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o">&nbsp;<?php echo $consultas[0][0]['hora']; ?></i> 
					<br>	
					<i class="fa fa-map-marker">&nbsp;<span class="estilo-estadio"><?php echo $consultas[0][0]['estadio']; ?><span></i>
						
				</div>
			
			</div> <!-- col -->



		
		</div> <!-- row -->
	</div> <!--container-->


	