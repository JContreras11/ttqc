<?php /**
 *
 */
class Modelo_blog extends CI_Model
{



  public function get_blog($url)
  {


    $res = $this->db->select('ide_blog,tit_blog,des_blog,tags_blog,min_des_blog,img_blog,nom_usu,img_usu,fech_blog,users.ema_usu,blog.ide_usu,blog.ide_est_blog')
                    ->from('blog')
                    ->where('url_blog',$url)
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
    $res = $this->db->select('categories.ide_cat,nom_cat,url_cat')->from('blog_cat')->where('ide_blog',$id)->join('categories','blog_cat.ide_cat = categories.ide_cat')->get();
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
      $res['id'] =  $this->db->insert_id();
      $res['url'] = $this->db->select('url_blog')->where('ide_blog',$res['id'])->get('blog')->result()[0]->url_blog;

      return $res;
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

  public function upd_cat($id,$data)
  {
        $this->db->where('ide_blog',$id)->delete('blog_cat');
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

  public function action($table, $data)
  {
    if ($this->db->insert($table,$data)) {
      return true;
    } else {
      return false;
    }

  }


  public function act($id,$data)
  {
        $this->db->where('ide_blog',$id);
    if ($this->db->update('blog',$data)) {
      return true;
    } else {
      return false;
    }

  }


}
 ?>
