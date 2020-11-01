@extends('layout.app')

@section('title')<title>FRUTERIA </title>@endsection

@section('header')
@section('link1')<a class="nav-link" href="{{route('landing.index')}}" >INICIO</a>@endsection
@section('link2')<a href="{{ route('landing.servicios') }}" class="nav-link">SERVICIOS</a>@endsection
@section('link3')<a href="{{route('landing.contacto') }}" class="nav-link">CONTACTO</a>@endsection
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">----</h4>
            <p>
                Nuestra misión es satisfacer las necesidades de
                todos nuestros clientes y  partner así como
                también de nuestros  trabajadores, con el
                objetivo de maximizar la eficiencia y optimizar la rentabilidad a través de nuestra  diferenciación
                en calidad de producto, servicio y precio.<br>
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Vision</h4>
            <p>Nuestra visión es conseguir la fidelización
                de nuestros clientes a través de comercialización
                de productos de calidad, a partir de la cual
                afianzar un crecimiento progresivo y sostenido
                en el mercado nacional y europeo consolidando nuestra
                posición como empresa de referencia en el sector
                con una imagen corporativa propia y diferenciada de sus competidores. Frutas Terrados trabaja para conseguir la máxima calidad, un catálogo de productos diversificado
                y el mejor servicio al precio más competitivo</p>
            <hr>
        </div>
    </div>
@endsection
