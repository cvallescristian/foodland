<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_local extends CI_Controller {

	

	public function index()
	{

		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$this->load->model('home_model','uum2');
			$locales= $this->uum->get_local();
			$sectores=$this->uum2->get_sector_entrega();
			$añadir_producto=$this->input->get('al');
			if($añadir_producto==1){
				echo "<script>alert('Local agregado satisfactoriamente')</script>";
			}
			$data['locales']=$locales;
			$data['sectores']=$sectores;
	
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_local_view',$data);
		}
		
	}
	public function nuevo_local(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('home_model','uum');
			$sector_reparto= $this->uum->get_sector_entrega();

			$data['sector_repartos']=$sector_reparto;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_nuevo_local_view',$data);
		}
	}
	public function nuevo_local_agregar(){
		
		$checkbox = $this->input->post('check'); //datos del checkbox
		if($checkbox==""){
			echo "<script>alert('Debes seleccionar al menos un sector')</script>";
			$root= base_url()."admin_local/nuevo_local";
			echo "<script>location.href='$root';</script>";	
		}else{
			$sitio = $this->input->post('inputSitioWeb');
			$data = array( //datos del local
	           'nombre_local' => $this->input->post('inputNombre'),
	           'direccion_local' =>$this->input->post('inputDireccion'),
	           'telefono_local' =>$this->input->post('inputFono'),
	           'email' => $this->input->post('inputEmail'),
	           'sitio_referencia' => "http://".$sitio,
	           'horario_entrada' => $this->input->post('inputHorarioEntrada'),
	           'horario_salida' => $this->input->post('inputHorarioSalida'),
	           'horario_entrada_fds' => $this->input->post('inputHorarioEntradaFds'),
	           'horario_salida_fds' => $this->input->post('inputHorarioSalidaFds')
	    	);
	    	
	    	//datos de la foto
	    	$config['upload_path'] = base_url()."img/locales/";  
	    	$config['allowed_types'] = 'gif|jpg|png'; 
	    	$config['max_size'] = '100'; 
	    	
	    	
	    /*	  echo 'Nombre: ' . $_FILES['userfile']['name'] . '<br/>';
			  echo 'Tipo: ' . $_FILES['userfile']['type'] . '<br/>';
			  echo 'Tamaño: ' . ($_FILES['userfile']['size'] / 1024) . ' Kb<br/>';
			  echo 'Guardado en: ' . $_FILES['userfile']['tmp_name'];
		*/
			//guardamos la base de datos 
			$this->load->model('admin_model','uum');
			$id_local_nuevo= $this->uum->agregar_local($data);
	  		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/$id_local_nuevo"."_logo.png");
		 		$root= base_url()."admin_local?al=1";
  				echo "<script>location.href='$root';</script>";	

  			foreach ($checkbox as $s ) {
  				$this->uum->agregar_sector_local($s,$id_local_nuevo);
  			}
  	
		}
		
    }
    public function borrar_local(){
    	if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id=$this->input->get('id');
			$this->load->model('admin_model','uum');
			$this->uum->borrar_local($id);
			$root= base_url()."admin_local";
    		echo "<script>location.href='$root';</script>";
		}
    }
	public function nuevo_sector(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$data['sector']="";
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_nuevo_sector_view',$data);
		}
	}
	public function nuevo_sector_agregar(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$data = array( 
	           'nombre_sector_entrega' => $this->input->post('inputNombre'),
	        );
			$this->load->model('admin_model','uum');
			$this->uum->agregar_sector($data);

			$root= base_url()."admin_local";
    		echo "<script>location.href='$root';</script>";
		}
	}
	 public function borrar_sector()
	{
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id= $this->input->get('id');
			$this->load->model('admin_model','uum');
			$this->uum->borrar_sector($id);

			$root= base_url()."admin_local";
    		echo "<script>location.href='$root';</script>";
		}
	}
	public function editar_sector(){

		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id= $this->input->get('id');
			$this->load->model('admin_model','uum');
			$sectores= $this->uum->get_sector_entrega_particular($id);
			$data['sector']=$sectores;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_nuevo_sector_view',$data);
		}
	}
    public function editar_local()
    {
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id= $this->input->get('id');
			$this->load->model('admin_model','uum');
			$locales= $this->uum->get_local();
			$sector_reparto= $this->uum->get_sector_entrega();
			$sector_entrega= $this->uum->get_sector_entrega_edicion($id);
		
			$data['locales']=$locales;
			$data['sector_repartos']=$sector_reparto;
			$data['sector_entrega']=$sector_entrega;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_editar_local_view',$data);
		}
    }

    public function editar_local_agregar(){
		$checkbox = $this->input->post('check'); //datos del checkbox

		if($checkbox==""){
			echo "<script>alert('Debes seleccionar al menos un sector')</script>";
			$id = $_GET['id'];
			$root= base_url()."admin_local/editar_local?id=$id";
			echo "<script>location.href='$root';</script>";	
		}else{
			$sitio = $this->input->post('inputSitioWeb');
			$data = array( //datos del local
	           'nombre_local' => $this->input->post('inputNombre'),
	           'direccion_local' =>$this->input->post('inputDireccion'),
	           'telefono_local' =>$this->input->post('inputFono'),
	           'email' => $this->input->post('inputEmail'),
	       	   'sitio_referencia' => "http://".$sitio,
	           'horario_entrada' => $this->input->post('inputHorarioEntrada'),
	           'horario_salida' => $this->input->post('inputHorarioSalida'),
	           'horario_entrada_fds' => $this->input->post('inputHorarioEntradaFds'),
	           'horario_salida_fds' => $this->input->post('inputHorarioSalidaFds')
	    	);
	    	//datos de la foto
	    	$config['upload_path'] = base_url()."img/locales/";  
	    	$config['allowed_types'] = 'gif|jpg|png'; 
	    	$config['max_size'] = '100'; 
	    	
	    	
	    /*	  echo 'Nombre: ' . $_FILES['userfile']['name'] . '<br/>';
			  echo 'Tipo: ' . $_FILES['userfile']['type'] . '<br/>';
			  echo 'Tamaño: ' . ($_FILES['userfile']['size'] / 1024) . ' Kb<br/>';
			  echo 'Guardado en: ' . $_FILES['userfile']['tmp_name'];
		*/
			//guardamos la base de datos
			$this->load->model('admin_model','uum');
			$id_local_nuevo= $this->uum->editar_local($data,$_GET['id']);
			$root= base_url()."admin_local";
			echo "<script>location.href='$root';</script>";	 
			$id_local_editar = $_GET['id'];
	  	move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/$id_local_editar _logo.png");
		 	//	$root= base_url()."admin_local?al=1";
  			//	echo "<script>location.href='$root';</script>";	
			$this->uum->eliminar_sector_local($_GET['id']);
  			foreach ($checkbox as $s ) {
  				$this->uum->agregar_sector_local($s,$_GET['id']);
  			}
		}
    }
}

