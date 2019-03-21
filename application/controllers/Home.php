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
      $this->load->view('includes/head');
      $this->load->view('includes/menu');
      $this->load->view('vis_home');
      $this->load->view('includes/footer');
      $this->load->view('includes/scripts');
    }



  }



 ?>
