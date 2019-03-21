<?php if ( ! defined('BASEPATH')) exit('El acceso directo a este archivo no esta permitido.');

class Modelo_login extends CI_Model{

  function login($username, $password)
   {
     $username=strtoupper($username);
     $this -> db -> select('ide_usu, nom_usu, ide_tip_usu, ema_usu');
     $this -> db -> from('users');
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



  function fil_usu($var1) {

  $sql="SELECT ide_ciu, ide_aut, pat_ciu, mat_ciu, nom_ciu, ema_ciu, nro_doc
  FROM sscc.usuario where nro_doc like '%$var1%' limit 1;

  ";

  $query = $this->db->query($sql);
  if ($query->num_rows() > 0){

      foreach($query->result() as $fila){
$fila->rpta="sihaydatos";
       $data[] = $fila;
     }

     return $data;
   }
   else{
    $row["rpta"]="nohaydatos";
    $data[] = $row;
    return $data;
  //   return False;
   }

  }

function lis_usu() {

$sql="SELECT ide_trb,  nom_com, nro_doc,
        cidusuario, cod_eje, nom_eje
  FROM personal.vw_personal;"
;

$query = $this->db->query($sql);
if ($query->num_rows() > 0){

    foreach($query->result() as $fila){
    $fila->ide_trb=rtrim($fila->ide_trb);
    $fila->nom_com=rtrim($fila->nom_com );
    $fila->nro_doc=rtrim($fila->nro_doc);
    $fila->cidusuario=rtrim($fila->cidusuario);
    $fila->cod_eje=rtrim($fila->cod_eje);
    $fila->nom_eje=rtrim($fila->nom_eje);

      //$fila->=rtrim($fila->);
     $data[] = $fila;
   }

   return $data;
 }
 else{
   $row["detalle"]="No hay Registros";
   $data[] = $row;
   return json_encode($data);
   //  return False;
 }

}

function det_usu($var1) {

  $sql="SELECT ide_ciu, ide_aut, pat_ciu, mat_ciu, nom_ciu, ema_ciu, nro_doc
  FROM sscc.usuario where ide_ciu='$var1'";

  $query = $this->db->query($sql);
  if ($query->num_rows() > 0){

    foreach($query->result() as $fila){
      /*  $fila->des_eve=rtrim($fila->des_eve);
      $fila->nom_eje=rtrim($fila->nom_eje);
      $fila->des_est=rtrim($fila->des_est);
      $fila->pat_ciu=rtrim($fila->pat_ciu);
      $fila->mat_ciu=rtrim($fila->mat_ciu);
      $fila->nro_doc=rtrim($fila->nro_doc);
      */
      //$fila->=rtrim($fila->);
      $data[] = $fila;
    }

    return $data;
  }
  else{
    $row["detalle"]="No hay Registros";
    $data[] = $row;
    return json_encode($data);
    //  return False;
  }

}


		/*
		*
		*Modificacion de ususario
		*
		***/


function mod_usu_listar($id)
{
  $res = $this->db->select('*')
           ->from('public.tp_usuarios')
           ->join('public.tp_empresa','tp_usuarios.ide_empresa = tp_empresa.ide_empresa')
           ->where('ide_usu',$id)
           ->get();

  return $res->result();
}


public function mod_usu_upd($usuario,$empresa)
{
  $res['usuario'] = $this->db->where('ide_usu',$this->input->post('ide'))->update('public.tp_usuarios',$usuario);
  $res['empresa'] = $this->db->where('ide_empresa',$this->input->post('idee'))->update('public.tp_empresa',$empresa);

  return $res;

}


public function usu_upd($usu)
{
      $this->db->where('ide_usu',$this->input->post('inp_text1'));
  if ($this->db->update('public.tp_usuarios',$usu)) {
    return true;
  } else {
    return false;
  }

}

public function usu_upd_mod($mod)
{
      $this->db->where('tp_usu_mod.ide_usu',$this->input->post('inp_text1'));
      $this->db->delete('public.tp_usu_mod');
  if ($this->db->insert_batch('public.tp_usu_mod',$mod)) {
    return true;
  } else {
    return false;
  }

}


public function usu_del($usu)
{
      $this->db->where('ide_usu',$this->input->post('ide'));
  if ($this->db->update('public.tp_usuarios',$usu)) {
    return true;
  } else {
    return false;
  }

}

public function usu_ins($usu)
{
    if ($this->db->insert('public.tp_usuarios',$usu)) {
      return $this->db->insert_id();
    } else {
      return false;
    }

}
public function usu_ins_mod($usu)
{
    if ($this->db->insert_batch('public.tp_usu_mod',$usu)) {
      return true;
    } else {
      return false;
    }

}

public function usu_list($id)
{
  $res1 = $this->session->userdata('logged_in');
  if ($id != null) {
    $this->db->where('ide_usu',$id);
  }
         $this->db->where('tp_usuarios.is_active',1);
  $res = $this->db->select('tp_usuarios.*,tp_empresa.emp_nombre ')
                  ->from('public.tp_usuarios')
                  ->join('public.tp_empresa','tp_usuarios.ide_empresa = tp_empresa.ide_empresa')
                  ->get();

  if ($res) {
    return $res->result();
  } else {
    return false;
  }
}

public function mod_usu($id)
{
          $this->db->where('tp_usu_mod.ide_usu',$id);
          $this->db->select('tp_usu_mod.ide_mod');
          $this->db->from('public.tp_usu_mod');
    $res =$this->db->get();
  if ($res) {
    return $res->result();
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
