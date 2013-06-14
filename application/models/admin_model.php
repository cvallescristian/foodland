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
     $query="select * from Local";
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
   function agregar_sector_local($id_sector,$id_local){
        $data = array( //datos del local
             'id_sector_entrega' => $id_sector,
             'id_local' => $id_local
        );
         $this->db->insert('Local_sector_entrega', $data);
    }
  function get_producto(){
     $query="select * from Producto";
     $result = $this->db->query($query);
     return $result->result(); 
  }
  function get_tipo_producto(){
     $query="select * from Tipo_Producto";
     $result = $this->db->query($query);
     return $result->result(); 
  }
  function agregar_producto($data){

    $this->db->insert('Producto',$data);
    
  }   
}

 ?>