<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    }

	public function index()
	{
		$id=$this->input->get('id');
		if(is_numeric($id)){
			$this->fb();
			$this->load ->model('home_model','uum');
			$productos = $this->uum->get_producto_particular($id);
			$sector_entregas= $this->uum->get_sector_entrega();
			$sector_entregas_particular= $this->uum->get_sector_entrega_particular($id);
			$detalle_local=$this->uum->get_local_particular($id);
			$tipo_producto=$this->uum->get_tipo_producto_particular($id);
			$this->uum->agregar_contador($id);
			$this->data['productos']= $productos;
			$this->data['sector_entregas_particular']=$sector_entregas_particular;
			$this->data['sector_entregas']=$sector_entregas;
			$this->data['detalle_locales']=$detalle_local;
			$this->data['id_tipo_producto']=$tipo_producto;
			//var_dump($this->session->all_userdata());
			$this->load->view('templades/header_producto',$this->data);
			$this->load->view('pages/producto_view',$this->data);
			$this->load->view('templades/footer_producto',$this->data);
			
		}else{
			echo "Error en la consulta SQL <br>";
		
			echo "<a href='".base_url()."'>Volver el home</a>";
		}
	}

    private function fb()
    {
	$config = array
        (
            'appId'  => '653293238018732',
            'secret' => '42c5fe5758df035ac317ea8e8841a780'
    	);
	$this->load->library('facebook', $config);
	$user = $this->facebook->getUser();
   
    
	$loginParams = array('scope' => 'email','scope' => 'publish_stream','redirect_uri' => base_url().'home/fb_auth');
	$this->data['login_url'] = $this->facebook->getLoginUrl($loginParams);
	$logoutParams = array( 'next' => site_url().'/home/logout');
	$this->data['logout_url'] = $this->facebook->getLogoutUrl($logoutParams);
	}
	
    public function fb_auth()
    {
	$config = array
        (
            'appId'  => '653293238018732',
            'secret' => '42c5fe5758df035ac317ea8e8841a780'
        );
	$this->load->library('facebook', $config);
	$user = $this->facebook->getUser();
	if($user)
        {
            try 
            {
            $user_profile = $this->facebook->api('/me');
            $this->session->set_userdata('user_profile', $user_profile);
            //si quieres publicar en el muro del tipo

             redirect(site_url());
            }
            catch (FacebookApiException $e)
            {
            
                $user = null;
            }
        }
    }
    public function publicar_muro(){
            $config = array
        (
            'appId'  => '653293238018732',
            'secret' => '42c5fe5758df035ac317ea8e8841a780'
        );
    $this->load->library('facebook', $config);
    $user = $this->facebook->getUser();
    if($user)
        {
            try 
            {
            $user_profile = $this->facebook->api('/me');
            $this->session->set_userdata('user_profile', $user_profile);
            //si quieres publicar en el muro del tipo
            $param = array(
                'message' => 'Acabo de pedir '.$this->input->post('nombre').' de #'.$this->input->post('nombre_local').' por #Foodland ﻿',
                'link' => 'http://foodland.cl/foodland/producto?id='.$this->input->post('id'),
                'picture'=> 'http://foodland.cl/foodland/img/locales/'.$this->input->post('id').'.png',
                'name'=>$this->input->post('nombre'),
                'caption'=>'Este es un producto de nuestro local '.$this->input->post('nombre_local'),
                'description'=>$this->input->post('descripcion')
            );

            
            $p=$this->facebook->api('/me/feed', 'post', $param);
            redirect(site_url()."producto?id=".$this->input->post('id'));
            

             }
            catch (FacebookApiException $e)
            {
                $user = null;
            }
        }
    }

    
    public function logout(){
        $this->session->unset_userdata('user_profile');
        redirect(site_url());
    }
    public function categoria(){
        $sector=$this->input->get('sector');

        $this->load ->model('home_model','uum');
            $productos= $this->uum->get_producto($sector);
            $tipo_productos = $this->uum->get_categoria();
            
            $this->data['tipo_productos']=$tipo_productos;
            $this->data['productos']=$productos;
        if($sector!=""){    
            $this->data['sector']=$sector;
        }

            $this->load->view('ajax/_categoria',$this->data);
    }
    public function contacto(){
         
        $nombre= $this->input->post('nombre');
        $email= $this->input->post('email');
        $mensaje= $this->input->post('mensaje');
        
        $this->load->library('email');
        $this->email->from($email,$nombre);
        $this->email->to('contacto@foodland.cl');
        $this->email->cc('cristian@foodland.cl');
        $this->email->subject('te llego un mensaje desde el contacto del sitio');
        $this->email->message($mensaje);
        $this->email->send();

        redirect(base_url(), 'refresh');
     }
	
}


