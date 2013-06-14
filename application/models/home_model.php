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
        return $result->result();      
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
    function get_sector_entrega_particular($id){

        
    }
    
    function get_usuario(){
		// Consulta SQL
        $this -> db -> select('*');
        $this -> db -> from('usuario');
        //$this -> db -> where("nom_univ LIKE '%".$term."%'");
        $query = $this -> db -> get();
        
        // Si hay resultados
        if($query -> num_rows() > 0)
        {
            return $query;
        }
        else
        {
            return false;
        }
	}
   
}

 ?>