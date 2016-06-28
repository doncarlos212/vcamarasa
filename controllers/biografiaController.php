<?php
class biografiaController{
    
    /**
    * Trabajo con el texto de la biografia  
    **/
	
	public function actionPrincipal(){

		require "models/texto_biografia.php";

		$texto=texto_biografia::texto();

		vista("biografia-views",array('texto'=>$texto),"layout-biografia");

	}

} 

?>	