@extends('layouts.app')
@section('title')
    Cars - DL Laravel
@endsection
@section('hero')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('images/bg_2.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Cars <i class="ion-ios-arrow-forward"></i></span>
                        <span>Update <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <form action="/cars/{{ $car->id }}" method="POST">
                @csrf
                @method('PUT')
                <label class="col-6">
                    <h2 class="justify-center">Update Car</h2>
                </label>
                <div class="form-group row">
                    <label class="col-2"></label>
                    <div class="col-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="name" name="name" value="{{ $car->name }}" type="text"
                                required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2"></label>
                    <div class="col-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar-minus-o"></i>
                                </div>
                            </div>
                            <input id="founded" name="founded" value="{{ $car->founded }}" type="number"
                                required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2"></label>
                    <div class="col-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-usd"></i>
                                </div>
                            </div>
                            <input id="price" name="price" type="number" value="{{ $car->price }}" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2"></label>
                    <div class="col-10">
                        <textarea id="description" name="description" cols="40" rows="5" required="required" class="form-control">{{ $car->description }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-2 col-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
