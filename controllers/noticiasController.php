<?php
class noticiasController{
    
    /**
    * Trabajo con el texto de la biografia  
    **/
	
	public function actionPrincipal(){

		require "models/noticias.php";

		$noticias=noticias::findAll();

		vista("noticias-views",array('noticias'=>$noticias),"layout-noticias");

	}

} 

?>	