@extends('layouts.app')

@section('title', 'Pistache | Dashboard')

@section('body-class', 'profile-page', 'sidebar-collapse')

@section('content')

    <div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('img/profile_city.jpg') }} )">

    </div>
    <div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Dashboard</h2>
         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <ul class="nav nav-pills nav-pills-icons" role="tablist">
            <!--
                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
            -->
            <li class="nav-item active">
                <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                    <i class="material-icons">shopping_cart</i>
                    Carro de Compras
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                    <i class="material-icons">reorder</i>
                    Pedidos Realizados
                </a>
            </li>
        </ul>

        <div class="tab-content tab-space">
            <div class="tab-pane active" id="dashboard-1">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="col-md-2">Name</th>
                        <th class="text-right">Price</th>
                        <th class="text-right col-md-2">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (auth()->user()->cart->details as $detail)
                    <tr>
                        <td class="text-center">
                            <img src="{{ $detail->product->featured_image_url }}" alt="featured image" height="50px" >
                        </td>
                        <td>
                            <a href=" {{ url('products/'.$detail->product->id)}} ">{{ $detail->product->name }}</a>
                        </td>
                        <td class="text-right">€ {{ $detail->product->price }}</td>
                        <td class="td-actions text-right">
                            <form action="{{ url('/admin/products/'.$detail->product->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <a href="{{ url('products/'.$detail->product->id)}}" target="_blank" rel="tooltip" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-info"></i>
                                </a>
                                <button type="submit" rel="tooltip" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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
