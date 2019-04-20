<?php /**
 *
 */
class Modelo_home extends CI_Model
{

  public function get_cat($id=null)
  {

    if ($id != null) {
      $this->db->where('ide_cat',$id);
    }

    $res = $this->db->select('*')->from('categories')->where('is_active',1)->get();
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function get_not($id=null)
  {

    if ($id != null) {
      $this->db->where('ide_new',$id);
    }

    $res = $this->db->select('*')->from('news')->where('is_active',1)->get();
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function get_blog($id=null)
  {

    if ($id != null) {
      $this->db->where('blog.ide_blog',$id);
    }

    if ($this->input->post('w') != '' && $this->input->post('w') == $this->session->userdata('logged_in')['id']) {
        $this->db->where('blog.ide_usu',$this->session->userdata('logged_in')['id']);
    }else {
      $this->db->limit(4);
    }



    $res = $this->db->select('blog.*,count(commets.ide_com) as comments,count(likes.ide_like) as likes')->from('blog')->where('blog.is_active',1)->join('commets','blog.ide_blog = commets.ide_blog','left')->join('likes','blog.ide_blog = likes.ide_blog','left')->group_by('blog.ide_blog')->order_by('blog.ide_blog','desc')->get();
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }




}
 ?>
