@extends('layout.app')

@section('title')<title>FRUTERIA - CONTACTO</title>@endsection

@section('header')
@section('link1')<a href="{{route('landing.index') }}" class="nav-link">INICIO</a>@endsection
@section('link2')<a class="nav-link" href="{{route('landing.acercade')}}" >ACERCA DE</a>@endsection
@section('link3')<a href="{{ route('landing.servicios') }}" class="nav-link">SERVICIOS
</a>@endsection
@endsection

@section('content')
    <br>
    <div class="container">

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Contacto!</h4>
            <p>
                 <a href="">Plaza trinidad Galán</a> <br


            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Sucursales!</h4>
            <p>
                Galán: carerra  64 # 4B - 24 <br>
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Contacto!</h4>
            <p>
                Galán: 3132870042
                Administrador:Julieth Astrid Hernandez Caballero<br>
            </p>
            <hr>
        </div>
    </div>
@endsection
