@extends('layouts.app')

@section('title', 'Tienda | Dashboard')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
    <div class="container">
        <div class="row">
            <h2 class="title">DASHBOARD</h2>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section"> 
            @include('includes.notificaciones')
            <ul class="nav nav-pills nav-pills-icons" role="tablist">
                <!--
                    color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                -->
                <li class="nav-item">
                    <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard</i>
                        Carrito de Compras
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Pedidos Realizados
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="dashboard-1">
                    @php
                        $count = auth()->user()->cart->details->count();
                    @endphp
                    <p>Tu carrito de compras presenta {{ $count }} {{ $count === 1 ? "producto" : "productos" }}.</p>
                    <table class="table table-condenced">
                        <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-image"></i></th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>SubTotal</th>
                                <th colspan="4" class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(auth()->user()->cart->details as $detail)
                            <tr>
                                <td class="text-center"><img src="{{ $detail->producto->imagen_url }}" height="50px"></td>
                                <td><a href="{{ url('comun/productos/'. $detail->producto->id) }}" target="_blank">{{ $detail->producto->nombre }}</a></td>
                                <td>$ {{ $detail->producto->precio }}</td>
                                <td> {{ $detail->cantidad }}</td>
                                <td>$ {{ $detail->cantidad * $detail->producto->precio }}</td>
                                <td>
                                    <a href="{{ url('comun/productos/'. $detail->id) }}" rel="tooltip" title="Ver producto" class="btn btn-info btn-fab btn-fab-mini" target="_blank">
                                            <i class="fa fa-info"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['url' => '/cart/'. $detail->id, 
                                        'method' => 'DELETE']) !!}
                                        <button type="submit" rel="tooltip" title="Eliminar producto del carrito" class="btn btn-danger btn-fab btn-fab-mini">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>  
                        @endforeach
                        </tbody>
                    </table>
                    {!! Form::open(['url' => '/order']) !!}                   
                        <button type="submit" class="btn btn-primary btn-round">
                          <i class="material-icons">done</i> Realizar Pedido
                        </button>
                    {!! Form::close() !!}
                </div>
                <div class="tab-pane" id="tasks-1">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                </div>
            </div>

        </div>
    </div>
</div>

@include('includes.footer')

@endsection
