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
            Modificar Personal
        </div>
        <div class="flex-center position-ref full-height">
            <form action="{{route ('ModificarPersonalstore2')}}" method="post" >
            {{csrf_field()}}
            <div class="content">
                <div >
                    <label>Seleccione el evento a modificar</label>
                     <select class="form-control" name="eventos[]">
   
                        <option>Ningún Evento</option>
                            @foreach ($eventos as $key => $value)
                                <option value="{{ $key }}"> 
                                    {{ $key.' '.$value }} 
                                </option>
                            @endforeach
                      </select>
                </div>
            </div>
             </br>
                    </br>
            <input type="hidden" name='dni' value="{{$dni}}"></input>
            <div>
                <label>
                    <select class="form-control" name="rol[]">
                        <option value="administrador"> administrador <option>
                        <option value="colaborador"> colaborador <option>
                    </select>
                    </br>
                    </br>
                </label>
            </div>

            <button type="submit">Modificar</button>
            </form>
        </div>

    </body>
    
@endsection
