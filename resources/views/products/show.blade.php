@extends('layouts.app')

@section('title', 'producto')

@section('body-class', 'profile-page', 'sidebar-collapse')

@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('img/city-profile.jpg') }} )">
  </div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src=" {{$product->featured_image_url}} " alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title"> {{ $product->name }} </h3>
                <h6> {{$product->category->name }} </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p> Description <br> {{$product->long_description }} </p>
        </div>

        <div class="text-center">
          <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#ModalAddToCart">
            <i class="material-icons">add_shopping_cart</i> añadir al carro de compras
          </button>
        </div>

        {{-- other --}}

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Studio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Favorite
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
            @foreach ($images as $image)
            <div class="col-md-4 ml-auto mr-auto">
                <img src="{{ $image->url }}" class="rounded">
            </div>
            @endforeach
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto text-center">
                <img src="{{ $product->featured_image_url }}" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade" id="ModalAddToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seleccionar Cantidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action=" {{ url('/cart') }} " method="post">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}" >
          <div class="modal-body">
            <input type="number" name="quantity" value="1" class="form-control" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Añadir al Carrito</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @include('includes.footer')
@endsection
