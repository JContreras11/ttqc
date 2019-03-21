<?php /**
 *
 */
class Categorias extends CI_Controller
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
        $crud->set_table('categories');

        $crud->display_as('nom_cat','Nombre');
        $crud->display_as('des_cat','Descripcion');

        $crud->field_type('fech_cat', 'hidden');
        $crud->field_type('url_cat', 'hidden');
        $crud->field_type('is_active', 'hidden');
        $crud->field_type('ide_est_cat', 1);

        $crud->display_as('img_cat','Imagen de Categoria');
        $crud->display_as('tags_cat','Etiquetas');

        $crud->display_as('seo_cat','SEO');


        $crud->display_as('fech_cat','Fecha');
        $crud->display_as('url_cat','Url');
        $crud->display_as('is_active','Activo');
        $crud->display_as('ide_est_cat','Estado');


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
