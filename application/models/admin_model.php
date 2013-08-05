<?php 
class admin_model extends CI_Model{

  function comprobar_login($email,$pass){
    $pass2 = md5($pass);
    $query="select * from Members where email='$email' and pass='$pass2'";
  //  echo $query;
    $result = $this->db->query($query);
    $re= $result->result();
    $final_result=0;
    foreach ($re as $r ) {
        $final_result=$r->id_members;
        break;
    }
  
    return $final_result;    
  }
  function get_local(){
     $query="select * from Local order by nombre_local asc";
     $result = $this->db->query($query);
     return $result->result();   
  }
  function agregar_local($data){
   
     $this->db->insert('Local', $data);

     $query="select id_local from Local where nombre_local='$data[nombre_local]'";
     $result = $this->db->query($query);
     $res=$result->result();
     foreach ($res as $r) {
        return $r->id_local;   
     }
  }
  function get_local_particular($id){
    $query="select * from Local where id_local='$id'";
    $result=$this->db->query($query);
    $re= $result->result();
    foreach ($re as $r) {
      return $r;
      break;
    }
  }
  function get_sector_reparto_particular($id_local){
    $query="select * from Local_subsector_entrega,Subsector_entrega where Local_subsector_entrega.id_local='$id_local' and Local_subsector_entrega.id_subsector_entrega=Subsector_entrega.id_subsector_entrega";
    $result=$this->db->query($query);
    return $result->result();
  }
   function agregar_sector_local($id_sector,$id_local){
        $data = array( //datos del local
             'id_sector_entrega' => $id_sector,
             'id_local' => $id_local
        );
         $this->db->insert('Local_sector_entrega', $data);
    }
  function eliminar_sector_local($id){

            $this->db->where('id_local', $id);
            $this->db->delete('Local_sector_entrega');
  }
  function get_producto(){
     $query="select * from Producto order by id_local asc";
     $result = $this->db->query($query);
     return $result->result(); 
  }
   function get_producto_id($id){
     $query="select * from Producto";
     $query.=" where id_local='$id'";
     $query.=" order by id_local asc";
     $result = $this->db->query($query);
     return $result->result(); 
  }
 
  function get_tipo_producto(){
     $query="select * from Tipo_producto";
     $result = $this->db->query($query);
     return $result->result(); 
  }
  function agregar_tipo_producto($data){
    $this->db->insert('Tipo_producto',$data);
     $query="select id_tipo_producto from Tipo_producto where nombre_tipo_producto='$data[nombre_tipo_producto]'";
     $result = $this->db->query($query);
     $res=$result->result();
     foreach ($res as $r) {
        return $r->id_tipo_producto;   
     }
  }
  function borrar_tipo_producto($id){
    $this->db->where('id_tipo_producto',$id);
    $this->db->delete('Tipo_producto');
    $dir= base_url()."img/tipo_producto/$id.png";
    echo $dir;
    if(file_exists($dir)) 
    { 
      if(unlink($dir)){
          print "El archivo fue borrado"; 
       } 
    } 
    else{
      print "Este archivo no existe"; 
    }
  }
  function agregar_producto($data){

    $this->db->insert('Producto',$data);
     $query="select id_producto from Producto where titulo_producto='$data[titulo_producto]'";
     $result = $this->db->query($query);
     $res=$result->result();
     foreach ($res as $r) {
        return $r->id_producto;   
     }
    
  }  
  function borrar_producto($id)
  {
    $this->db->where('id_producto',$id);
    $this->db->delete('Producto');
    $dir= base_url()."img/locales/$id.png";
    echo $dir;
    if(file_exists($dir)) 
    { 
      if(unlink($dir)){
          print "El archivo fue borrado"; 
       } 
    } 
    else{
      print "Este archivo no existe"; 
    }
  }
  function borrar_local($id){
    //borramos los productos del local
    $query = "delete from Producto where id_local='$id' ";
    $this->db->query($query);
    //borramos sus sectores de reparto
    $query = "delete from Local_sector_entrega where id_local='$id'";
    $this->db->query($query);
    //borramos el local
    $query ="delete from Local where id_local='$id' ";
    $this->db->query($query);
    

  }
  function agregar_sector($data){
    $this->db->insert('Sector_entrega',$data);
  }
  function borrar_sector($id){
     $this->db->where('id_sector_entrega',$id);

     $this->db->delete('Sector_entrega');
  }
  function get_sector_entrega_particular($id){
    $query ="select * from Sector_entrega where id_sector_entrega='$id'";
    $result=$this->db->query($query);
    $re= $result->result();
    foreach ($re as $r) {
      return $r;
      break;
    }
  }
  function get_sector_entrega_edicion($id){
    $query ="select * from Local_sector_entrega where id_local='$id'";
    $result=$this->db->query($query);
    $re= $result->result();
    return $re;
  }
  function get_sector_entrega(){
        $query="select * from Sector_entrega";
         $result = $this->db->query($query);
         return $result->result();    
    }
  function get_miembros(){
     $query="select * from Members";
     $result = $this->db->query($query);
     return $result->result(); 
  }
  function agregar_miembro($data){
     $this->db->insert('Members',$data);
  }
  function borrar_miembro($id){
    $this->db->where('id_members',$id);

     $this->db->delete('Members');
  }
  function editar_local($data,$id){
            $this->db->where('id_local', $id);
             $this->db->update('Local', $data);

  }
    function editar_producto($data,$id){
            $this->db->where('id_producto', $id);
             $this->db->update('Producto', $data);

  }
}

 ?>