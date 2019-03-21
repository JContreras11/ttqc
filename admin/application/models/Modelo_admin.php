<?php /**
 *
 */
class Modelo_admin extends CI_Model
{

  public function get($ide,$table,$id,$join,$t_join)
  {
    if ($id != null) {
      $this->db->where($ide,$id);
    }

     $this->db->where($table.'.is_active',1);
     $this->db->select('*');
     $this->db->from($table);

     if ($join != null) {
       for ($i=0; $i < count($join); $i++) {
         $this->db->join($t_join[$i],$join[$i]);
       }
     }

    $res = $this->db->get();

    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function get_url($ide,$table,$id,$url)
  {
     $this->db->where($table.'.is_active',1);
     $this->db->where($table.'.'.$ide,$id);
     $this->db->select($url);
     $this->db->from($table);
    $res = $this->db->get();

    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }


  public function ins($datos, $table)
  {
    if ($this->db->insert($table,$datos)) {
      return  true;
    } else {
      return  false;
    }

  }

  public function get_cat()
  {
           $this->db->where('is_active',1);
    $res = $this->db->get('categorias');
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }
  public function get_cat_gast()
  {           
    $res = $this->db->get('categoria_gast');
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function edi($ide,$id, $table,$datos)
  {
        $this->db->where($ide,$id);
    if ($this->db->update($table,$datos)) {
      return  true;
    } else {
      return  false;
    }
  }
  public function del($ide,$id, $table)
  {
        $this->db->where($ide,$id);
    if ($this->db->update($table,array('is_active' => 0))) {
      return  true;
    } else {
      return  false;
    }
  }


}
 ?>
