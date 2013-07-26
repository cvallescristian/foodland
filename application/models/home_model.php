<?php 
class home_model extends CI_Model{

  

    function get_producto($sector_entrega){ //exclusivamente para el index

        $query = "select * from Producto,Local_sector_entrega";
        if($sector_entrega!=""){

            $query.=" where Local_sector_entrega.id_sector_entrega=$sector_entrega and Producto.id_local=Local_sector_entrega.id_local";
        }else{
            $query.=" where Producto.id_local=Local_sector_entrega.id_local";
        }
        $result = $this->db->query($query);
        $arreglo=$result->result();
        $cont=0;
        foreach ($arreglo as $a) {
            if($cont==0){ //primer elemento
                $arre[$cont]=$a;
                $cont++;

            }else{
                $band=0;
                foreach ($arre as $b ) {
                    
                    if($a->id_producto==$b->id_producto){
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
    function ordenar($arreglo){
        
              
    }
    function get_producto_particular($id){
        $query="select * from Producto where id_producto='$id' ";
        $result= $this->db->query($query);
        $re= $result->result();
        foreach ($re as $r) {
            return $r;
            break;
        }
    }
    function get_producto_random($sector_entrega){ //exclusivamente para el index
        $query = "select * from Producto,Local_sector_entrega";
        if($sector_entrega!=""){
            $query.=" where Local_sector_entrega.id_sector_entrega=$sector_entrega and Producto.id_local=Local_sector_entrega.id_local";
        }else{
            $query.=" where Producto.id_local=Local_sector_entrega.id_local";
        }
        $query.=" order by rand() limit 18";
        $result = $this->db->query($query);
        return $result->result();      
    }
    function get_producto_random_categoria($id){ //exclusivamente para el index
        $query = "select * from Producto";

            $query.=" where id_tipo_producto = '$id'";


        $query.=" order by rand() limit 3";
        $result = $this->db->query($query);
        return $result->result();      
    }

    function get_categoria(){
        $query="select * from Tipo_producto";
         $result = $this->db->query($query);
         return $result->result();    
    }

    function get_sector_entrega(){
        $query="select * from Sector_entrega";
         $result = $this->db->query($query);
         return $result->result();    
    }
    function get_sector_entrega_particular($id_producto){
        $query="select nombre_sector_entrega from Producto,Sector_entrega,Local_sector_entrega";
        $query.=" where Producto.id_producto='$id_producto' and Producto.id_local=Local_sector_entrega.id_local and  Sector_entrega.id_sector_entrega=Local_sector_entrega.id_sector_entrega";
        $result= $this->db->query($query);
         return $result->result(); 
    }
    function get_local_particular($id_producto){
        $query="select * from Local,Producto where Producto.id_producto='$id_producto'and Local.id_local=Producto.id_local";
        $result= $this->db->query($query);
        $re = $result->result(); 
        foreach ($re as $r) {
            return $r;

        }

    }
    function get_locales(){
        $query="select * from Local";
        $result= $this->db->query($query);
        return $result->result();
    }
    function agregar_contador($id_producto){
        //primero sacamos el valor de la cantidad de visitas y se la pasamos a la variable cant
        $query="select cant_visitas from Producto where id_producto='$id_producto'";
        $result= $this->db->query($query);
        $re = $result->result(); 
        $cant; //variable con la cantidad de visistas actual
        foreach ($re as $r) {
            $cant=$r->cant_visitas;
        }
        $cant=$cant+1; //le aumentamos 1 al contador de visitas

        //luego lo guardamos a la base de datos la cantidad final de visitas
        $query="update Producto set cant_visitas='$cant' where id_producto='$id_producto'";
        $this->db->query($query);
    }
    function get_tipo_producto_particular($id){ //esto es solamente para los productos para saber su tipo de producto

        $query="select id_tipo_producto from Producto where id_producto='$id'";
        $result = $this->db->query($query);
         $re=$result->result();
         foreach ($re as $r) {
            return $r->id_tipo_producto;
            break;
         }
    }
    function get_tipo_producto_detalle_producto($id){ //esto es solamente para los productos para saber su tipo de producto


        $query="select * from Tipo_producto where id_tipo_producto='$id'";
        $result = $this->db->query($query);
         $re=$result->result();
         foreach ($re as $r) {
            return $r;
            break;
         }
    }
    function get_producto_buscador(){ //busca cada producto y le agrega su categoria
        $query="select * from Tipo_producto";
        $result= $this->db->query($query);
        $re= $result->result();
        foreach ($re as $r ) {
            $query2="select * from Producto where id_tipo_producto=".$r->id_tipo_producto;
            $result= $this->db->query($query2);
            $re2= $result->result();
            foreach ($re2 as $r2 ) {
                $buscar[]=$r2->id_producto."/".$r->nombre_tipo_producto."/".$r2->titulo_producto;
            }
        }
        return $buscar;
    }   
}

 ?>