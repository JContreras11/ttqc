<?php /**
 *
 */
class Modelo_login extends CI_Model
{

    function login($username, $password)
     {
       $username=strtoupper($username);
       $this -> db -> select('ide_usu, nom_usu, ide_tip_usu, ema_usu,img_usu');
       $this -> db -> from('users');
       $this -> db -> where('ide_tip_usu',2);
       $this -> db -> where('nom_usu ='."'".$username."'");
       $this -> db -> where('pss_usu = '."'".$this->hash($password)."'");
       $this -> db -> limit(1);
       $query = $this -> db -> get();
       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }


     }


     public function registro($datos)
     {
       if ($this->db->insert('users',$datos)) {
          return $this->db->insert_id();
       } else {
          return false;
       }
     }


     private function hash($pss)
     {
       $a = sha1($pss);
       return md5($a);
     }




}
 ?>
