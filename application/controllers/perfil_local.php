<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_local extends CI_Controller {

	public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
	}

	public function index()	{

			$id= $this->input->get('id');
			if(is_numeric($id)){

				$this->fb();
				$this->load ->model('home_model','uum');
				$this->load ->model('locales_model','uum2');
				$sector_entregas = $this->uum->get_sector_entrega();
				$buscar=$this->uum->get_producto_buscador();
				$local= $this->uum2->get_local_particular($id);
				$productos_local= $this->uum2->get_productos_local($id);

				$this->data['sector_entregas']=$sector_entregas;
				$this->data['buscar']=$buscar;
				$this->data['local']=$local;
				$this->data['productos_local']=$productos_local;

				$this->load->view('templades/header',$this->data);
				$this->load->view('pages/perfil-local_view',$this->data);
				$this->load->view('templades/footer',$this->data);
			}else{
				redirect(base_url());
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
}