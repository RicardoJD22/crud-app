//--BIENVENIDO A LA TABLA DE REGISTRO-----

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 80%;
        margin: 20px auto;
    }

    .titulo {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn {
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 4px;
        color: white;
        font-size: 14px;
    }

    .btn-crear {
        background-color: #007bff;
    }

    .btn-editar {
        background-color: #f0ad4e;
    }

    .btn-borrar {
        background-color: #d9534f;
        border: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    th {
        background-color: #333;
        color: white;
        padding: 10px;
    }

    td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .acciones {
        display: flex;
        justify-content: center;
        gap: 5px;
    }

    .mensaje {
        background-color: #d4edda;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #c3e6cb;
        color: #155724;
    }
</style>


@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('usuario/create') }}"> Registrar nuevo usuario</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>ID</th>
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