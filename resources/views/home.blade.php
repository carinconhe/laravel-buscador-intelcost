<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assest/css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="assest/css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="assest/css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="assest/css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="assest/css/index.css"  media="screen,projection"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario</title>
  <script>
        let ajaxUrl = "{{ url('/') }}";
  </script>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <video src="img/video.mp4" id="vidFondo"></video>

  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="#" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            {!! Form::select('selectCiudad', $cities,0,['id' => 'selectCiudad']) !!}
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            {!! Form::select('selectTipo', $types,3,['id' => 'selectTipo']) !!}
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
        <li><a href="#tabs-2">Mis bienes</a></li>
      </ul>
      <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Resultados de la búsqueda: <span id="count"></span></h5>
            
            <div id="results" class="row row-cols-1">
              @foreach ($items as $item)
                <article class="itemMostrado col-lg-4 col-md-6 col-12">
                  <div class="content-item p-1">
                      <figure>
                        <img class="img-fluid" src="{{ url('assest/img/home.jpg') }}" />
                      </figure>
                  </div>
                  <div class="info">
                    
                    <p>
                      Dirección: {{$item['Direccion']}}<br>
                      Ciudad: {{$item['Ciudad']}}<br>
                      Teléfono: {{$item['Telefono']}}<br>
                      Código postal: {{$item['Codigo_Postal']}}<br>
                      Tipo: {{$item['Tipo']}}<br>
                      Precio: {{$item['Precio']}}
                  </p>
                  </div>
                </article>
                <div class="divider"></div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Bienes guardados:</h5>
            <div class="divider"></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="assest/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="assest/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="assest/js/materialize.min.js"></script>
    <script type="text/javascript" src="assest/js/index.js"></script>
    <script type="text/javascript" src="assest/js/buscador.js"></script>
    <script type="text/javascript" src="assest/js/jquery-ui.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
          $( "#tabs" ).tabs();
      });
    </script>
  </body>
  </html>
