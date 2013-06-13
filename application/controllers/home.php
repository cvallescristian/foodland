<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{
		$this->load ->model('home_model','uum');
		$productos= $this->uum->get_producto($sector);
		$tipo_productos = $this->uum->get_categoria();
		$sector_entregas = $this->uum->get_sector_entrega();
	//	echo "<pre>".print_r($productos,true)."</pre>";
		



		$data['productos']=$productos;
		$data['tipo_productos']=$tipo_productos;
		$data['sector_entregas']=$sector_entregas;
		$data['sector']=$sector;
		$this->load->view('templades/header',$data);
		$this->load->view('pages/home_view',$data);
		$this->load->view('templades/footer',$data);
	}
}

