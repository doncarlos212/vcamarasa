<?php

class noticias{

	public static function findAll(){

		return db::singleton()->query('select * from noticias order by fecha desc')->fetchAll();
		
	}

	
    
}

?>