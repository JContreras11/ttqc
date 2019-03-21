<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper( array('html','url','form') );
    $this->load->model('Modelo_login','',TRUE);
  }

  function index()
  {


    //This method will have the credentials validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
    if($this->form_validation->run() == FALSE)
    {

      $this->load->view('login');

    }
    else
    {
      //Go to private area

      redirect('Home', 'refresh');
    }

  }

  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');

    //query the database
    $result = $this->Modelo_login->login($username, $password);

    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {

        $sess_array = array(
          'id' => $row->ide_usu,
          'username' => $row->nom_usu,
          'tipo' => $row->ide_tip_usu,
          'email' => $row->ema_usu,
        );

        $this->session->set_userdata('logged_in', $sess_array);

      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }

  public function logout()
   {
     /*session_start(); */
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('login', 'refresh');
   }



   public function forgetTuto($id)
   {
     $res = $this->Modelo_login->forgetTuto($id);
     return $res;
   }

}
?>
