<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Home extends CI_Controller
{
    
    public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
        $this->load->library('email');
        $this->data['title']="Bienvenido a Foodland";
    	
    }
    
    public function index()
    {   
        
        $this->fb();
    	$subsector=$this->input->get('subsector');
        $tipo_producto = $this->input->get('tipo_producto');
		$productos_random=[];
        if(is_numeric($subsector) || $subsector==""){
			$this->load ->model('home_model','uum');
			 $session ='1';
            $gustos=0;
            $productos_gusto=[];
            if($session =='1')
            {
                $gusto_usuario= $this->uum->get_gusto_usuario($session);
                $productos_generales_gusto=[];

                foreach ($gusto_usuario as $gusto) {

                    $gustos=$gusto->id_tipo_producto;
                    
                    $productos_gusto= $this->uum->get_producto_random_categoria_gusto($gustos,$subsector);
                    $productos_generales_gusto=$productos_generales_gusto+$productos_gusto;
                }
                
            }
           $productos_random= $this->uum->get_producto_random($subsector,$gustos);

            if($tipo_producto != '' or $tipo_producto!=0){
                $productos_random= $this->uum->get_producto_random_categoria_home($tipo_producto,$gustos);
                $this->data['productos_random']=$productos_random;
            }
            else if($tipo_producto != '' and $subsector != ''){
                $productos_random= $this->uum->get_producto_random_categoria_sector($tipo_producto,$subsector,$gustos);
                $this->data['productos_random']=$productos_random;
             }
            else
            {
                $this->data['productos_random']=$productos_gusto+$productos_random;
             }

            $sector_entregas = $this->uum->get_sector_entrega();
            $sub_sector_entregas = $this->uum->get_sub_sector_entrega();
            $buscar=$this->uum->get_producto_buscador();
		//	echo "<pre>".print_r($productos,true)."</pre>";
			$categoria = $this->uum->get_categoria();
			
            $this->data['categoria']=$categoria;
	
			$this->data['sector_entregas']=$sector_entregas;
            $this->data['sub_sector_entregas']=$sub_sector_entregas;
			$this->data['subsector']=$subsector;
            $this->data['buscar']=$buscar;
			$this->load->view('templades/header',$this->data);
            $this->load->view('pages/home_view',$this->data);
			$this->load->view('templades/footer',$this->data);
		}else{
			echo "Error en la consulta SQL o esta intentando modificar el metodo get <br>";
		
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
            /* 
            $mensaje='posh posh.';
            $this->facebook->api('/me/feed', 'post', array('message' => $mensaje));

            */
            
             redirect(site_url());
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
        $subsector=$this->input->get('subsector');

        $this->load ->model('home_model','uum');
            $productos= $this->uum->get_producto($subsector);
            $tipo_productos = $this->uum->get_categoria();
            
            $this->data['tipo_productos']=$tipo_productos;
            $this->data['productos']=$productos;
        if($sector!=""){    
            $this->data['subsector']=$subsector;
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
                'picture'=> 'http://foodland.cl/foodland/img/locales/'.$this->input->post('id').'.jpeg',
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

}
	