<style>
    body {
        font-family: Arial, sans-serif;
    }

    .form-container {
        width: 400px;
        margin: 30px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        margin-top: 15px;
        padding: 8px;
        border: none;
        border-radius: 4px;
        color: white;
        cursor: pointer;
        width: 100%;
    }

    .btn-submit {
        background-color: #007bff;
    }

    .btn-regresar {
        display: block;
        text-align: center;
        margin-top: 10px;
        text-decoration: none;
        color: white;
        background-color: #6c757d;
        padding: 8px;
        border-radius: 4px;
    }
</style>


<h1>{{ $modo }} usuario</h1>

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre: '' }}" id="Nombre">
<br>
<label for="ApellidoPaterno"> Primer Apellido </label>
<input type="text" name="ApellidoPaterno" value="{{ isset($usuario->ApellidoPaterno)?$usuario->ApellidoPaterno:'' }}" id="ApellidoPaterno">
<br>
<label for="ApellidoMaterno"> Segundo Apellido </label>
<input type="text" name="ApellidoMaterno" value="{{ isset($usuario->ApellidoMaterno)?$usuario->ApellidoMaterno:'' }}" id="ApellidoMaterno">
<br>
<label for="Correo"> Correo eléctronico </label>
<input type="text" name="Correo" value="{{ isset($usuario->Correo)?$usuario->Correo:'' }}" id="Correo">
<br>
<a href="{{ url('usuario/') }}"> Regresar </a>

<br>

<input type="submit" value="{{ $modo }} datos">


<br>

