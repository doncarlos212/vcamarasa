<?php

class texto_biografia{

	public static function texto(){

		return db::singleton()->query('select * from biografia')->fetchAll();
		
	}

	
    
}

?>