<?php

class partidos{

	public static function findAll(){

		return db::singleton()->query('select * from partidos order by fecha desc')->fetchAll();
		
	}

	
    
}

?>