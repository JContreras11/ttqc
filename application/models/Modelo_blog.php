<?php /**
 *
 */
class Modelo_blog extends CI_Model
{



  public function get_blog($url)
  {
    $res = $this->db->select('ide_blog,tit_blog,des_blog,tags_blog,min_des_blog,img_blog,nom_usu,img_usu,fech_blog,blog.ide_usu')
                    ->from('blog')
                    ->where('url_blog',$url)
                    ->where('ide_est_blog',1)
                    ->where('blog.is_active',1)
                    ->join('users','blog.ide_usu = users.ide_usu')
                    ->get();

    if ($res) {
      if ($res->num_rows() === 1) {
        return $res->result();
      } else {
        return false;
      }
    } else {
      return false;
    }

  }



  public function get_cat($id)
  {
    $res = $this->db->select('nom_cat,url_cat')->from('blog_cat')->where('ide_blog',$id)->join('categories','blog_cat.ide_cat = categories.ide_cat')->get();
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function get_com($id)
  {
    $res = $this->db->select('fech_com,des_com,img_usu,nom_usu')->from('commets')->where('ide_blog',$id)->where('commets.is_active',1)->join('users','commets.ide_usu = users.ide_usu')->get();
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }

  public function ins($data)
  {
    if ($this->db->insert('blog',$data)) {
      return $this->db->insert_id();
    } else {
      return false;
    }

  }

  public function ins_cat($data)
  {
    if ($this->db->insert_batch('blog_cat',$data)) {
      return true;
    } else {
      return false;
    }

  }


  public function add_history($data)
  {
    if ($this->db->insert('requests',$data)) {
      return true;
    } else {
      return false;
    }

  }


}
 ?>
