<?php /**
 *
 */
class Subs extends CI_Controller
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
        $crud->set_table('subscriptions');


        $crud->display_as('ide_sub','id' );
        $crud->display_as('ema_sub','Email');
        $crud->display_as('fech_sub','Fecha');
        $crud->display_as('is_active','Activo');

        $crud->field_type('is_active', 'true_false',1);


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
