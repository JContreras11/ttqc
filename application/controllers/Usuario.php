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


      $this->load->view('includes/head');
      $this->load->view('includes/menu_usu');


      if ( strtolower($usr) === $this->session->userdata('logged_in')['username'] ) {
        $this->load->view('vis_usu');
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


}
 ?>
