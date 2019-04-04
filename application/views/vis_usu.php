<?php $this->load->view('includes/add_blog') ?>

<style media="screen">
    #content-container:before {
      content: '';
      display: none;
      height: 165px;
      width: 0%;

      /* background-color: #1976d2; */

    }


    .lim{text-align: center;
    border-bottom: solid 1px #c3c3c3;
    font-size: 25px;}

</style>
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>




    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="http://127.0.0.1/estefania_blog/admin/assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="http://127.0.0.1/estefania_blog/admin/assets/css/nifty.min.css" rel="stylesheet">




    <!--DataTables [ OPTIONAL ]-->
    <link href="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">




    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
    <!-- <link id="theme" href="http://127.0.0.1/estefania_blog/admin/assets/css/themes/type-e/theme-ocean.min.css" rel="stylesheet"> -->
    <!--jQuery [ REQUIRED ]-->
    <!-- <script src="http://127.0.0.1/estefania_blog/admin/assets/js/jquery.min.js"></script>






    <script src="http://127.0.0.1/estefania_blog/admin/assets/js/nifty.min.js"></script> -->

    <script type="text/javascript">
      const url = ''
      var base_url = 'http://127.0.0.1/estefania_blog/admin/'
      const global_url = '';
    </script>


    <script src="http://127.0.0.1/estefania_blog/admin/js/propios.js"></script>



    <div id="container" class="effect aside-float aside-bright mainnav-lg mainnav-fixed navbar-fixed">





<div class="boxed">
<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container" style="    padding-top: 0;">
    <div id="mainnav">


        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <!--================================
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="http://127.0.0.1/estefania_blog/admin/assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
                <span class="brand-text">Nifty</span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>
        -->



        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">

                        <div class="profile-wrap text-center" style="padding-top:15px;">
                            <img src="<?= base_url() ?>assets/img/logo_t.png" alt="" style=" width: 160px;">
                        </div>
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                              <a href="javascript:void(0)">  <img class="img-circle img-md" src="<?= base_url() ?>assets/img/usr.jpg" alt="Profile Picture" style="width: 85%;height: 150px;"></a>
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">

                                <p class="mnp-name">0COOL</p>
                                <span class="mnp-desc">jesuscontreras102@hotmail.com</span>
                            </a>
                        </div>
                    </div>



                    <ul id="mainnav-menu" class="list-group">
                              <li class="list-divider"></li>
                              <!--Category name-->

                              <li  class="lim" id="entradas">
                                <a href="javascript:v('ent')">
                                    <!-- icono -->
                                  <span class="menu-title">
                                      Entradas
                                  </span>
                                </a>
                              </li>
                              <li  class="lim" id="noticias">
                                <a href="javascript:v('sol')">
                                    <!-- icono -->
                                  <span class="menu-title">
                                      Solicitudes
                                  </span>
                                </a>
                              </li>
                              <li  class="lim" id="categorias">
                                <a href="javascript:v('edi')">
                                    <!-- icono -->
                                  <span class="menu-title">
                                      Editar
                                  </span>
                                </a>
                              </li>
                              <li  class="lim" id="usuarios" style="position: absolute;width: 100%;color: #fff;bottom: 0;background: #ff8585;">
                                <a href="<?= base_url() ?>login/logout">
                                  <span class="menu-title">
                                      Salir
                                  </span>
                                </a>
                              </li>


                   </ul>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->



<script type="text/javascript">
  var uri = '';
  console.log(uri);
  $('#'+uri).addClass('active-sub')


