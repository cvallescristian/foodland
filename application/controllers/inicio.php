<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Inicio extends CI_Controller
{
    
    public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
        $this->load->library('email');
        $this->data['title']="Bienvenido a FFoodland";
    	
    }
    
    public function index()
    {   
        
            $this->fb();
            $this->load ->model('home_model','uum');
            $sector_entregas = $this->uum->get_sector_entrega();
            $sub_sector_entregas = $this->uum->get_sub_sector_entrega();	
            $locales = $this->uum->get_locales();
            $this->data['sector_entregas']=$sector_entregas;
            $this->data['sub_sector_entregas']=$sub_sector_entregas;
            $this->data['locales']=$locales;
            $this->load->view('pages/index_view',$this->data);


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

   
    
	$loginParams = array('scope' => 'email','scope' => 'publish_stream','redirect_uri' => base_url().'/fb_auth');
	$this->data['login_url'] = $this->facebook->getLoginUrl($loginParams);
	$logoutParams = array( 'next' => site_url().'/logout');
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
            $this->load ->model('home_model','uum');
            $user_profile = $this->facebook->api('/me');
            $user_friend=$this->facebook->api('/me/friends');
            $existe_usuario= $this->uum->get_usuario($user_profile['id']);
            if($existe_usuario == NULL)
            {
                $data= array(
                    'id_facebook' => $user_profile['id'],
                    'nombre_usuario' => $user_profile['first_name']
                    );
                $this->uum->agregar_usuario($data);
            }
            $usuario1= $this->uum->get_usuario($user_profile['id']);
            
            foreach ($user_friend as $friend) {
                foreach ($friend as $user) {
                    
                    
                    $amigo= $this->uum->get_usuario($user['id']);

                    if($amigo != NULL)
                    {
                        
                        $dataamigo = array(
                            'id_usuario_1' => $usuario1,
                            'id_usuario_2' => $amigo
                            );
                        $this->uum->agregar_amigo($dataamigo,$usuario1,$amigo);
                    }
                }
            }
            $data = array(
                                'login_state'=> 1,
                                'user_profile' => $user_profile
                                );
            $this->session->set_userdata($data);




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
        $this->session->unset_userdata('login_state');
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
	