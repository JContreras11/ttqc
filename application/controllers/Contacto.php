<?php /**
 *
 */
class Contacto extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

  }



  public function mail()
  {

      $to = "ttengoquecontar@gmail.com";
      $subject = "Contacto desde Tetengoquecontar.com";
      $headers = "From: hola@tetengoquecontar.com" . "\r\n";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      $email = $this->input->post('email');
      $tel = $this->input->post('tel');
      $menss = $this->input->post('menss');

      $message = "
      <html>
      <head>
      <title>HTML</title>
      </head>
      <body>
      <h1>Contacto desde formulario de contacto</h1>

      <div>
        <ul>
          <li>Email: $email </li>
          <li>Telefono: $tel </li>
          <li>Mensaje: $menss </li>
        </ul>
        </div>

      </body>
      </html>";

      if (mail($to, $subject, $message, $headers)) {
        echo json_encode(true);
      } else {
        echo json_encode(false);
      }



  }



}
 ?>
