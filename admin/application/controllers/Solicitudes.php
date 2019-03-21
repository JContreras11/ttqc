<?php /**
 *
 */
class Solicitudes extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('grocery_CRUD');
  }


  public function _example_output($output = null)
	{
    $resultado['sesion']=$this->session->userdata('logged_in');
    $this->load->view('includes/head');
    $this->load->view('includes/header');
    $this->load->view('includes/menu_izq', $resultado);
    $this->load->view('views_admin',(array)$output);
    $this->load->view('includes/scripts');
    $this->load->view('includes/footer');


  }

  public function index()
	{

    if($this->session->userdata('logged_in'))
    {
        $crud = new grocery_CRUD();

        // $crud->set_theme('datatables');
        $crud->set_table('requests');

        	$crud->display_as('ide_blog','Entrada') ;
      		$crud->display_as('ide_usu_req','Usuario Solicitante')	;
      		$crud->display_as('ide_usu_rec','Usuario de la Entrada')	;
      		$crud->display_as('des_req','Glosa');
      		$crud->display_as('ema_req','Email');
      		$crud->display_as('tel_req','Telefono')	;
      		$crud->display_as('ide_est_req','Estado')	;
      		$crud->display_as('is_active','Activo');


          $crud->set_relation('ide_blog','blog','tit_blog');
          $crud->set_relation('ide_usu_req','users','nom_usu');
          $crud->set_relation('ide_usu_rec','users','nom_usu');


        $crud->display_as('nom_cat','Nombre');
        $crud->display_as('des_cat','Descripcion');

        $crud->field_type('ide_est_req', 'true_false',1);
        $crud->field_type('is_active', 'true_false',1);
        



        $crud->set_field_upload('img_cat','uploads');

        $output = $crud->render();

        $this->_example_output($output);
    }
    else
    {
      redirect('login', 'refresh');
    }


	}






}
 ?>
