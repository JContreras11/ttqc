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
      $res = $this->Modelo_usuario->upd();
      $this->output->set_content_type('application/json')
      ->set_output(json_encode($res));
    }

}
 ?>
