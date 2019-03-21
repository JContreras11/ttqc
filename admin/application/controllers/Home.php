<?php /**
 *
 */
class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Modelo_admin');
  }

  public function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $resultado['sesion']=$this->session->userdata('logged_in');
      $this->load->view('includes/head');
      $this->load->view('includes/header');
      $this->load->view('includes/menu_izq', $resultado);
      $this->load->view('home');
      $this->load->view('includes/scripts');
      $this->load->view('includes/footer');
    }
    else
    {
      redirect('login', 'refresh');
    }

  }

  public function get_cat()
  {
    $res = $this->Modelo_admin->get_cat();
    $this->output->set_content_type('application/json')
		->set_output(json_encode( $res ));
  }
}
 ?>
