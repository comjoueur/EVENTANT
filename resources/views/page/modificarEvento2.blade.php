@extends('master.layoutAdmin')
@section('content')
  <body>
    <style>
        .popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
        <div class="content">
            Eventos
        </div>
        <div class="flex-center position-ref full-height">
        <form action="{{route ('ModificarEventostore2')}}" method="post" >
        {{csrf_field()}}
        <div>
            <div>
            <label>Nombre   </label>
            </div>
            <input name="nombre" value="{{$nombre}}"> </input>
            <input type="hidden" name="id_evento" value={{$id_evento}}></input>
        </div>
        <div>
        </br>
            <div>
             <label>Fecha </label>
             </div>
             <input type="date" name="fecha" value={{$fecha}}></input>
        </div>
        </br>
        <div>
            <div><label>Hora</label></div>
            <input type ="time" name="hora" value={{$hora}}></input>
        </div>
        </br>
        <div>
            <div><label>Lugar</label></div>
            <input name="lugar" value="{{$lugar}}"></input>
        </div>

       
        </br>
        <button type="submit" class="popup" onclick="myFunction()"> Modificar Evento<span class="popuptext" id="myPopup">Información Guardada</span></button>

        </form>
        <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
        </div>
        </script>
    </body>
 @endsection
