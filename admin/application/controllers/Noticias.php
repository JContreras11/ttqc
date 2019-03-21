<?php /**
 *
 */
class Noticias extends CI_Controller
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
        $crud->set_table('news');

        $crud->display_as('tit_new','Titulo');
      	$crud->display_as('des_new','Descripcion');
      	$crud->display_as('fech_new','Fecha');
      	$crud->display_as('url_new','URL');
      	$crud->display_as('tags_new','Etiquetas');
      	$crud->display_as('is_active','Activo');
      	$crud->display_as('img_new','Imagen');

        $crud->field_type('is_active', 'true_false',1);



        $crud->set_field_upload('img_new','uploads');

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
