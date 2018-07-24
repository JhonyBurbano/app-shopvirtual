@extends('layouts.app')

@section('body-class', 'landing-page sidebar-collapse')

@section('styles')
    <style>
        .team .row .col-md-4{
            margin-bottom: 5em
        }

        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        .row > [class='col-'] {
            display: flex;
            flex-direction: column; 
        }

        .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
.tt-hint {
    width: 396px;
    height: 30px;
    padding: 8px 12px;
    font-size: 24px;
    line-height: 30px;
    border: 2px solid #ccc;
    border-radius: 8px;
    outline: none;
}

.tt-query { /* UPDATE: newer versions use tt-input instead of tt-query */
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
    color: #999;
}

.tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
    width: 422px;
    margin-top: 12px;
    padding: 8px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
    padding: 3px 20px;
    font-size: 18px;
    line-height: 24px;
}
    </style>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Bienvenido a nuestra tienda JENPAT.</h1>
                <h4>Realiza pedidos en linea y te contactaremos para coordinar la entrega.</h4>
                <br>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                  <i class="fa fa-play"></i> ¿Cómo funciona?
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Let&apos;s talk product</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
                </div>
            </div>
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Free Chat</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Verified Users</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Fingerprint</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section text-center">
            <h2 class="title">PRODUCTOS DISPONIBLES</h2>
            {!! Form::open(['url' => 'comun/search', 'class' => 'form-inline']) !!}
                {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' => 'Qué producto buscas?', 'id' => 'search']) !!}
                <button type="submit" rel="tooltip" title="Búsqueda de producto" class="btn btn-info btn-fab">
                    <i class="material-icons">search</i>
                </button>
            {!! Form::close() !!}
            <div class="team">
                {{-- <div class="row">
                    @foreach($productos as $producto)
                      <div class="col-md-4">
                            <div class="card">
                              <div class="card-header card-header-info">
                                <img src="{{ $producto->imagen_url }}" alt="Thumbnail Image" class="img-raised img-fluid rounded" width="250px" height="200px">
                                <h4 class="card-title"><a href="{{ url('comun/productos/' . $producto->id) }}">{{ $producto->nombre }}</a></h4>
                                <p class="category"><a href="{{ url('comun/categorias', $producto->categoria_id) }}">{{ $producto->categoria_nombre }}</a></p>
                              </div>
                              <div class="card-body">
                                {{ $producto->descripcion }}<br>
                                <small class="card-description text-muted h4">$ {{ number_format($producto->precio,'0','.','.') }}&nbsp;&nbsp;-&nbsp;&nbsp;Contado</small>
                              </div>
                            </div>
                          <div class="team-player">
                              <div class="card card-plain">
                                  <div class="col-md-6 ml-auto mr-auto">
                                      <img src="{{ $producto->imagen_url }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" width="290px" height="218px">
                                  </div>
                                  <h4 class="card-title"><a href="{{ url('comun/productos/' . $producto->id) }}">{{ $producto->nombre }}</a>
                                    <br>
                                    <small class="card-description text-muted">{{ $producto->categoria ? $producto->categoria->nombre : 'General' }}</small>
                                  </h4>
                                  <div class="card-body">
                                      <p class="card-description">{{ $producto->descripcion }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                {{ $productos->links() }}
            </div> --}}
        </div>
        <div class="section section-contacts">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Work with us</h2>
                    <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Your Name</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Your Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                            <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <button class="btn btn-primary btn-raised">
                                  Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')


@endsection
