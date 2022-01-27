@extends('estatico')

@section('contenido')
<h1 class="text-center">Detalles chollo</h1>
<form action="{{ route('crearChollo') }}" class="w-50 m-auto" method="POST">
    @csrf
    {{ route('crearChollo') }}
    <div class="form-row">
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <div class="form-group col-md-6">
            <input type="text" name="titulo" class="form-control" placeholder="Titulo del chollo" autofocus>
                <select name="categoria" class="form-control">
                    <option value="electronica">Electrónica</option>
                    <option value="moda">Moda</option>
                    <option value="hogar">Hogar</option>
                    <option value="cuidadoPersonal">Cuidado Personal</option>
                    <option value="alimentacion">Alimentación</option>
                    <option value="deporte">Deportes</option>
                </select>
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="url" id="url" placeholder="Url del chollo" class="form-control">
            <div class="form-control">
                <input type="radio" name="puntuacion" id="1" value="1">1
                <input type="radio" name="puntuacion" id="2" value="2">2
                <input type="radio" name="puntuacion" id="3" value="3">3
                <input type="radio" name="puntuacion" id="4" value="4">4
                <input type="radio" name="puntuacion" id="5" value="5">5
                <input type="radio" name="puntuacion" id="6" value="6">6
                <input type="radio" name="puntuacion" id="7" value="7">7
                <input type="radio" name="puntuacion" id="8" value="8">8
                <input type="radio" name="puntuacion" id="9" value="9">9
                <input type="radio" name="puntuacion" id="10" value="10">10
            </div>
        </div>
        <div class="form-group col-md-6">
            <input type="number" name="precio" id="precio" step="0.01" class="form-control" placeholder="Precio anterior">
            <input type="number" name="precio_descuento" id="precio_descuento" step="0.01"class="form-control" placeholder="Precio rebajado" >
        </div>
        
        
        <div class="form-group col-md-6"><input type="file" name="imagen" id="imagen" placeholder="Imagen del chollo" class="form-control">
            <select name="disponible" id="disponible" class=" form-control">
                <option value="true">Disponible</option>
                <option value="false">No Disponible</option>
            </select>
        </div>

        <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción del chollo" class="form-control mb-2"></textarea>
    </div>
        <button class="btn btn-primary btn-block btn-enviar w-50 ml-auto mr-auto mb-5" type="submit">
        Crear chollo
        </button>
    </form>
@endsection