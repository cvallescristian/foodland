<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Home extends CI_Controller
{
    
    public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    	
    }
    
    public function index()
    {   
        
        $this->fb();
    	$sector=$this->input->get('sector');
		if(is_numeric($sector) || $sector==""){
			$this->load ->model('home_model','uum');
			$productos= $this->uum->get_producto($sector);
			$productos_random= $this->uum->get_producto_random($sector);
			$tipo_productos = $this->uum->get_categoria();
			$sector_entregas = $this->uum->get_sector_entrega();
		//	echo "<pre>".print_r($productos,true)."</pre>";
			
			$this->data['productos']=$productos;
			$this->data['productos_random']=$productos_random;
			$this->data['tipo_productos']=$tipo_productos;
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
    
	$loginParams = array('scope' => 'email','redirect_uri' => base_url().'fb/fb_auth');
	$this->data['login_url'] = $this->facebook->getLoginUrl($loginParams);
	$logoutParams = array( 'next' => site_url().'/fb/logout');
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
}
	