@extends('layouts.app')

@section('title', 'Welcome to Pistache')

@section('body-class', 'profile-page', 'sidebar-collapse')

@section('content')

    <div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('img/profile_city.jpg') }} )">

    </div>
    <div class="main main-raised">
    <div class="container">

    <div class="section text-center">
        <h2 class="title">Registrar nuevo producto</h2>
        <form action=" {{ url('/admin/products/')}} " method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group label-floating"> <label class="control-label">Nombre del producto</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group label-floating"> <label class="control-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" name="price">
                    </div>
                </div>
            </div>
            <div class="form-group label-floating"> <label class="control-label">descripción corta</label>
                <input type="text" class="form-control" name="description">
            </div>
            <textarea name="long_description" class="form-control" rows="5" placeholder="Descripción Larga"></textarea>

            <button type="submit" class="btn btn-primary">registrar producto</button>

        </form>
    </div>

    </div>
    </div>

@include('includes.footer')

@endsection
