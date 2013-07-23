<?php 
class locales_model extends CI_Model{

   function get_locales(){
  	$query="select * from Local";
  	$result=$this->db->query($query);
  	return $result->result();
  }
  function get_local_particular($id_local){
    $query="select * from Local where id_local='$id_local'";
    $result=$this->db->query($query);
    $re= $result->result();
    foreach ($re as $r) {
      return $r;
      break;
    }
  }
  function get_productos_local($id_local){
    $query="select * from Producto where id_local='$id_local'";
    $result=$this->db->query($query);
    return $result->result();
  }
  function get_locales_buscar_categoria($id){
  	$query="select * from Local,Producto where Producto.id_tipo_producto='$id' and Local.id_local=Producto.id_local";
  	$result=$this->db->query($query);
  	$arreglo=$result->result();
  	$arre="";
        $cont=0;
        foreach ($arreglo as $a) {
            if($cont==0){ //primer elemento
                $arre[$cont]=$a;
                $cont++;

            }else{
                $band=0;
                foreach ($arre as $b ) {
                    
                    if($a->id_local==$b->id_local){
                        $band=1;
                        continue;
                    }
                }
                if($band==0){
                    $arre[]=$a;
                }
            }
        }
        return $arre;      
  }
  function get_locales_buscar_ubicacion($id){
  	$query="select * from Local,Local_sector_entrega where Local_sector_entrega.id_sector_entrega='$id' and Local.id_local=Local_sector_entrega.id_local";
  	$result=$this->db->query($query);
  	$arreglo=$result->result();
        $cont=0;
        foreach ($arreglo as $a) {
            if($cont==0){ //primer elemento
                $arre[$cont]=$a;
                $cont++;

            }else{
                $band=0;
                foreach ($arre as $b ) {
                    
                    if($a->id_local==$b->id_local){
                        $band=1;
                        continue;
                    }
                }
                if($band==0){
                    $arre[]=$a;
                }
            }
        }
        return $arre;      
  }


  function get_locales_ramdom(){
  	$query="select * from Local";
  	$query.=" order by rand() limit 3";
  	$result=$this->db->query($query);
  	return $result->result();

  }
  function get_locales_ramdom_buscar_categoria($id){
  	$query="select * from Local,Producto where Producto.id_tipo_producto='$id' and Local.id_local=Producto.id_local";
  	$query.=" order by rand() limit 3";
  	$result=$this->db->query($query);
  	$arreglo=$result->result();
  	$arre="";
        $cont=0;
        foreach ($arreglo as $a) {
            if($cont==0){ //primer elemento
                $arre[$cont]=$a;
                $cont++;

            }else{
                $band=0;
                foreach ($arre as $b ) {
                    
                    if($a->id_local==$b->id_local){
                        $band=1;
                        continue;
                    }
                }
                if($band==0){
                    $arre[]=$a;
                }
            }
        }
        return $arre;   
  }
  function get_locales_ramdom_buscar_ubicacion($id){
  	$query="select * from Local,Local_sector_entrega where Local_sector_entrega.id_sector_entrega='$id' and Local.id_local=Local_sector_entrega.id_local";
  	$query.=" order by rand() limit 3";
  	$result=$this->db->query($query);
  	$arreglo=$result->result();
        $cont=0;
        foreach ($arreglo as $a) {
            if($cont==0){ //primer elemento
                $arre[$cont]=$a;
                $cont++;

            }else{
                $band=0;
                foreach ($arre as $b ) {
                    
                    if($a->id_local==$b->id_local){
                        $band=1;
                        continue;
                    }
                }
                if($band==0){
                    $arre[]=$a;
                }
            }
        }
        return $arre;      
  }
}
 ?>