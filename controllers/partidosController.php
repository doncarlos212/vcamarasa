<?php
class partidosController{
    
    /**
    * Hace un listado completo
    * de todas las noticias, este listado
    * es utilizado para cargar el layaut principal
    **/
	
	public function actionPrincipal(){
		require "models/partidos.php";

        require "models/noticias.php";

        require "models/estadisticas.php";

      

        $partidos=partidos::findAll();
        $noticias=noticias::findAll();
        $estadisticas=estadisticas::findAll();
        $estadisticastotales=estadisticas::totalestadisticas();
        $equiposactivos=estadisticas::equiposactivos();
        $estadisticasequipos=estadisticas::estadisticasequipos();

        $consultas[0]=$partidos;
        $consultas[1]=$noticias;
        $consultas[2]=$estadisticas;
        $consultas[3]=$estadisticastotales;
        $consultas[4]=$equiposactivos;
        $consultas[5]=$estadisticasequipos;
		
		vista("partidos-views",array('consultas'=>$consultas),"layout-principal");              

	} 
/*
    public function actionPrincipal(){
        require "models/partidos.php";

        $partidos=partidos::findAll();
        
        vista("partidos-views",array('partidos'=>$partidos),"layout-principal");              

    }*/


    /**
    * Hace un listado las noticias destacadas,
    * este listado
    * es utilizado para cargar el layaut de noticias destacadas
    **/
/*
  public function actionNoticiasDestacadas(){
        require "models/noticias.php";

        $noticias=noticias::findAll();
        
        vista("noticias_destacadas",array('noticias'=>$noticias),"layout_noticias");              

    } */

    /**
    * Hace un listado completo
    * de todas las noticias, este listado
    * es utilizado para cargar el layaut de todas las noticias
    **/
	/*
    public function actionHemerotecaNoticias(){
        require "models/noticias.php";

        $noticias=noticias::findAll();
        
        vista("hemeroteca_noticias",array('noticias'=>$noticias),"layout_noticias"); 

    }*/

    
} 

?>

