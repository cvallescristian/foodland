<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_detalle_local extends CI_Controller {

	

	public function index()
	{
		$id=$this->input->get('id');
		if($this->session->userdata('id')=="" || $id==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{

			$this->load->model('admin_model','uum');
			
			$local= $this->uum->get_local_particular($id);
			$sectores= $this->uum->get_sector_reparto_particular($id);
			$respuesta=$this->input->get('inf');
			$title="";
			if($respuesta==1){
				$title="Local editado satisfactoriamente";
			}
			$visitas_totales= $this->uum->get_visitas_totales($id);
			$data['id']=$id;
			$data['title']=$title;
			$data['local']=$local;
			$data['sectores']=$sectores;
			$data['visitas_totales']=$visitas_totales;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('templades/header_detalle_local',$data);
			$this->load->view('pages/admin_detalle_local_view',$data);
		}
		
	}
	public function detalle_producto(){
		$id=$this->input->get('id');
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$producto = $this->uum->get_producto_id($id);
			$locales = $this->uum->get_local();
			$tipo_producto= $this->uum->get_tipo_producto();
			
			$data['producto'] = $producto;
			$data['locales'] = $locales; 
			$data['tipo_producto']=$tipo_producto;
			
			$this->load->view('templades/header_admin',$data);
			$this->load->view('templades/header_detalle_local',$data);
			$this->load->view('pages/admin_detalle_producto_local_view',$data);
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
			$root= base_url()."admin_local?al=3&id".$id;
    		redirect($root);
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
			$sector_padre=$this->uum->get_sector_entrega();
			$sector_reparto= $this->uum->get_sub_sector_entrega();
			$sector_entrega= $this->uum->get_sector_entrega_edicion($id);
		
			$data['locales']=$locales;
			$data['sector_padre']=$sector_padre;
			$data['sector_repartos']=$sector_reparto;
			$data['sector_entrega']=$sector_entrega;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_editar_local_view',$data);
		}
    }

    public function editar_local_agregar(){
		$checkbox = $this->input->post('check'); //datos del checkbox
		$id=$this->input->get('id');

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
	           'horario_salida_fds' => $this->input->post('inputHorarioSalidaFds'),
	           'descrip_adicional' => $this->input->post('inputCondicionesAdicionales')
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
			$id_local_nuevo= $this->uum->editar_local($data,$id);
			$root= base_url()."admin_detalle_local?inf=1&id=".$id;
			
			$id_local_editar = $_GET['id'];
	  		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/$id_local_editar"."_logo.png");
		 	//	$root= base_url()."admin_local?al=1";
  			//	echo "<script>location.href='$root';</script>";	
			$this->uum->eliminar_sector_local($id);
  			foreach ($checkbox as $s ) {
  				$this->uum->agregar_sector_local($s,$id);
  			}
  			redirect($root);
		}
    }
}