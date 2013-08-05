<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reducir_fotos extends CI_Controller {

	public function index()	{

		$id="logo2";
		$img_origen = imagecreatefrompng( base_url().'img/'.$id.'.png' );
		$ancho_origen = imagesx( $img_origen );//se ontiene el ancho de la imagen
		$alto_origen = imagesy( $img_origen );//se obtiene el alto de la imagen
		$ancho_limite=720;
		if($ancho_origen>$alto_origen){// para foto horizontal
		    
		    $ancho_origen=$ancho_limite;
		    $alto_origen=$ancho_limite*imagesy( $img_origen )/imagesx( $img_origen );
		    
		}else{//para fotos verticales
		    $alto_origen=$ancho_limite;
		    $ancho_origen=$ancho_limite*imagesx( $img_origen )/imagesy( $img_origen );
		}
		$img_destino = imagecreatetruecolor($ancho_origen ,$alto_origen );// se crea la imagen segun las dimensiones dadas
		// copy/resize as usual
		imagecopyresized( $img_destino, $img_origen, 0, 0, 0, 0, $ancho_origen, $alto_origen, imagesx( $img_origen ), imagesy( $img_origen ) );
		imagejpeg( $img_destino, "img/".$id.".png"); //se guarda la nueva foto 
		//imagedestroy( $img_origen );
		//imagedestroy( $img_destino );
		echo "se ha modificado ".base_url()."img/slider/new/".$id.".jpg";
		//header ('Location:index.php');		

	}	
}