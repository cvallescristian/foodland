<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nuestros_locales extends CI_Controller {

	 public function  __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
	}

	public function index()	{
			$this->fb();
			$this->load ->model('home_model','uum');
			$this->load ->model('locales_model','uum2');
			$sector_entregas = $this->uum->get_sector_entrega();
			$tipo_productos = $this->uum->get_categoria();
			$buscar=$this->uum->get_producto_buscador();
			$locales= $this->uum2->get_locales();
			$locales_ramdom= $this->uum2->get_locales_ramdom();
			$this->data['sector_entregas']=$sector_entregas;
			$this->data['tipo_productos']=$tipo_productos;
			$this->data['locales']=$locales;
			$this->data['locales_ramdom']=$locales_ramdom;
			$this->data['buscar']=$buscar;
			$this->data['titulo']="";
			$this->data['title']="Nuestros locales";

			$this->load->view('templades/header',$this->data);
			$this->load->view('pages/nuestros_locales_view',$this->data);
			$this->load->view('templades/footer',$this->data);
					
	}
	public function buscar(){
			$formato =$this->input->get('fomat'); //el formato es para ver si es categoria(1) o ubicacion(2) 
			$id= $this->input->get('id'); //el id de la categoria o ubicacion
			$nombre= $this->input->get('nombre'); //nombre de la busqueda
			if(is_numeric($id) && is_numeric($formato) && ($formato==1 || $formato==2)){

				$this->fb();
				$this->load ->model('home_model','uum');
				$this->load ->model('locales_model','uum2');
				$sector_entregas = $this->uum->get_sector_entrega();
				$tipo_productos = $this->uum->get_categoria();
				if($formato==1){
					$locales= $this->uum2->get_locales_buscar_categoria($id);
					$locales_ramdom= $this->uum2->get_locales_ramdom_buscar_categoria($id);
					
				}else{
					$locales= $this->uum2->get_locales_buscar_ubicacion($id);
					$locales_ramdom= $this->uum2->get_locales_ramdom_buscar_ubicacion($id);
				}
				$this->data['sector_entregas']=$sector_entregas;
				$this->data['tipo_productos']=$tipo_productos;
				$this->data['locales']=$locales;
				$this->data['locales_ramdom']=$locales_ramdom;
				$this->data['titulo']="Haz buscado por : $nombre";
				$this->data['title']="Locales de : $nombre";

			
				$this->load->view('templades/header',$this->data);
				$this->load->view('pages/nuestros_locales_view',$this->data);
				$this->load->view('templades/footer',$this->data);
			}else{
				echo "Error en la consulta SQL <br>";
				redirect(base_url()."nuestros_locales");
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