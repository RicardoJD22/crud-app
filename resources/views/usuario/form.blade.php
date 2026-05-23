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
<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('usuario/') }}"> Regresar </a>

<br>

