@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city-profile.jpg') }}');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{ $producto->imagen_url }}" alt="Circle Image" class="img-raised rounded img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">{{ $producto->nombre }}</h3>
                            <h6>{{ $producto->categoria ? $producto->categoria->nombre : 'General'  }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center">
              <p>{{ $producto->long_descripcion }}</p>
            </div>
            
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                            @foreach($imagesLeft as $image)
                              <img src="{{ $image->image }}" class="rounded">
                            @endforeach
                        </div>
                        <div class="col-md-3 mr-auto">
                            @foreach($imagesRight as $image)
                              <img src="{{ $image->image }}" class="rounded">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')

@endsection