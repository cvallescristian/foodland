<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_producto extends CI_Controller {

	public function index()	{

			$info=$this->input->get('info');
			$data['info']="";
			if($info==1){
				$data['info']="Producto Agregado Exitosamente";
			}else if($info==2){
				$data['info']=" Tipo de producto Agregado Exitosamente";
			}
			$this->load->model('admin_model','uum');

			$producto = $this->uum->get_producto();
			$locales = $this->uum->get_local();
			$tipo_producto= $this->uum->get_tipo_producto();
			$data['producto'] = $producto;
			$data['locales'] = $locales; 
			$data['tipo_producto']=$tipo_producto;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin/admin_producto_view',$data);
		
	}
	public function nuevo_producto(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$locales = $this->uum->get_local();
			$producto = $this->uum->get_tipo_producto();

			$data['locales'] = $locales; 
			$data['producto'] = $producto;		
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin/admin_nuevo_producto_view',$data);
		}
		
	}
	public function nuevo_producto_agregar(){
		
		$data = array(
           'titulo_producto' => $this->input->post('inputTitulo'),
           'precio' =>$this->input->post('inputPrecio'),
           'descrip_producto' =>$this->input->post('inputDescripcion'),
           'id_local' => $this->input->post('inputLocal'),
           'id_tipo_producto' => $this->input->post('inputProducto'),
           'promocion_producto' => $this->input->post('inputPromocion')
    	);

    	$config['upload_path'] = base_url()."img/locales/";  
    	$config['allowed_types'] = 'gif|jpg|png'; 
    	$config['max_size'] = '100'; 

		$this->load->model('admin_model','uum');
		$id_producto_nuevo= $this->uum->agregar_producto($data);
		$extension = explode("/",$_FILES['userfile']['type']);
		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/".$id_producto_nuevo.".".$extension[1]);

		//inicio reduccion de la foto
		$id=$id_producto_nuevo;
		echo $extension[1];
		if($extension[1]=="jpeg" || $extension[1]=="jpg"){
    		$img_origen = imagecreatefromjpeg( base_url().'img/locales/'.$id.'.'.$extension['1'] );
    	}else if($extension[1]=="png"){
			$img_origen = imagecreatefrompng( base_url().'img/locales/'.$id.'.'.$extension['1'] );
    	}
		$ancho_origen = imagesx( $img_origen );//se ontiene el ancho de la imagen
		$alto_origen = imagesy( $img_origen );//se obtiene el alto de la imagen
		$ancho_limite=720;
		if($ancho_origen>$alto_origen){// para foto horizontal
		    
		    $ancho_origen=$ancho_limite;
		    $alto_origen=$ancho_limite*imagesy( $img_origen )/imagesx( $img_origen );
		    
		}else{//para fotos verticales
		    $alto_origen=$ancho_limite;
		    $ancho_origen=$ancho_limite*imagesx( $img_origen )/imagesy( $img_origen );
		}
		$img_destino = imagecreatetruecolor($ancho_origen ,$alto_origen );// se crea la imagen segun las dimensiones dadas
		// copy/resize as usual
		imagecopyresized( $img_destino, $img_origen, 0, 0, 0, 0, $ancho_origen, $alto_origen, imagesx( $img_origen ), imagesy( $img_origen ) );
		imagejpeg( $img_destino, "img/locales/".$id.".jpeg"); //se guarda la nueva foto 
		//termino reduccion de la foto
		 $root= base_url()."admin_producto?info=1";
  		echo "<script>location.href='$root';</script>";
    }
	public function editar_producto(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$locales = $this->uum->get_local();
			$productos = $this->uum->get_producto();
			$producto = $this->uum->get_tipo_producto();

			$data['locales'] = $locales;
			$data['productos'] = $productos; 
			$data['producto'] = $producto;		
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_editar_producto_view',$data);
		}
		
	}
	public function editar_producto_agregar(){
		
		$data = array(
           'titulo_producto' => $this->input->post('inputTitulo'),
           'precio' =>$this->input->post('inputPrecio'),
           'descrip_producto' =>$this->input->post('inputDescripcion'),
           'id_local' => $this->input->post('inputLocal'),
           'id_tipo_producto' => $this->input->post('inputProducto'),
           'promocion_producto' => $this->input->post('inputPromocion')
    	);

    	$config['upload_path'] = base_url()."img/locales/";  
    	$config['allowed_types'] = 'gif|jpg|png'; 
    	$config['max_size'] = '100'; 

		$this->load->model('admin_model','uum');
		$this->uum->editar_producto($data,$_GET['id']);
		$id_producto_nuevo= $_GET['id'];
		echo $id_producto_nuevo;
		$extension = explode("/",$_FILES['userfile']['type']);
		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/".$id_producto_nuevo.".".$extension[1]);

		//inicio reduccion de la foto
		$id=$id_producto_nuevo;
		echo $extension[1];
		if($extension[1]=="jpeg" || $extension[1]=="jpg"){
    		$img_origen = imagecreatefromjpeg( base_url().'img/locales/'.$id.'.'.$extension['1'] );
    	}else if($extension[1]=="png"){
			$img_origen = imagecreatefrompng( base_url().'img/locales/'.$id.'.'.$extension['1'] );
    	}
		$ancho_origen = imagesx( $img_origen );//se ontiene el ancho de la imagen
		$alto_origen = imagesy( $img_origen );//se obtiene el alto de la imagen
		$ancho_limite=720;
		if($ancho_origen>$alto_origen){// para foto horizontal
		    
		    $ancho_origen=$ancho_limite;
		    $alto_origen=$ancho_limite*imagesy( $img_origen )/imagesx( $img_origen );
		    
		}else{//para fotos verticales
		    $alto_origen=$ancho_limite;
		    $ancho_origen=$ancho_limite*imagesx( $img_origen )/imagesy( $img_origen );
		}
		$img_destino = imagecreatetruecolor($ancho_origen ,$alto_origen );// se crea la imagen segun las dimensiones dadas
		// copy/resize as usual
		imagecopyresized( $img_destino, $img_origen, 0, 0, 0, 0, $ancho_origen, $alto_origen, imagesx( $img_origen ), imagesy( $img_origen ) );
		imagejpeg( $img_destino, "img/locales/".$id.".jpeg"); //se guarda la nueva foto 
		//termino reduccion de la foto
		 $root= base_url()."admin_producto?info=1";
  		echo "<script>location.href='$root';</script>";
		
    }
    public function borrar_producto(){
    	$id = $this->input->get('id');
    	$this->load->model('admin_model','uum');
    	$this->uum->borrar_producto($id);
    	$root= base_url()."admin_producto";
    	echo "<script>location.href='$root';</script>";
    }

    public function nuevo_tipo_producto(){
    	if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
				$data="";
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_nuevo_tipo_producto_view',$data);
		}
    }
    public function nuevo_tipo_producto_agregar(){

    	if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$data = array( //datos del tipo de producto
	           'nombre_tipo_producto' => $this->input->post('inputNombre'),
	       );

	    	//datos de la foto
	    	$config['upload_path'] = base_url()."img/tipo_producto/";  
	    	$config['allowed_types'] = 'gif|jpg|png'; 
	    	$config['max_size'] = '100'; 

	    	$this->load->model('admin_model','uum');
			$id_producto_nuevo= $this->uum->agregar_tipo_producto($data);
	  		$extension = explode("/",$_FILES['userfile']['type']);
		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/tipo_producto/".$id_producto_nuevo.".".$extension[1]);

		//inicio reduccion de la foto
		$id=$id_producto_nuevo;
		echo $extension[1];
		if($extension[1]=="jpeg" || $extension[1]=="jpg"){
    		$img_origen = imagecreatefromjpeg( base_url().'img/tipo_producto/'.$id.'.'.$extension['1'] );
    	}else if($extension[1]=="png"){
			$img_origen = imagecreatefrompng( base_url().'img/tipo_producto/'.$id.'.'.$extension['1'] );
    	}
		$ancho_origen = imagesx( $img_origen );//se ontiene el ancho de la imagen
		$alto_origen = imagesy( $img_origen );//se obtiene el alto de la imagen
		$ancho_limite=720;
		if($ancho_origen>$alto_origen){// para foto horizontal
		    
		    $ancho_origen=$ancho_limite;
		    $alto_origen=$ancho_limite*imagesy( $img_origen )/imagesx( $img_origen );
		    
		}else{//para fotos verticales
		    $alto_origen=$ancho_limite;
		    $ancho_origen=$ancho_limite*imagesx( $img_origen )/imagesy( $img_origen );
		}
		$img_destino = imagecreatetruecolor($ancho_origen ,$alto_origen );// se crea la imagen segun las dimensiones dadas
		// copy/resize as usual
		imagecopyresized( $img_destino, $img_origen, 0, 0, 0, 0, $ancho_origen, $alto_origen, imagesx( $img_origen ), imagesy( $img_origen ) );
		imagepng( $img_destino, "img/tipo_producto/".$id.".png"); //se guarda la nueva foto 
		//termino reduccion de la foto
		
	  		$root= base_url()."admin_producto?info=2";
  			echo "<script>location.href='$root';</script>";	
		}
    }
    public function borrar_tipo_producto(){
    	if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
    		$id = $this->input->get('id');
    		$this->load->model('admin_model','uum');
    		$this->uum->borrar_tipo_producto($id);
    		$root= base_url()."admin_producto";
    		//echo "<script>location.href='$root';</script>";
    	}
    }
    
}
	