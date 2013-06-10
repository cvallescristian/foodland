<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{
	
		$this->load ->model('home_model','uum');
		$productos= $this->uum->get_producto();
	//	echo "<pre>".print_r($productos,true)."</pre>";
		
		$data['productos']=$productos;
		$this->load->view('templades/header',$data);
		$this->load->view('pages/home_view',$data);
		$this->load->view('templades/footer',$data);
	}
}

