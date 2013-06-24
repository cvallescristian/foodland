<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{
		$sector=$this->input->get('sector');
		if(is_numeric($sector) || $sector==""){
			$this->load ->model('home_model','uum');
			$productos= $this->uum->get_producto($sector);
			$productos_random= $this->uum->get_producto_random($sector);
			$tipo_productos = $this->uum->get_categoria();
			$sector_entregas = $this->uum->get_sector_entrega();
		//	echo "<pre>".print_r($productos,true)."</pre>";
			
			$data['productos']=$productos;
			$data['productos_random']=$productos_random;
			$data['tipo_productos']=$tipo_productos;
			$data['sector_entregas']=$sector_entregas;
			$data['sector']=$sector;
			$this->load->view('templades/header',$data);
			$this->load->view('pages/home_view',$data);
			$this->load->view('templades/footer',$data);
		}else{
			echo "Error en la consulta SQL o esta intentando modificar el metodo get <br>";
		
			echo "<a href='".base_url()."'>Volver el home</a>";
		}
	}
}

