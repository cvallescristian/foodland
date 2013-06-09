<?php 
class home_model extends CI_Model{

  

    function get_producto(){
        $query = "select * from Producto";
        $result = $this->db->query($query);
        return $result->result();      

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