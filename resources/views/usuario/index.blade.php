//--BIENVENIDO A LA TABLA DE REGISTRO-----

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('usuario/create') }}"> Registrar nuevo usuario</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>
            <td>{{$usuario->id }}</td>
            <td>{{$usuario->Nombre }}</td>
            <td>{{$usuario->ApellidoPaterno }}</td>
            <td>{{$usuario->ApellidoMaterno }}</td>
            <td>{{$usuario->Correo }}</td>
            <td>
            
            <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}">
                Editar
            </a>
            
         
                <form action="{{ url('/usuario/'.$usuario->id )}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')"
                value="Borrar">


                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>

</table>