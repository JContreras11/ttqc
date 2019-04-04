<?php /**
 *
 */
class Blog extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Modelo_blog');
  }




    public function get_blog($url)
    {

      $res = $this->Modelo_blog->get_blog($url);


      if ($res) {

          $data['data'] = $res;
          $data['cat'] = $this->Modelo_blog->get_cat($res[0]->ide_blog);
          $data['com'] = $this->Modelo_blog->get_com($res[0]->ide_blog);

          $this->load->view('includes/head');
          $this->load->view('includes/menu');
          $this->load->view('vis_single_blog',$data);
          $this->load->view('includes/footer');
          $this->load->view('includes/scripts');

      } else {
        redirect('Home','refresh');
      }


      // $this->output->set_content_type('application/json')
      // ->set_output(json_encode($res));
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
       $final_image = $this->randImg(rand(1,5));
     }
   }else {
     $final_image = $this->randImg(rand(1,5));
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

    $id_blog = $this->Modelo_blog->ins($data);

    $cat = $this->input->post('cat');
    $datos = array();

    foreach ($cat as $k => $v) {
      $datos[] = array('ide_blog' => $id_blog, 'ide_cat' => $v );
    }

    $res = $this->Modelo_blog->ins_cat($datos);

    $this->output->set_content_type('application/json')
    ->set_output(json_encode($id_blog));
  }



  public function add_history()
  {

    $sess =  $this->session->userdata('logged_in');


    $data = array(
      'ide_usu_req' => $sess['id'],
      'ide_usu_rec' => $this->input->post('id_u'),
      'ide_blog' => $this->input->post('id_b'),
      'ema_req' => $this->input->post('email'),
      'tel_req' => $this->input->post('tel'),
      'des_req' => $this->input->post('des'),
    );


    $res = $this->Modelo_blog->add_history($data);
    $this->output->set_content_type('application/json')
    ->set_output(json_encode($res));
  }


 public function randImg($num)
 {
   switch ($num) {
     case 1:
       return 'ttq1.png';
     break;

     case 2:
       return 'ttq2.png';
     break;

     case 3:
       return 'ttq3.png';
     break;

     case 4:
       return 'ttq4.png';
     break;

     case 5:
       return 'ttq5.png';
     break;

     default:
      return 'ttq1.png';
     break;
   }
 }



 public function acction()
 {


   if ($this->session->userdata('logged_in')) {
     $sess =  $this->session->userdata('logged_in');
     $action = $this->input->post('action');

     if ($action === 'like') {
       $table = 'likes';
       $data  = array('ide_usu' => $sess['id'] ,'ide_blog' => $this->input->post('id'), );
     }

     if ($action === 'comment') {
       $table = 'commets';
       $data  = array('ide_usu' => $sess['id'] ,'des_com' => $this->input->post('com') ,'ide_blog' => $this->input->post('id'), );
     }


     $res = $this->Modelo_blog->action($table,$data);
     $this->output->set_content_type('application/json')
     ->set_output(json_encode($res));

   }


 }


}
 ?>
