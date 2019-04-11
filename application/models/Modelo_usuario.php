<?php /**
 *
 */
class Modelo_usuario extends CI_Model
{



  public function get_sol()
  {
    if ($this->input->post('w') === $this->session->userdata('logged_in')['id']) {
      $id = $this->session->userdata('logged_in')['id'];

      $res = $this->db->select('nom_usu,fecha')->from('requests')->where('ide_usu_rec',$id)->join('users','requests.ide_usu_req = users.ide_usu')->get();
      if ($res) {
        return $res->result();
      } else {
        return false;
      }
    }
  }



  public function get_usu()
  {
    $res =  $this->db->select('nom_usu,ema_usu,img_usu,fb_usu,ig_usu,tw_usu,tel_usu,ide_est_usu,fech_nac_usu')->where('ide_usu',$this->session->userdata('logged_in')['id'])->get('users');
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function upd($data)
  {
    // code...
  }

}
 ?>
