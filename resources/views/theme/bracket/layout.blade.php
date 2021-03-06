<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="INTERMODAL LDCI - AGENTE DE CARGA, COURIER Y ADUANA">
    <meta name="author" content="kennysaenz31@gmail.com">

    <title>@yield('titulo','inicio')-INTERMODAL LDCI</title>
    <link rel="icon" href="{{asset("assets/bracket/Logo-Intermodal.ico")}}" >
    <link rel="stylesheet" href="{{asset("assets/bracket/css/bracket.css")}}" >
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset("assets/bracket/lib/font-awesome/css/font-awesome.css")}}" >
    <link rel="stylesheet" href="{{asset("assets/bracket/lib/Ionicons/css/ionicons.css")}}"  >
    <link rel="stylesheet" href="{{asset("assets/bracket/lib/perfect-scrollbar/css/perfect-scrollbar.css")}}"  >
    <link rel="stylesheet" href="{{asset("assets/bracket/lib/jquery-switchbutton/jquery.switchButton.css")}}"  >
    <link rel="stylesheet" href="{{asset("assets/bracket/lib/rickshaw/rickshaw.min.css")}}"  >
  
    
     <!-- Core CSS -->
     <link rel="stylesheet" href="{{asset("LDCI/Core/alertify.default.css")}}"  >
     <link rel="stylesheet" href="{{asset("LDCI/Core/alertify.core.css")}}"  >
     <link rel="stylesheet" href="{{asset("LDCI/Core/core.css")}}"  >
     <link rel="stylesheet" href="{{asset("LDCI/Core/jquery-ui.min.css")}}"  >
 
    
  </head>
  <body>
     <!--Inicio Header -->
     @include('InicioSesion/editarUsuario')
     @include('theme/bracket/Header')
     @include('theme/bracket/tabpanel')
     <!--Fin-->
     <!--Inicio Aside -->
     @include('theme/bracket/aside')
     <!--Fin -->

     <!--INICIO CONTENEDOR CARGANDO-->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!--FIN CONTENEDOR CARGANDO-->

    <div class="br-mainpanel">
            <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
            </div><!-- d-flex -->
                <!--body -->
            <div class="br-pagebody mg-t-5 pd-x-30">
 
            <div class="br-mainpanel">
              @section('contenido')<!-- Agrega contenido desde otra vista--> 

              @show  
            </div><!-- br-mainpanel -->

            </div><!--body -->
            <footer class="br-footer">
                <div class="footer-left">
                    <div class="mg-b-2">Copyright - 2020. LDCI. All Rights Reserved.</div>
                </div>
            </footer>
    </div><!-- br-mainpanel -->


    <script src="{{asset("assets/bracket/lib/jquery/jquery.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/popper/popper.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/bootstrap/bootstrap.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/moment/moment.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/jquery-ui/jquery-ui.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/jquery-switchbutton/jquery.switchButton.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/peity/jquery.peity.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/jquery.sparkline.bower/jquery.sparkline.min.js")}}" ></script>
    <script src="{{asset("assets/bracket/lib/d3/d3.js")}}" ></script>


    <script src="{{asset("assets/bracket/js/bracket.js")}}" ></script>
    <script src="{{asset("assets/bracket/js/ResizeSensor.js")}}" ></script>
      
    <!-- js Core-->
      <script src="{{asset("LDCI/Core/jquery.waiting.js")}}" ></script>
      
      <script src="{{asset("LDCI/Core/alertify.min.js")}}" ></script>
      <script src="{{asset("LDCI/Core/core.js")}}" ></script>
    


  </body>
</html>