@extends ("layout")
@section("menu")

@endsection

@section("contenido")
    <form action="{{route('asigna_roles')}}" method="POST">
        @csrf
        <div class ="flex flex-row text-blue-700 px-3 text-3xl justify-center">
        <label  for="usuario">Selecciona un usuario</label>
        <select name="usuario" id="usuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->name}}">{{$usuario->name}}</option>
            @endforeach
        </select>
        <br />
        <label for="rol">Selecciona  roles a asignar</label>
            <div class = "div div-col justify-start">

            @foreach($roles as $rol)
                <input type="checkbox"  id='rol' name=rol[] value="{{$rol->name}}" />{{$rol->name}}<br />
            @endforeach
            </div>

        </div>
    <h1>Permisos Dispibles</h1>
    @foreach($permisos as $permiso)
        <h2>{{$permiso->name}}</h2>
    @endforeach

        <input type="submit" value="Asigar">
    </form>
@endsection

