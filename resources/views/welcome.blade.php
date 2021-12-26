@extends('layouts.app')

@section('title', 'Welcome to Pistache')

@section('body-class', 'landing-page', 'sidebar-collapse')

@section('content')

    <div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('img/profile_city.jpg') }} )">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <h1 class="title">Welcome to Pistache: The most interesting site to buy.</h1>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ratione omnis dolorum quidem eaque sit, vitae, nesciunt blanditiis impedit qui pariatur earum saepe dolorem. Id exercitationem sequi atque blanditiis maiores!</h4>
        <br>
        <a href="#" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Press Starp to play!
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
            <h2 class="title">What about Pistache</h2>
            <h5 class="description"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae voluptatum qui cupiditate fugiat dolore iusto voluptatibus tenetur officiis placeat, quidem expedita soluta sit asperiores ut debitis, obcaecati dolorem possimus vel. </h5>
        </div>
        </div>
        <div class="features">
        <div class="row">
            <div class="col-md-4">
            <div class="info">
                <div class="icon icon-info">
                <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Atencion 24/7</h4>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt officia dolorum amet eveniet. Consequatur fugit mollitia provident cupiditate numquam, aspernatur dolores esse porro sed sapiente expedita architecto pariatur qui tempora. </p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="info">
                <div class="icon icon-success">
                <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Safe Payment</h4>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae voluptate ut aliquam necessitatibus eos? Odio unde molestias praesentium beatae quasi, enim cum, eaque, harum illo voluptatem sit ducimus sint. Earum? </p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="info">
                <div class="icon icon-danger">
                <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Data Security</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nihil laudantium reprehenderit dicta veritatis aut, velit eos adipisci debitis in animi illo totam excepturi cum necessitatibus aliquam, inventore sunt libero.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="section text-center">
        <h2 class="title">Products</h2>
        <div class="team">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
            <div class="team-player">
                <div class="card card-plain">
                <div class="col-md-6 ml-auto mr-auto">
                    <img src=" {{ $product->featured_image_url }} " alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                </div>
                <h4 class="card-title">
                    <a href=" {{ url('/products/'.$product->id) }} ">{{ $product->name }}</a>
                    <br>
                    <small class="card-description text-muted">{{ $product->category->name }}</small>
                </h4>
                <div class="card-body">
                    <p class="card-description"> {{ $product->description }} </p>
                </div>
                <div class="card-footer justify-content-center">

                </div>
                </div>
            </div>
            </div>
            @endforeach
            </div>
            <div class="text-center">
                {{ $products->links() }}
            </div>
        </div>
        </div>
    </div>
    <div class="section section-contacts">
        <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Contact with us</h2>
            <h4 class="text-center description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt a fugiat rerum doloribus ab sed, molestiae repellendus dolorem totam optio eveniet voluptates ducimus? Obcaecati fuga accusamus nisi laborum quidem sequi! </h4>
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
