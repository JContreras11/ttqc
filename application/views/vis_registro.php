<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style media="screen">
.cls-content {
  padding: 50px 15px 15px;
  padding-top: 10vh;
  background: #ecf0f5; /*colocar una imagen :D */
  position: relative;
}


.cls-content .panel {
    background-color: #fff;
    box-shadow: 0 0px 20px rgba(0,0,0,0.15);
}


.panel-body {
    padding: 15px 20px 25px;
}

.cls-content .cls-content-sm, .cls-content .cls-content-lg {
    width: 70%;
    min-width: 270px;
    margin: 0 auto;
    position: relative;
    border: 0;
    box-shadow: none;
}
/*
@media (min-width: 768px){
.cls-content .cls-content-sm {
    width: 350px;
  }
} */


</style>




<div class="cls-content" style=" padding-bottom: 40px;">
    <div class="cls-content-sm panel" style="text-align: center;">
        <div class="panel-body">

            <div class="mar-ver pad-btm">
              <!-- logo -->
                <img src="<?= base_url() ?>assets/img/logo_t.png" alt=""style="width: 35%; margin: 4% 0 2px 0;" >
                <h1 class="h3" style="margin-bottom: 30px;">Registro de usuario</h1>
            </div>

            <div class="" id="error" style="display:none;">
              <code>Los datos ingresados no son correctos</code>
            </div>

            <form class="" id="frm-reg" method="post">

              <div class="row">
                  <div class="col-md-6">
                    <fieldset>

                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Username" autofocus name="usr" required>
                      </div>

                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password" name="pss" required>
                      </div>

                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <fieldset>
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email" name="email" required>
                      </div>
                      <div class="form-group">
                          <input type="number" class="form-control" placeholder="Telefono" name="tlf" >
                      </div>
                    </fieldset>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" class=""  name="acpt" id="acpt" required > <label for="acpt">¿ Acepta los <a href="javascript:void()" data-toggle="modal" data-target="#myModal"> Términos y condiciones </a> y <a href="<?= base_url() ?>/assets/docs/politica.pdf" target="_blank">Políticas de privacidad</a> ?</label>
                    </div>
                  </div>
              </div>



                <button class="btn btn-primary btn-lg btn-block" type="submit" style="background: #f0907b;border: solid 1px #f0907b; margin: 10px 0;">Registar</button>
            </form>

            <!-- <div class="panel-footer">
              ¿ Aun no estas registrado ? <a href="#"> Registrate Aquí¡</a>
            </div> -->

        </div>




    </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-lg">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!-- <h4 class="modal-title">Modal Header</h4> -->
       </div>
       <div class="modal-body">
         <div class="container">
           <h3>Terminos y Condiciones</h3>
           <textarea name="name" rows="8" cols="80" disabled style="text-align: justify; padding:0 10px;">

                             TÉRMINOS Y CONDICIONES PARA LA PÁGINA WEB DE Te Tengo Que Contar
                                                    www.tetengoquecontar.com (la “Página Web”)

Estas condiciones de uso regulan el acceso y la utilización libre y gratuita de la Página Web e implican el expreso e íntegro conocimiento y aceptación de los presentes términos y condiciones. El Usuario que no esté de acuerdo con los presentes términos y condiciones tiene el pleno derecho de no acceder a la Página Web. No obstante, el uso de la Página Web, demuestra plenamente la aceptación íntegra, total y sin condiciones de los siguientes términos y condiciones.

1.	Objeto. Los presentes términos y condiciones regulan la relación entre el Usuario y la plataforma web Te Tengo Que Contar respecto al acceso y el uso por parte del Usuario de la Página Web. El Usuario, al ingresar a la Página Web a través de cualquier modalidad o medio conocido o por conocerse y/o usarla, queda obligado bajo los mismos.

