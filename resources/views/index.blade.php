<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet Urgency | Servicio Veterinario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="{{route('index')}}">Horario Proximamente!</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{route('index')}}">
                                    <img src="img/logo.png" alt="" loading="lazy">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('index')}}">Inicio</a></li>
                                        <li><a href="{{route('about')}}">Acerca de</a></li>
                                        <li><a href="{{route('contact')}}">Contáctanos</a></li>
                                        <li><a href="{{route('login')}}">Iniciar sesión</a></li>
                                        <li><a href="{{route('register')}}">Registrarse</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                            <h3>Nos importa <br> <span>Tus mascotas</span></h3>
                            <BR></BR>
                            <a href="{{route('contact')}}" class="boxed-btn4">Contacta con nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="img/banner/dog.png" alt="" loading="lazy">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
      <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Servicios para mascotas domésticas</h3>
                        <p>Pida y agende su cita para tu mascota lo más pronto posible con tiempo de cancelación limitado.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_1.png" alt="" loading="lazy">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Alojamiento</h3>
                            <p>En algunos centros veterinarios hay alojamiento de mascotas.</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_2.png" alt="" loading="lazy">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Comidas saludables</h3>
                            <p>A las mascotas le ofrecen el mejor cuidado incluyendo sus alimentos.</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_3.png" alt="" loading="lazy">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Spa</h3>
                            <p>En algunos centros veterinarios hay spa para tus mascotas.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- service_area_end -->

    <!-- pet_care_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="img/about/pet_care.png" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3><span> </span> <br>
                                ¿Que hacemos?</h3>
                            <p><h4>buscamos brindar una solución por medio de una plataforma dando una mejor <br> optimización de gestión y agendamiento de<br> citas para animales,
                             asi buscando mejorar el bienestar de la mascota.</h4></p>
                                </p>
                            <a href="{{route('about')}}" class="boxed-btn3">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pet_care_area_end  -->

      <!-- adapt_area_start  -->
   
    <!--<div class="adapt_area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="adapt_help">
                        <div class="section_title">
                            <h3><span>We need your</span>
                                help Adopt Us</h3>
                            <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                            <a href="contact.html" class="boxed-btn3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="adapt_about">
                        Caja donde se cargan los numeros de los perros
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="img/adapt_icon/1.png" alt="" loading="lazy">
                                    <div class="adapt_content">
                                        <h3 class="counter">452</h3>
                                        <p>Pets Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="img/adapt_icon/3.png" alt="" loading="lazy">
                                    <div class="adapt_content">
                                        <h3><span class="counter">52</span>+</h3>
                                        <p>Pets Available</p>
                                    </div>
                                </div>
                                <div class="single_adapt text-center">
                                    <img src="img/adapt_icon/2.png" alt="" loading="lazy">
                                    <div class="adapt_content">
                                        <h3><span class="counter">52</span>+</h3>
                                        <p>Pets Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    

    



    <div class="team_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Equipo Pet Urgency</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Andres Chavéz</h4>
                                <p>Desarrollador de software</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/2.jpg" alt="" loading="lazy">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Julian Berrio</h4>
                                <p>Desarrollador de software</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="contact_anipat anipat_bg_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>¿Por qué ir con Pet Urgency?</h3>
                            <p>Porque mejoramos la experiencia de los usuarios al hacer más eficaz y fácil la forma de agendar una cita.</p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="{{route('contact')}}" class="boxed-btn4">Contacta con nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacta con nosotros
                            </h3>
                            <ul class="address_line">
                                <li>+57 12345678910</li>
                                <li><a href="contact">PetUrgency@correo.com</a></li>
                                <li>Bello - Medellín, Colombia.</li>
                            </ul>
                        </div>
                    </div>
                      <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Algunos servicios. 
                            </h3>
                            <ul class="links">
                                <li><a href="#">Vacunación de mascotas</a></li>
                                <li><a href="#">Adopción de mascotas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Otros enlaces 
                            </h3>
                            <ul class="links">
                                <li><a href="#">Sobre nosotros</a></li>
                                <li><a href="#">Política de privacidad</a></li>
                                <li><a href="#">Términos de servicio</a></li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="/">
                                    <img src="img/logo.png" alt="" loading="lazy">
                                </a>
                            </div>
                            <p class="address_text">Bello - Medellín, Colombia.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Servicio Veterinario <i class="ti-heart" aria-hidden="true"></i> por <a href="{{route('index')}}" >Pet Urgency</a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>


    <script src="static/js/contact.js"></script>
    <script src="static/js/jquery.ajaxchimp.min.js"></script>
    <script src="static/js/jquery.form.js"></script>
    <script src="static/js/jquery.validate.min.js"></script>
    <script src="static/js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>
</html>
