<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Home extends CI_Controller
{
    
    public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
         $this->load->library('email');

    	
    }
    
    public function index()
    {   
        
        $this->fb();
    	$sector=$this->input->get('sector');
		if(is_numeric($sector) || $sector==""){
			$this->load ->model('home_model','uum');
			$productos_random= $this->uum->get_producto_random($sector);
            $sector_entregas = $this->uum->get_sector_entrega();
		//	echo "<pre>".print_r($productos,true)."</pre>";
			
			
			$this->data['productos_random']=$productos_random;
			$this->data['sector_entregas']=$sector_entregas;
			$this->data['sector']=$sector;
			
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
	