Te Tengo Que Contar (#TTQC) es una plataforma transmedia. El proyecto se crea en el primer semestre d, creada en el proyecto nació en el 2019, bajo la dirección de Estefanía Gordillo, estudiante de comunicación social de la Pontificia Universidad Javeriana y busca darle vida a todos esos micro relatos, historias, anécdotas, etc. s… que los jóvenes en Bogotá viven a diario, mediante el apoyo de otros estudiantes bogotanos, para la creación de guiones de ficción en un futuro.

2.	Usuarios. Podrán usar la Página Web, las personas naturales que cumplan la totalidad de los siguientes requisitos, además de cualquier otro establecido en el presente documento:

2.1	Mayores de edad; (No sé si sea necesario por la ley, pero en este caso no tienen que ser mayores de edad)
2.22.1	Aceptar los presentes términos y condiciones; y
2.32.2	Aceptar el tratamiento de los datos personales (los “Usuarios” y/o el “Usuario”).


3. Clases de Usuarios:
3.1 Adultos jóvenes, mayores de edad registrados y que acepten los presentes términos y condiciones.
3.2 Menores de edad: Los menores de 18 años o incapaces, no deberán ingresar ni utilizar los servicios que presta esta página sin el previo consentimiento de sus padres o tutores legales. Los usuarios menores de 18 años o incapaces no podrán registrarse por su propia cuenta para acceder a los servicios que presta el Sitio Web, sino únicamente con el consentimiento de sus padre o tutores legales, según el caso.
Te Tengo Que Contar manifiesta que, conforme a las disposiciones del Código del Menor o de las leyes aplicables, que el objeto de las Páginas no es atentar contra la moral, la salud física, ni mental de los menores de edad o incapaces, u obtener información confidencial e íntima del usuario con el propósito de usarla en su contra. Los padres o tutores legales del usuario menor de edad o incapaz son responsables totalmente por la utilización que el usuario menor de edad o incapaz haga de la plataforma.
Si el usuario es un menor de edad, el término de usuario incluye a sus padres tutores.  En consecuencia, el usuario debe leer atentamente las condiciones generales en cada una de las ocasiones en que se proponga utilizar cualquiera de las páginas.
Si el usuario es un menor de edad o un incapaz, el uso de las páginas debe estar acompañado de la aceptación de las condiciones generales por parte de sus padres o tutores legales, según el caso.  Sólo hasta que el menor o incapaz obtenga dicha aceptación, se entiende que el usuario está haciendo uso válido de las páginas.  Si el usuario menor de edad o incapaz no obtiene aceptación, no está habilitado para hacer uso de la plataforma.  Se entiende que los padres, tutores o curadores, según el caso, han otorgado la mencionada autorización por el sólo uso del sitio web por parte del menor de edad.


3.	Alcance de los términos y condiciones. Los presentes términos y condiciones rigen íntegra y totalmente el uso de la Página Web, por lo tanto al hacer CLIC en ACEPTO TERMINOS Y CONDICIONES ubicado en el formulario de registro de la Página Web, el Usuario manifiesta su entendimiento y aceptación íntegra y total de los presentes términos y condiciones, así como de las directrices, normas, avisos y otras condiciones y términos adicionales publicados en la Página Web, los cuales hacen parte integrante de los presentes términos y condiciones.

4.	Modificaciones. Te Tengo Que Contar puede modificar los presentes términos y condiciones en cualquier momento. Constituye conocimiento y aceptación de las modificaciones a estos términos y condiciones que los Usuarios con posterioridad a que Te Tengo Que Contar haya modificado la Página Web acceda o la utilice.

5.	Actualizaciones. Te Tengo Que Contar no está obligado a proporcionar actualizaciones o mejoras de la Página Web. Sin embargo, si Te Tengo Que Contar, a su entera discreción, actualiza, cambia, disminuye o mejora la Página Web, se aplicarán los presentes términos y condiciones a dichas actualizaciones, cambios, disminuciones, mejoras, etc., a menos de que se indique lo contrario de forma explícita.

6.	Software. El Usuario directamente o a través de un tercero no podrá utilizar ningún software, servicio o aplicación que modifique, cierre, restrinja, o redirija, o intente modificar, cerrar, restringir o redirigir la Página Web. El Usuario no accederá a la Página Web utilizando medios automatizados (como harvesting bots, robots, arañas o scrapers), ni podrá permitir que un tercero tenga acceso y/o utilice la Página Web en su nombre o por su cuenta mediante un proceso automatizado como, por ejemplo, robots o rastreadores web o almacenamiento periódico de la información contenida en la Página Web. El Usuario acepta ser el único responsable (frente a  Te Tengo Que Contar  y terceros) de todas la actividades que realice en la Página Web, y mantendrá indemne a Te Tengo Que Contar , sus empleados, accionistas, socios, filiales, representantes, distribuidores, contratistas y/o proveedores de servicios, etc., (en adelante las “Partes Indemnizables”) por este concepto. El Usuario no podrá usar ningún software ni hardware que reduzca el número de Usuarios que tienen acceso o utilizan la Página Web.

7.	Propiedad Intelectual. El Usuario otorga la licencia a otros usuarios registrados en la página a modificar, copiar, distribuir, transmitir, exhibir, realizar, reproducir, publicar, crear trabajos derivados, divulgar, ceder, , vender (no estoy muy segura de como manejar este tema) y en general usar los escritos que envía y conforman la Página Web. En el caso de que un Usuario registrado obtenga lucro por medio de algún escrito de la pagina, el  Usuario que envió la historia original cede los derechos patrimoniales, no morales, del escrito, pero es posible que se dé una posible negociación a futuro por parte y parte, ya de manera directa entre ambos usuarios, ya eso depende del que lo haya usado, pero Te Tengo Que Contar no se hace responsable de lo que suceda después de que el escrito haya sido utilizado.


El contenido compartido por los usuarios registrados en la Página Web, no le pertenece y pertenecerá a Te Tengo Que Contar, la propiedad moral del contenido suministrado a la Página Web por los usuarios le pertenece al usuario que originalmente envía el relato. El Usuario declara conocer y acepta que cede los derechos patrimoniales de su obra original, a Usuarios terceros que a su vez se comprometen a registrarse y aceptar los términos y condiciones de la Página Web y que el uso que haga de los mismos debe ser siempre un uso no comercial y privado, que no atente contra los usos honrados en materia de derecho de la propiedad intelectual.

El Usuario no podrá reproducir, desensamblar, descompilar y/o utilizar técnicas de ingeniería inversa en la Página Web, los contenidos o en el soporte lógico de la Página Web. Todo el contenido de la Página Web esta protegidos por leyes y disposiciones de tratados internacionales en materia de derecho de la propiedad intelectual. Por medio de los presentes términos y condiciones se le informa de forma clara y directa al Usuario que los contenidos de la Página Web están protegidos por la normatividad nacional e internacional del derecho de la propiedad intelectual, por lo que el Usuario acepta que cualquier uso que haga de los contenidos de la Página Web por fuera de los usos honrados en materia de derecho de la propiedad intelectual es un uso de mala fe, con la intención manifiesta de perjudicar a Te Tengo Que Contar o a un tercero y obtener un provecho para sí mismo o para un tercero por ello.

8.	Usos de la Página Web. Aceptado los presentes términos y condiciones, el Usuario no puede utilizar la Página Web para hacer publicidad ni ofertas de compra o venta de productos o servicios, ni para llevar un negocio o desarrollar una actividad empresarial o una explotación comercial de cualquier tipo sin el consentimiento explícito, escrito y previo de Te Tengo Que Contar.

El Usuario no (i) utilizará la Página Web en encuestas, concursos, sistemas piramidales, cadenas de mensajes, correo no deseado, correo masivo ni en ningún mensaje repetitivo, de gran difusión o no; (ii) difamará, abusará, acosará, espiará, amenazará ni infringirá de ningún otro modo los derechos legales de otras personas (tales como el derecho a la privacidad) que utilicen la Página Web; (iii) creará una falsa identidad con el fin de desorientar a otros usuarios o a Te Tengo Que Contar; (iv) publicará, transferirá, distribuirá, ni divulgará en la Página Web ningún tema, nombre, información o material inadecuado, irreverente, difamatorio, obsceno, indecente, intimidatorio, ilegal o que incite a la violencia; (v) transferirá, ofrecerá secuencias ni proporcionará de ningún otro modo archivos u otro material que contenga imágenes, fotografías, software u otro material protegido por los derechos de la propiedad intelectual, el derecho a la privacidad o de imagen, a menos que tenga la propiedad o el control de los derechos correspondientes o haya recibido todos los consentimientos necesarios para proceder de tal forma; (vi) utilizará ningún material, obras o información, incluidas imágenes, textos y fotografías, que se proporcionen a través de la Página Web en forma alguna que infrinja derechos de terceros; (vii) transferirá, ofrecerá secuencias ni proporcionará de ningún modo archivos u otro material que contenga virus, "troyanos", "gusanos", bombas de tiempo, programas de borrado, archivos dañados o cualquier otro programa o software similar que pueda perjudicar el funcionamiento de los equipos de terceros, los de Te Tengo Que Contar y/o las Partes Indemnizables; (viii) infringirá ningún código de conducta ni ninguna directriz que sea aplicable a la Página Web;

Tengo Que Contar se reserva la facultad de quitar la información publicada en la Página Web por el Usuario cuando lo considere necesario, sin previo aviso, y no se hará responsable por la pérdida de dicha información en caso de que el Usuario no tenga copia de la misma.

Te Tengo Que Contar respeta las normas y derechos de terceras personas e invita y exige a los Usuarios que también lo hagan. Por lo tanto, ningún Usuario podrá subir a la Página Web o utilizar en la Página Web materiales o bienes protegidos por derechos de propiedad intelectual respecto de los que no sea titular o licenciatario autorizado para su uso. Cualquier uso no autorizado, a juicio de Tengo Que Contar, le permitirá a Tengo Que Contar bloquear al Usuario de la Página Web.

Uso de la página web para lectores: (i) Acepta hacer un uso adecuado de la Página Web, incluyendo la sección de comentarios, donde se compromete a no propagar mensajes inadecuados, irreverentes, difamatorios, obscenos indecentes, intimidatorios, o que incite a la violencia, a riesgo de ser bloqueado de la Página Web a juicio del equipo de Te Tengo Que Contar; (ii) Registrarse en la Página Web al momento de hacer clic en el título del relato, el cual llevará al Usuario al link completo del relato cuando el lector quiera terminar un relato y (iii) Reconoce que la información proporcionada en el formulario de registro es veraz, aceptando los términos y condiciones de la página; (iii) No creará una falsa identidad con el fin de desorientar a otros usuarios o a Te Tengo Que  ContarContar.

Uso de la página web para escritores de relatos: Se compromete a (i) Registrarse al momento de ingresar a la Página Web (ii) Reconoce que la información proporcionada en el formulario de registro es veraz, aceptando los términos y condiciones de la página (iii) el Usuario puede elegir que su relato sea compartido de manera anónima y no autorizar la divulgación de sus datos personales como nombre, teléfono y/o correo electrónico en el caso de que un tercero registrado en La Página desee usar su relato; En caso de no hacer clic en esta opción proporcionada dentro del formulario de envío de la historia, el Usuario reconoce que cede el derecho a Te Tengo Que Contar de compartir su correo electrónico y/o teléfono con el Usuario que haya dado clic en la opción “usar historia” (iv) El Usuario reconoce que es el autor intelectual y moral de la obra que sube a la Página Web; y que (v) Cede los derechos patrimoniales sobre la obra en caso de que esta logre obtener alguna remuneración económica a futuro; (vi) Acepta que una vez el escrito sea enviado, le está otorgando el derecho a Te Tengo Que Contar de distribuirlo en la Página Web; (vii) Te Tengo Que Contar no se hace responsable por cualquier tipo de contacto que se haga a futuro, negociación comercial, económica, publicitaria, de manera personal, en el caso de que un tercero registrado en la página desee hacer uso del relato y además contactar directamente a la persona que originalmente envió este relato; (viii) el Usuario reconoce que mantiene indemne a Te Tengo Que Contar en el caso de que se produzca cualquier infracción a la ley de derechos de autor (ix) Autoriza a la modificación, alteración, adaptación, extensión, transmisión, publicación, distribución, reelaboración, de la obra original, protegido bajo ley de derechos de autor.

Uso de la página para realizadores que deseen adaptar relatos:  (i) Acepta registrarse en la Página Web al momento de hacer clic en el título del relato, el cual llevará al Usuario al link completo de la obra cuando el realizador quiera terminar de leer un relato y (iii) Reconoce que la información proporcionada en el formulario de registro es veraz, aceptando los términos y condiciones de la página; (iii) No creará una falsa identidad con el fin de desorientar a otros usuarios o a Te Tengo Que Contar; (iv) reconoce que es su obligación notificar mediante la Página Web, haciendo clic en el botón de usar historia, cada vez que el Usuario desee hacer uso de cualquier relato disponible en la Página Web, ya sea para adaptarlo, modificarlo, extenderlo, publicarlo, reelaborarlo; (v) reconocerá siempre los derechos morales que tiene el usuario que envió originalmente la obra, en caso de ser anónimo, (vi) el Usuario dará reconocimiento a la plataforma web que distribuyó el relato de dónde surgió la inspiración, para la adaptación de la obra original, (vii) el Usuario no está en la obligación de dar un reconocimiento patrimonial al Usuario que originalmente envió la obra; (viii) es a decisión del Usuario si desea ponerse en contacto con el Usuario que originalmente envió la obra a la Página Web; (ix) Te Tengo Que Contar no se hace responsable por cualquier tipo de contacto que se haga a futuro, negociación comercial, económica, publicitaria, de manera personal, en el caso de que un tercero registrado en la página desee hacer uso del relato y además contactar directamente a la persona que originalmente envió este relato; (viii) el Usuario reconoce que mantiene indemne a Te Tengo Que Contar en el caso de que se produzca cualquier infracción a la ley de derechos de autor.


Usted podrá notificar a Te Tengo Que Contar al correo ttengoquecontar@gmail.com en caso de que tenga conocimiento que algún material en la Página Web, infringe sus derechos de propiedad intelectual o los de un tercero.

9.	Supervisión. Al aceptar los términos y condiciones de la Página Web, el Usuario autoriza a Te Tengo Que Contar a supervisar y/o grabar en cualquier momento las comunicaciones, transferencias de datos, intercambios de archivos, proceso de navegación, etc. con el fin de verificar el cumplimiento de los términos y condiciones y en particular a efectos de (i) garantizar el cumplimiento por parte del Usuario de los términos y condiciones; (ii) cumplir con la ley y procedimientos legales aplicables; o (iii) proteger los derechos, la propiedad y los intereses de Te Tengo Que Contar, las Partes Indemnizables y/o el público en general; y/o (iv) supervisar la prestación de los servicios de Te Tengo Que Contar también se reserva el derecho a modificar, negarse a transferir o retirar cualquier información o material, en todo o en parte, a la entera discreción de Te Tengo Que Contar incluso de la totalidad de la Página Web, sin necesidad de aviso previo al Usuario. El cierre de la Página Web por parte de Te Tengo Que Contar se efectuará a entera discreción de Te Tengo Que Contar y no generará el pago de comisión, precio, indemnización, cláusula penal, honorario, bonificación, compensación o en general pago alguno para el Usuario.

10.	Manejo de Información del Usuario.

10.1	Al aceptar los presentes términos y condiciones, el Usuario autoriza a Te Tengo Que Contar a recopilar, almacenar, procesar, actualizar y utilizar la información personal del Usuario que consistente en: nombre, apellidos, teléfono, correo electrónico, para la base de datos de Te Tengo Que Contar. Te Tengo Que Contar no compartirá ninguna información personal con terceros para efectos de marketing de terceros, ni con fines fraudulentos ni que contravengan las normas aplicables sobre protección de datos personales en Colombia.

10.2	Los Usuarios deberán proporcionar su información personal (nombre, apellidos, teléfono, correo electrónico) en los medios que Te Tengo Que Contar determine, de manera exacta, precisa y verdadera (los "Datos Personales") y asumen el compromiso de actualizar los Datos Personales conforme sea necesario. Los Usuarios declaran y garantizan que los Datos Personales son exactos, veraces, vigentes y auténticos.

10.3	Al proporcionar sus Datos Personales, el Usuario está autorizando a Te Tengo Que Contar para realizar el tratamiento de sus Datos Personales de acuerdo con las finalidades establecidas en la Política de Tratamiento de Datos Personales de la Agencia, la cual se encuentra en el siguiente link <Link Política>. En razón a lo anterior, se entenderá que el Usuario conoce y acepta los términos de tratamiento de sus Datos Personales por parte Te Tengo Que Contar, conforme con la Política de Tratamiento de Datos Personales que encontrará en el link informado anteriormente.

11.	Responsabilidad del Usuario. El Usuario (i) no utilizará los servicios para ningún fin ilegal, que esté prohibido por las normas vigentes, los usos honestos y/o los términos y condiciones, o que atente contra la honra y el buen nombre de las Partes Indemnizables o de terceros; (ii) no puede utilizar la Página Web de ningún modo que pueda dañar, inhabilitar, sobrecargar, reducir y en general modificar la capacidad de la Página Web o interferir en el uso y disfrute del mismo por parte de terceros; (iii) no puede eludir, desactivar o manipular de cualquier otra forma, o intentar eludir, desactivar o manipular las medidas de seguridad de la Página Web, ni alterar o modificar ninguna parte de la Página Web; (iv) no puede manipular los sistemas informáticos o las redes relacionados con la Página Web y; (v) es íntegra y exclusivamente responsable por el uso que haga de la Página Web y mantendrá indemne a las Partes Indemnizables por este concepto.

El Usuario está obligado a hacer un uso razonable de la Página Web y de sus contenidos, según las posibilidades y fines para los que está concebido.

12.	Terminación. El cierre de la Página Web por parte de Te Tengo Que Contar se efectuará a entera discreción de Te Tengo Que Contar y no generará el pago de comisión, precio, indemnización, cláusula penal, honorario, bonificación, compensación o en general pago alguno para el Usuario.

13.	Exoneración de Responsabilidad. Te Tengo Que Contar proporciona al Usuario la Página Web "tal cual", "con todos los defectos" y "como está disponible," (esta parte no la entiendo muy bien, es algo propio de esta pagina en específico o se pone siempre?), y el Usuario asume todo riesgo relacionado con su uso.  Te Tengo Que Contar y/o las Partes Indemnizables no son responsables por el uso que pretenda o llegue a darle el Usuario a la Página Web.

Te Tengo Que Contar, no será responsable por la información suministrada por el Usuario en la Página Web, el Usuario es responsable directo de la información que incluya en la Página Web.

Te Tengo Que Contar no está obligada a prestar el acceso la Página Web de forma segura y exenta de interrupciones o de errores, ni está obligado a corregir los defectos del funcionamiento o de las funcionalidades de cualquier software que se le proporcione al Usuario. Te Tengo Que Contar podrá modificar la Página Web o las funciones en cualquier momento, de cualquier forma y por cualquier motivo. En ningún caso las Partes Indemnizables (en donde está incluido Te Tengo Que Contar) serán responsables de cualquier daño directo y/o indirecto basados o resultantes del uso de la Página Web por parte del Usuario. Si el Usuario no está satisfecho con alguna parte de la Página Web o con alguna de las condiciones de uso dispuestas en los términos y condiciones su único y exclusivo recurso consistirá en interrumpir el uso de la Página Web.

El Usuario acepta indemnizar, salvaguardar y mantener indemne a las Partes Indemnizables frente a toda reclamación o demanda, incluidos honorarios de abogados, interpuesta por terceros que se derive o surja del uso por parte del Usuario de la Página Web, del contenido de la Página Web por fuera de los presentes términos y condiciones.

14.	Seguridad. Te Tengo Que Contar usa tecnología adecuada y toma las precauciones adecuadas de seguridad para el desarrollo, operación, mantenimiento y/o uso de la Página Web. Salvo por la adopción de medidas adecuadas de seguridad, Te Tengo Que Contar no garantiza que la Página Web esté completamente blindada contra el uso inapropiado, la divulgación, la pérdida, venta, licencia, destrucción etc. de su información personal y/o archivos de su ordenador por hechos de terceros o que escapen al control de la Página Web. Es responsabilidad personal del Usuario asegurarse de que su ordenador sea adecuado y seguro y esté protegido contra soportes lógicos como los troyanos, los virus de la computadora, los programas del gusano y/o el hackeo.

15.	Acceso. La Página Web y su uso están enfocados exclusivamente para la República de Colombia, aun cuando sea accesibles por Usuarios fuera de este país.

16.	Información exacta. El Usuario acuerda proporcionar la información veraz, exacta, actual y completa que solicita Te Tengo Que Contar. El Usuario se compromete a poner al día sus datos e información para mantenerlos actualizados y exactos. Te Tengo Que Contar garantiza en todo caso la confidencialidad y el tratamiento seguro de los datos proporcionados por el Usuario.

17.	Voluntariedad. La entiende que toda la información ingresada por el Usuario es veraz y se hace de manera voluntaria.

             </textarea>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       </div>
     </div>

   </div>
 </div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" charset="utf-8"></script>

<script type="text/javascript">
  const base_url = '<?= base_url() ?>'
</script>
<script src="<?= base_url() ?>assets/js/log.js" charset="utf-8"></script>
