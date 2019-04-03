<?php
/**
 *
 */

  class Home extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('Modelo_home');
    }


    public function index()
    {

      $res['cat'] = $this->Modelo_home->get_cat();
      $res['news'] = $this->Modelo_home->get_not();
      $res['blog'] = $this->Modelo_home->get_blog();

      $this->load->view('includes/head');
      $this->load->view('includes/menu');
      $this->load->view('vis_home',$res);      
      $this->load->view('includes/footer');
      $this->load->view('includes/scripts');
    }


    public function get_blog()
    {
      $res = $this->Modelo_home->get_blog();
      $this->output->set_content_type('application/json')
      ->set_output(json_encode($res));
    }



    public function nosotros()
    {
      $this->load->view('includes/head');
      $this->load->view('includes/menu');
      $this->load->view('vis_nosotros');
      $this->load->view('includes/footer');
      $this->load->view('includes/scripts');
    }


    public function contacto()
    {
      $this->load->view('includes/head');
      $this->load->view('includes/menu');
      $this->load->view('vis_contacto');
      $this->load->view('includes/footer');
      $this->load->view('includes/scripts');
    }


  }



 ?>
