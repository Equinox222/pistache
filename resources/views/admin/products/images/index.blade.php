@extends('layouts.app')

@section('title', 'Imagenes de productos')

@section('body-class', 'profile-page', 'sidebar-collapse')

@section('content')

    <div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('img/profile_city.jpg') }} )">

    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title"> "{{$product->name}}" Product Images</h2>

            <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="file" name="photo" id="" required>
                    <button href=" {{ url('/admin/products/create') }} " class="btn btn-primary btn-round">New Image</button>
                    <a href=" {{ url('/admin/products/') }} " class="btn btn-default btn-round">Back</a>
                </form>

                <hr>

                <div class="row">
                @foreach ($images as $image)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src=" {{ $image->url }} " alt="Image" width="250" height="250">
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="image_id" value=" {{ $image->id }} ">
                                    <button href=" {{ url('/admin/products/create') }} " class="btn btn-warning btn-round">Delete Image</button>
                                    @if ($image->featured)
                                    <button type="button" class="btn btn-danger btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen Destacada actual">
                                        <i class="material-icons">favorite</i>
                                    </button>
                                    @else
                                    <a href=" {{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                        <i class="material-icons">favorite</i>
                                    </a>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@include('includes.footer')

@endsection
