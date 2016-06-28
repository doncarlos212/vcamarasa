<?php

$db=array(

	'dbhost'=>'localhost',
	'dbname'=>'cam_bd',
	'dbuser'=>'root',
	'dbpass'=>'');


function vista($vista,$datos,$layout){
	extract($datos);//define el contenido de $datos como variables
	ob_start();
	require 'views/'.$vista.'.php';
	$contenido=ob_get_clean();
	require 'layouts/'.$layout.'.php';
}

function vistaSimple($layout){
	require 'layouts/'.$layout.'.php';	
}
?>
