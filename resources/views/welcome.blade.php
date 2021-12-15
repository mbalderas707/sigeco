@extends('layout')

@section('content')
<div class="jumbotron">
  <h1>Prototipo Autenticación (PHP - Graph)</h1>
  <p class="lead">Este prototipo muestra como utilizar la API de Microsoft Graph para acceder a los datos de usuario desde PHP.</p>
  @if(isset($userName))
    <h4>Bienvenido {{ $userName }}!</h4>
    <p>Usa la barra de navegación para comenzar.</p>
  @else
    <a href="/signin" class="btn btn-primary btn-large">Presiona aqui para iniciar sesión.</a>
  @endif
</div>
@endsection