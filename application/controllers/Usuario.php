<?php /**
 *
 */
class Usuario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Modelo_usuario');
  }


  public function index()
  {

      redirect('Login','refresh');

  }


  public function usuario($usr)
  {
    if($this->session->userdata('logged_in'))
    {





      if ( strtolower($usr) === $this->session->userdata('logged_in')['username'] ) {
        $this->load->view('vis_usu');
        // $this->load->view('bet/bet');
      } else {
        $this->load->view('vis_usu_pub');
      }

      $this->load->view('includes/footer');
      $this->load->view('includes/scripts');

    }else {

      $this->load->view('includes/head');
      $this->load->view('includes/menu_usu');
      $this->load->view('vis_usu_pub');
      $this->load->view('includes/footer');
      $this->load->view('includes/scripts');

    }
  }


    public function get_sol()
    {
      $res = $this->Modelo_usuario->get_sol();
      $this->output->set_content_type('application/json')
      ->set_output(json_encode($res));
    }

    public function get_usu()
    {
        $res = $this->Modelo_usuario->get_usu();
        $this->output->set_content_type('application/json')
        ->set_output(json_encode($res));
    }


    public function upd()
    {

      /*
        Obtener el id del usuario
      */
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
         $final_image = '';
       }
     }else {
       // $final_image = $this->randImg(rand(1,5));
       $final_image = '';
     }

      $data = array(
        'ema_usu' => $this->input->post('email'),
        'fb_usu' => $this->input->post('face'),
        'ig_usu' => $this->input->post('ig'),
        'tw_usu' => $this->input->post('twitter'),
        'img_usu' => $final_image,
        'dir_usu' => $this->input->post('des'),
      );




      $res = $this->Modelo_usuario->upd($s_id,$data);
      $this->output->set_content_type('application/json')
      ->set_output(json_encode($res));



    }









}
 ?>
