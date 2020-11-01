@extends('layout.app')

@section('title')<title>FRUTERIA JAHC</title>@endsection

@section('header')
    @section('link1')<a class="nav-link" href="{{route('landing.acercade')}}" >ACERCA DE</a>@endsection
    @section('link2')<a href="{{ route('landing.servicios') }}" class="nav-link">SERVICIOS</a>@endsection
    @section('link3')<a href="{{route('landing.contacto') }}" class="nav-link">CONTACTO</a>@endsection
@endsection


@section('content')
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/papaya.jpg')}}" class="d-block w-100" width="50"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Papaya</h5>
                    <p>Su fruto se conoce comúnmente como papaya, papayón, olocotón, papayo, mamón, lechosa o lechoza</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/uva.jpg')}}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MANZANAS</h5>
                    <p>Contiene todas las vitaminas del grupo B y,
                        especialmente es rica en vitamina B6, de gran importancia para el sistema nervioso.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/naranja.jpg') }}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NARANJA</h5>
                    <p>es una fruta cítrica obtenida del naranjo dulce (Citrus × sinensis),
                        del naranjo amargo (Citrus × aurantium) y de naranjos de otras variedades.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/melon.jpg')}}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MELONES</h5>
                    <p> es una especie de la familia de las cucurbitáceas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/uvas.jpg')}}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>UVAS</h5>
                    <p>es la común denominación que reciben los frutos formados en los
                        racimos de la vid. Usada mundialmente para su fermentación,
                        ya que esta da lugar al vino.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/sandia.jpg')}}" class="d-block w-100" width="350"alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SANDIA</h5>
                    <p>es una especie de la familia Cucurbitaceae
                        originaria de África, pero tiene una gran
                        presencia y difusión en Asia.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/mora.jpg')}}" class="d-block w-100" width="350"alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MORA</h5>
                    <p>Las moras son frutas o bayas que, a pesar de proceder de especies vegetales
                        que son completamente diferentes, poseen aspecto similar y características comunes</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/lulo.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>lulo</h5>
                    <p>es una planta perenne subtropical del noroeste de América del Sur. Su fruta es conocida como
                        naranjilla en Ecuador, Panamá y Costa Rica; mientras en Colombia,
                        Venezuela, República Dominicana y México, sobre su zona sur, es conocida como lulo.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
