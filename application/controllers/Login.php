<?php /**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Modelo_login');
  }



  public function index()
  {
    $this->load->view('includes/head');
    $this->load->view('includes/menu');
    $this->load->view('vis_login');
    $this->load->view('includes/footer');
    $this->load->view('includes/scripts');

  }


  public function registrar_vista()
  {
    $this->load->view('includes/head');
    $this->load->view('includes/menu');
    $this->load->view('vis_registro');
    $this->load->view('includes/footer');
    $this->load->view('includes/scripts');
  }

  public function log()
  {

    //query the database
    $result = $this->Modelo_login->login(strtoupper($this->input->post('usr')), $this->input->post('pss'));

    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {

        $sess_array = array(
          'id' => $row->ide_usu,
          'username' => strtolower($row->nom_usu),
          'tipo' => $row->ide_tip_usu,
          'imagen' => $row->img_usu,
          'email' => $row->ema_usu,
        );

        $this->session->set_userdata('logged_in', $sess_array);

      }

      $this->output->set_content_type('application/json')
      ->set_output(json_encode($sess_array['username']));
    }
    else
    {
      $this->output->set_content_type('application/json')
      ->set_output(json_encode(false));
    }
  }



  public function reg()
  {

    $datos = array(
      'nom_usu' => strtoupper($this->input->post('usr')),
      'pss_usu' => $this->hash($this->input->post('pss')),
      'ema_usu' => $this->input->post('email'),
      'tel_usu' => $this->input->post('tlf'),
      'is_active' => 1,
      'ide_tip_usu' => 2,
      // 'img_usu' => $this->input->post(''), TODO: imagen ramdom
      // 'fb_usu' => $this->input->post(''),
      // 'ig_usu' => $this->input->post(''),
      // 'tw_usu' => $this->input->post(''),
      // 'ide_est_usu' => $this->input->post(''),
      // 'fech_nac_usu' => $this->input->post(''),
      // 'dir_usu' => $this->input->post(''),
    );


    $res = $this->Modelo_login->registro($datos);
    $this->output->set_content_type('application/json')
    ->set_output(json_encode($res));
  }


  public function changue_pss()
  {
    // code...
  }


  public function logout()
   {
     /*session_start(); */
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('login', 'refresh');
   }




   private function hash($pss)
   {
     $a = sha1($pss);
     return md5($a);
   }




}


 ?>
