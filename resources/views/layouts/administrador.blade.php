<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>MicoPress</title>

    <!-- hola -->



    <!-- holaaaa-->
    
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                MicoPress <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="imagenes/diner.jpg" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Hola</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="abono" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Abono</a>
                    </li>

                    <li>
                        <a href="prestamos" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Prestamo</a>

                    </li>

                    <li>
                        <a href="prestamista" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Prestamista</a>
                    </li>

                    <li>
                        <a href="periodo" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Periodo</a>
                    </li>


                    <li>
                        <a href="empleado" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Empleado</a>
                    </li>
                    
                    
                    
                  
                </ul>
            </div>  
        </div>  
    </section>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="imagenes/diner.jpg" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">Michelly Canul</li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>
            </ul>   
        </div>

        <!-- Notifications area -->
        <section class="z-depth-3 NotificationArea">
            <div class="full-width center-align NotificationArea-title">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>Nuevo Usuario</strong> 
                        <br>
                        <small>Justo ahora</small>
                    </p>
                </div>
            </a>  
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>Nueva actualizacion</strong> 
                        <br>
                        <small>30 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>Archive descargados</strong> 
                        <br>
                        <small>31 Mins Ago</small>
                    </p>
                </div>
            </a> 
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Mail</strong> 
                        <br>
                        <small>37 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>Folder delete</strong> 
                        <br>
                        <small>1 hours Ago</small>
                    </p>
                </div>
            </a>  
        </section>

        <div class="row">
            <!-- Tiles -->
            <article class="col s12">
                <div class="full-width center-align" style="margin: 40px 0;">
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-mail-send"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">77</span>
                            <p class="center-align">Nuevos Usuarios</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-shopping-cart"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">99</span>
                            <p class="center-align">Abonos</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-card"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">17</span>
                            <p class="center-align">Periodos</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                </div>   
            </article>
<section class="content container-fluid">

      @yield('contenido')
      

    </section>
            <!-- Timeline -->
            
        </div>

        <!-- Footer -->   
        <footer class="footer-MaterialDark">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">¿Quienes somos?</h5>
                        <p class="grey-text text-lighten-4">
                            Somos una empresa dedicada al trabajo honesto,
                            buscamos la satisfaccion del cliente y de sus clientes.
                            este sistema de prestamos es una buena opcion al querer comenzar una pequeña empresa.
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Tecnologias</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Materialize</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://zavoloklom.github.io/material-design-iconic-font/icons.html"></a></li>
                            <li><a class="grey-text text-lighten-3" href="http://t4t5.github.io/sweetalert/">Sweet Alert</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://manos.malihu.gr/jquery-custom-content-scroller/"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2016 Michelly Concepcion Canul cutz
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>