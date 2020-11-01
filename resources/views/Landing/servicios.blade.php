@extends('layout.app')

@section('title')<title>FRUTERIA - SERVICIOS</title>@endsection

@section('header')
@section('link1')<a href="{{ route('landing.index') }}" class="nav-link">INICIO</a>@endsection
@section('link2')<a class="nav-link" href="{{route('landing.acercade')}}" >ACERCA DE</a>@endsection
@section('link3')<a href="{{route('landing.contacto') }}" class="nav-link">CONTACTO</a>@endsection
@endsection


@section('content')
    <br>
    <div class="container">

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">costo!</h4>
            <p>
                El costo del domicilio no tiene recargo.
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Horario!</h4>
            <p>
               Horario de atencion al publico es de lunes a miercoles de 8:00 am a 5:00 pm <br>
                jueves  de 8:00 am a 2:00 pm <br>
                los domingos y festivos es de: 8:00 am a 5:000 pm. <br>
            </p>
            <hr>
        </div>
    </div>
@endsection
