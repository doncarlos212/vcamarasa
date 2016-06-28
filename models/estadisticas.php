<?php

class estadisticas{

	public static function findAll(){
		/*todas las estadisticas*/
		return db::singleton()->query('select * from estadisticas')->fetchAll();
		
	}

	public static function totalestadisticas(){
		/*la suma de las estadisticas*/
		return db::singleton()->query('SELECT Sum(partidos) as totalpartidos, sum(minutos) as totalminutos FROM estadisticas')->fetchAll();
		
	}	

	public static function equiposactivos(){
		/*el nombre de los equipos activos*/
		return db::singleton()->query("SELECT equipo FROM estadisticas where activo='si'")->fetchAll();

	}

	public static function estadisticasequipos(){

		return db::singleton()->query("SELECT partidos,minutos,posicion FROM estadisticas where activo='si'")->fetchAll();
	}

	
    
}

?>