<?php /**
 *
 */
class Modelo_cat extends CI_Model
{

  public function list_cat($id)
  {
    if ($id != null) {
        $this->db->where('ide_cat',$id);
    }
           $this->db->select('ide_cat,nom_cat, img_cat,url_cat');
    $res = $this->db->get_where('categories', array('is_active' => 1));
    if ($res) {
      return $res->result();
    } else {
      return false;
    }

  }


  public function get_blog($url)
  {

    if ($url != null) {
      $this->db->where('url_cat',$url);
    }

    $res = $this->db->select('blog.*,count(commets.ide_com) as comments,count(likes.ide_like) as likes')
                    ->from('categories')
                    ->where('categories.is_active',1)
                    ->join('blog_cat','categories.ide_cat = blog_cat.ide_cat')
                    ->join('blog','blog_cat.ide_blog = blog.ide_blog')
                    ->join('commets','blog.ide_blog = commets.ide_blog','left')
                    ->join('likes','blog.ide_blog = likes.ide_blog','left')
                    ->group_by('blog.ide_blog')
                    ->order_by('blog.ide_blog','desc')
                    ->get();

    if ($res) {
      return $res->result();
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

  public function get_cat_des($url)
  {
    $res = $this->db->select('nom_cat,url_cat')->from('categories')->where('url_cat',$url)->get();
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
      return true;
    } else {
      return false;
    }

  }


}
 ?>
