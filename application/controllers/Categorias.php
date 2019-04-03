<?php /**
 *
 */
class Categorias extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Modelo_cat');
  }




    public function get_cat($url)
    {

      $res = $this->Modelo_cat->get_blog($url);


      if ($res) {

          $data['data'] = $res;

          $data['cat'] = $this->Modelo_cat->get_cat_des($url);

          $this->load->view('includes/head');
          $this->load->view('includes/menu');
          $this->load->view('vis_categorias',$data);
          $this->load->view('includes/footer');
          $this->load->view('includes/scripts');

      } else {
        redirect('Home','refresh');
      }



    }


    public function get_temas()
    {

      $res = $this->Modelo_cat->get_blog(null);

          $data['data'] = $res;


          $this->load->view('includes/head');
          $this->load->view('includes/menu');
          $this->load->view('vis_temas',$data);
          $this->load->view('includes/footer');
          $this->load->view('includes/scripts');



    }



    public function list_cat($id=null)
    {
      $res = $this->Modelo_cat->list_cat($id);
      $this->output->set_content_type('application/json')
      ->set_output(json_encode($res));
    }



  public function ins()
  {


    $sess=$this->session->userdata('logged_in');
    $s_id=$sess['id'];

    $final_image='';
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');
    $path = "./uploads/";

    if(isset($_FILES['imgInp']))
    {
     $img = $_FILES['imgInp']['name'];
     $tmp = $_FILES['imgInp']['tmp_name'];
     $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));



     if(in_array($ext, $valid_extensions))
     {
       $final_image = rand(1000,1000000).$img;
       $path = $path.$final_image;

      if(move_uploaded_file($tmp,$path))
      {
    //   echo "<img src='$path' />";
      }
     }
     else
     {
       $final_image = "notfound.png";
     }
   }else {
     $final_image = "notfound.png";
   }




    $data = array(
      'tit_blog' => $this->input->post('tit'),
      'des_blog' => $this->input->post('cont'),
      'ide_est_blog' => 1,
      'tags_blog' => $this->input->post('tags'),
      'min_des_blog' => $this->input->post('min'),
      'ide_usu' => $s_id,
      'img_blog' => $final_image,
      'url_blog' => $this->input->post('url'),
    );

    $res = $this->Modelo_blog->ins($data);
    $this->output->set_content_type('application/json')
    ->set_output(json_encode($res));
  }




}
 ?>
