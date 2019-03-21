<?php /**
 *
 */
class Entradas  extends CI_Controller
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
        $crud->set_table('blog');


        $crud->display_as('tit_blog','Titulo');
      	$crud->display_as('des_blog','Contenido');
      	$crud->display_as('fech_blog','Fecha');
      	$crud->display_as('img_blog','Imagen Destacada');
      	$crud->display_as('ide_usu','Usuario');
      	$crud->display_as('tags_blog','Etiquetas');
      	$crud->display_as('seo_blog','SEO');
      	$crud->display_as('min_des_blog','Descripcion Corta');
      	$crud->display_as('is_active','Activo');
      	$crud->display_as('ide_est_blog','Estado');
      	$crud->display_as('url_blog','Url');

        $crud->set_relation('ide_usu','users','nom_usu');

        $crud->field_type('fech_blog', 'hidden');
        $crud->field_type('is_active', 'hidden');
        $crud->field_type('url_blog', 'hidden');
        $crud->field_type('ide_est_blog', 'true_false',1);


        $crud->set_field_upload('img_blog','uploads');

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
