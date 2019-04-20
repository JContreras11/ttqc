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
    $res =  $this->db->select('nom_usu,ema_usu,img_usu,fb_usu,ig_usu,tw_usu,dir_usu,tel_usu,ide_est_usu,fech_nac_usu')->where('ide_usu',$this->session->userdata('logged_in')['id'])->get('users');
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }



  public function upd($id, $data)
  {
    /*
      SQL / Tradicional

      UPDATE 'users' SET nom_usu='',ema_usu='',img_usu='',fb_usu='',ig_usu='',tw_usu='',tel_usu='',ide_est_usu='',fech_nac_usu='' WHERE ide_usu= "1";

      PHPMYADMIN

      UPDATE `users` SET `ide_usu`=[value-1],`nom_usu`=[value-2],`pss_usu`=[value-3],`ema_usu`=[value-4],`is_active`=[value-5],`ide_tip_usu`=[value-6],`img_usu`=[value-7],`fb_usu`=[value-8],`ig_usu`=[value-9],`tw_usu`=[value-10],`tel_usu`=[value-11],`ide_est_usu`=[value-12],`fech_nac_usu`=[value-13],`dir_usu`=[value-14] WHERE 1

    */


    //ClassQuery

        $this->db->where('ide_usu',$id);
    if ($this->db->update('users',$data)) {

      return true;
    } else {

      return false;
    }


  }



}
 ?>