</script>
  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">



               					<!-- Basic Data Tables -->
               					<!--===================================================-->
               					<div class="panel">
               					    <div class="panel-heading">
               					        <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="    margin: 17px 35px;">Escribir</button>
               					    </div>
               					    <div class="panel-body">
               					        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
               					            <thead>
               					                <tr>
               					                    <th>Name</th>
               					                    <th>Position</th>
               					                    <th class="min-tablet">Office</th>
               					                    <th class="min-tablet">Extn.</th>
               					                    <th class="min-desktop">Start date</th>
               					                    <th class="min-desktop">Salary</th>
               					                </tr>
               					            </thead>
               					            <tbody>
               					                <tr>
               					                    <td>Tiger Nixon</td>
               					                    <td>System Architect</td>
               					                    <td>Edinburgh</td>
               					                    <td>61</td>
               					                    <td>2011/04/25</td>
               					                    <td>$320,800</td>
               					                </tr>
               					                <tr>
               					                    <td>Garrett Winters</td>
               					                    <td>Accountant</td>
               					                    <td>Tokyo</td>
               					                    <td>63</td>
               					                    <td>2011/07/25</td>
               					                    <td>$170,750</td>
               					                </tr>
               					                <tr>
               					                    <td>Ashton Cox</td>
               					                    <td>Junior Technical Author</td>
               					                    <td>San Francisco</td>
               					                    <td>66</td>
               					                    <td>2009/01/12</td>
               					                    <td>$86,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Cedric Kelly</td>
               					                    <td>Senior Javascript Developer</td>
               					                    <td>Edinburgh</td>
               					                    <td>22</td>
               					                    <td>2012/03/29</td>
               					                    <td>$433,060</td>
               					                </tr>
               					                <tr>
               					                    <td>Airi Satou</td>
               					                    <td>Accountant</td>
               					                    <td>Tokyo</td>
               					                    <td>33</td>
               					                    <td>2008/11/28</td>
               					                    <td>$162,700</td>
               					                </tr>
               					                <tr>
               					                    <td>Brielle Williamson</td>
               					                    <td>Integration Specialist</td>
               					                    <td>New York</td>
               					                    <td>61</td>
               					                    <td>2012/12/02</td>
               					                    <td>$372,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Herrod Chandler</td>
               					                    <td>Sales Assistant</td>
               					                    <td>San Francisco</td>
               					                    <td>59</td>
               					                    <td>2012/08/06</td>
               					                    <td>$137,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Rhona Davidson</td>
               					                    <td>Integration Specialist</td>
               					                    <td>Tokyo</td>
               					                    <td>55</td>
               					                    <td>2010/10/14</td>
               					                    <td>$327,900</td>
               					                </tr>
               					                <tr>
               					                    <td>Colleen Hurst</td>
               					                    <td>Javascript Developer</td>
               					                    <td>San Francisco</td>
               					                    <td>39</td>
               					                    <td>2009/09/15</td>
               					                    <td>$205,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Sonya Frost</td>
               					                    <td>Software Engineer</td>
               					                    <td>Edinburgh</td>
               					                    <td>23</td>
               					                    <td>2008/12/13</td>
               					                    <td>$103,600</td>
               					                </tr>
               					                <tr>
               					                    <td>Jena Gaines</td>
               					                    <td>Office Manager</td>
               					                    <td>London</td>
               					                    <td>30</td>
               					                    <td>2008/12/19</td>
               					                    <td>$90,560</td>
               					                </tr>
               					                <tr>
               					                    <td>Quinn Flynn</td>
               					                    <td>Support Lead</td>
               					                    <td>Edinburgh</td>
               					                    <td>22</td>
               					                    <td>2013/03/03</td>
               					                    <td>$342,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Charde Marshall</td>
               					                    <td>Regional Director</td>
               					                    <td>San Francisco</td>
               					                    <td>36</td>
               					                    <td>2008/10/16</td>
               					                    <td>$470,600</td>
               					                </tr>
               					                <tr>
               					                    <td>Haley Kennedy</td>
               					                    <td>Senior Marketing Designer</td>
               					                    <td>London</td>
               					                    <td>43</td>
               					                    <td>2012/12/18</td>
               					                    <td>$313,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Tatyana Fitzpatrick</td>
               					                    <td>Regional Director</td>
               					                    <td>London</td>
               					                    <td>19</td>
               					                    <td>2010/03/17</td>
               					                    <td>$385,750</td>
               					                </tr>
               					                <tr>
               					                    <td>Michael Silva</td>
               					                    <td>Marketing Designer</td>
               					                    <td>London</td>
               					                    <td>66</td>
               					                    <td>2012/11/27</td>
               					                    <td>$198,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Paul Byrd</td>
               					                    <td>Chief Financial Officer (CFO)</td>
               					                    <td>New York</td>
               					                    <td>64</td>
               					                    <td>2010/06/09</td>
               					                    <td>$725,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Gloria Little</td>
               					                    <td>Systems Administrator</td>
               					                    <td>New York</td>
               					                    <td>59</td>
               					                    <td>2009/04/10</td>
               					                    <td>$237,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Bradley Greer</td>
               					                    <td>Software Engineer</td>
               					                    <td>London</td>
               					                    <td>41</td>
               					                    <td>2012/10/13</td>
               					                    <td>$132,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Dai Rios</td>
               					                    <td>Personnel Lead</td>
               					                    <td>Edinburgh</td>
               					                    <td>35</td>
               					                    <td>2012/09/26</td>
               					                    <td>$217,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Jenette Caldwell</td>
               					                    <td>Development Lead</td>
               					                    <td>New York</td>
               					                    <td>30</td>
               					                    <td>2011/09/03</td>
               					                    <td>$345,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Yuri Berry</td>
               					                    <td>Chief Marketing Officer (CMO)</td>
               					                    <td>New York</td>
               					                    <td>40</td>
               					                    <td>2009/06/25</td>
               					                    <td>$675,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Caesar Vance</td>
               					                    <td>Pre-Sales Support</td>
               					                    <td>New York</td>
               					                    <td>21</td>
               					                    <td>2011/12/12</td>
               					                    <td>$106,450</td>
               					                </tr>
               					                <tr>
               					                    <td>Doris Wilder</td>
               					                    <td>Sales Assistant</td>
               					                    <td>Sidney</td>
               					                    <td>23</td>
               					                    <td>2010/09/20</td>
               					                    <td>$85,600</td>
               					                </tr>
               					                <tr>
               					                    <td>Angelica Ramos</td>
               					                    <td>Chief Executive Officer (CEO)</td>
               					                    <td>London</td>
               					                    <td>47</td>
               					                    <td>2009/10/09</td>
               					                    <td>$1,200,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Gavin Joyce</td>
               					                    <td>Developer</td>
               					                    <td>Edinburgh</td>
               					                    <td>42</td>
               					                    <td>2010/12/22</td>
               					                    <td>$92,575</td>
               					                </tr>
               					                <tr>
               					                    <td>Jennifer Chang</td>
               					                    <td>Regional Director</td>
               					                    <td>Singapore</td>
               					                    <td>28</td>
               					                    <td>2010/11/14</td>
               					                    <td>$357,650</td>
               					                </tr>
               					                <tr>
               					                    <td>Brenden Wagner</td>
               					                    <td>Software Engineer</td>
               					                    <td>San Francisco</td>
               					                    <td>28</td>
               					                    <td>2011/06/07</td>
               					                    <td>$206,850</td>
               					                </tr>
               					                <tr>
               					                    <td>Fiona Green</td>
               					                    <td>Chief Operating Officer (COO)</td>
               					                    <td>San Francisco</td>
               					                    <td>48</td>
               					                    <td>2010/03/11</td>
               					                    <td>$850,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Shou Itou</td>
               					                    <td>Regional Marketing</td>
               					                    <td>Tokyo</td>
               					                    <td>20</td>
               					                    <td>2011/08/14</td>
               					                    <td>$163,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Michelle House</td>
               					                    <td>Integration Specialist</td>
               					                    <td>Sidney</td>
               					                    <td>37</td>
               					                    <td>2011/06/02</td>
               					                    <td>$95,400</td>
               					                </tr>
               					                <tr>
               					                    <td>Suki Burks</td>
               					                    <td>Developer</td>
               					                    <td>London</td>
               					                    <td>53</td>
               					                    <td>2009/10/22</td>
               					                    <td>$114,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Prescott Bartlett</td>
               					                    <td>Technical Author</td>
               					                    <td>London</td>
               					                    <td>27</td>
               					                    <td>2011/05/07</td>
               					                    <td>$145,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Gavin Cortez</td>
               					                    <td>Team Leader</td>
               					                    <td>San Francisco</td>
               					                    <td>22</td>
               					                    <td>2008/10/26</td>
               					                    <td>$235,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Martena Mccray</td>
               					                    <td>Post-Sales support</td>
               					                    <td>Edinburgh</td>
               					                    <td>46</td>
               					                    <td>2011/03/09</td>
               					                    <td>$324,050</td>
               					                </tr>
               					                <tr>
               					                    <td>Unity Butler</td>
               					                    <td>Marketing Designer</td>
               					                    <td>San Francisco</td>
               					                    <td>47</td>
               					                    <td>2009/12/09</td>
               					                    <td>$85,675</td>
               					                </tr>
               					                <tr>
               					                    <td>Howard Hatfield</td>
               					                    <td>Office Manager</td>
               					                    <td>San Francisco</td>
               					                    <td>51</td>
               					                    <td>2008/12/16</td>
               					                    <td>$164,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Hope Fuentes</td>
               					                    <td>Secretary</td>
               					                    <td>San Francisco</td>
               					                    <td>41</td>
               					                    <td>2010/02/12</td>
               					                    <td>$109,850</td>
               					                </tr>
               					                <tr>
               					                    <td>Vivian Harrell</td>
               					                    <td>Financial Controller</td>
               					                    <td>San Francisco</td>
               					                    <td>62</td>
               					                    <td>2009/02/14</td>
               					                    <td>$452,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Timothy Mooney</td>
               					                    <td>Office Manager</td>
               					                    <td>London</td>
               					                    <td>37</td>
               					                    <td>2008/12/11</td>
               					                    <td>$136,200</td>
               					                </tr>
               					                <tr>
               					                    <td>Jackson Bradshaw</td>
               					                    <td>Director</td>
               					                    <td>New York</td>
               					                    <td>65</td>
               					                    <td>2008/09/26</td>
               					                    <td>$645,750</td>
               					                </tr>
               					                <tr>
               					                    <td>Olivia Liang</td>
               					                    <td>Support Engineer</td>
               					                    <td>Singapore</td>
               					                    <td>64</td>
               					                    <td>2011/02/03</td>
               					                    <td>$234,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Bruno Nash</td>
               					                    <td>Software Engineer</td>
               					                    <td>London</td>
               					                    <td>38</td>
               					                    <td>2011/05/03</td>
               					                    <td>$163,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Sakura Yamamoto</td>
               					                    <td>Support Engineer</td>
               					                    <td>Tokyo</td>
               					                    <td>37</td>
               					                    <td>2009/08/19</td>
               					                    <td>$139,575</td>
               					                </tr>
               					                <tr>
               					                    <td>Thor Walton</td>
               					                    <td>Developer</td>
               					                    <td>New York</td>
               					                    <td>61</td>
               					                    <td>2013/08/11</td>
               					                    <td>$98,540</td>
               					                </tr>
               					                <tr>
               					                    <td>Finn Camacho</td>
               					                    <td>Support Engineer</td>
               					                    <td>San Francisco</td>
               					                    <td>47</td>
               					                    <td>2009/07/07</td>
               					                    <td>$87,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Serge Baldwin</td>
               					                    <td>Data Coordinator</td>
               					                    <td>Singapore</td>
               					                    <td>64</td>
               					                    <td>2012/04/09</td>
               					                    <td>$138,575</td>
               					                </tr>
               					                <tr>
               					                    <td>Zenaida Frank</td>
               					                    <td>Software Engineer</td>
               					                    <td>New York</td>
               					                    <td>63</td>
               					                    <td>2010/01/04</td>
               					                    <td>$125,250</td>
               					                </tr>
               					                <tr>
               					                    <td>Zorita Serrano</td>
               					                    <td>Software Engineer</td>
               					                    <td>San Francisco</td>
               					                    <td>56</td>
               					                    <td>2012/06/01</td>
               					                    <td>$115,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Jennifer Acosta</td>
               					                    <td>Junior Javascript Developer</td>
               					                    <td>Edinburgh</td>
               					                    <td>43</td>
               					                    <td>2013/02/01</td>
               					                    <td>$75,650</td>
               					                </tr>
               					                <tr>
               					                    <td>Cara Stevens</td>
               					                    <td>Sales Assistant</td>
               					                    <td>New York</td>
               					                    <td>46</td>
               					                    <td>2011/12/06</td>
               					                    <td>$145,600</td>
               					                </tr>
               					                <tr>
               					                    <td>Hermione Butler</td>
               					                    <td>Regional Director</td>
               					                    <td>London</td>
               					                    <td>47</td>
               					                    <td>2011/03/21</td>
               					                    <td>$356,250</td>
               					                </tr>
               					                <tr>
               					                    <td>Lael Greer</td>
               					                    <td>Systems Administrator</td>
               					                    <td>London</td>
               					                    <td>21</td>
               					                    <td>2009/02/27</td>
               					                    <td>$103,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Jonas Alexander</td>
               					                    <td>Developer</td>
               					                    <td>San Francisco</td>
               					                    <td>30</td>
               					                    <td>2010/07/14</td>
               					                    <td>$86,500</td>
               					                </tr>
               					                <tr>
               					                    <td>Shad Decker</td>
               					                    <td>Regional Director</td>
               					                    <td>Edinburgh</td>
               					                    <td>51</td>
               					                    <td>2008/11/13</td>
               					                    <td>$183,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Michael Bruce</td>
               					                    <td>Javascript Developer</td>
               					                    <td>Singapore</td>
               					                    <td>29</td>
               					                    <td>2011/06/27</td>
               					                    <td>$183,000</td>
               					                </tr>
               					                <tr>
               					                    <td>Donna Snider</td>
               					                    <td>Customer Support</td>
               					                    <td>New York</td>
               					                    <td>27</td>
               					                    <td>2011/01/25</td>
               					                    <td>$112,000</td>
               					                </tr>
               					            </tbody>
               					        </table>
               					    </div>
               					</div>
               					<!--===================================================-->


                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->


    <!--JAVASCRIPT-->
    <!--=================================================-->





    <!--=================================================-->





            <script src="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
          	<script src="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
          	<script src="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>





            <script type="text/javascript">


            $(document).ready( function () {

                $('#demo-dt-basic').DataTable();


              } );

            </script>
      </div>






    </div>
