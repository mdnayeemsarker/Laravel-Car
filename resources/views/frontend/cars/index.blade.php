@extends('layouts.app')
@section('title')
    Cars - DL Laravel
@endsection
@section('hero')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index.html">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Cars <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-3 bread">Choose Your Car</h1>
                    <h3 class="mb-3 bread"><a href="cars/create">Add New Cars</a></h3>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                @foreach ($cars as $car)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end">
                                <img class="img rounded d-flex align-items-end" src="{{ asset('images/' . $car->image_path) }}">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="/cars/{{ $car->id }}">{{ $car->name }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Founded: {{ $car->founded }}</span>
                                    <p class="price ml-auto">${{ $car->price }} <span>/day</span></p>
                                </div>
                                <div class="d-flex mb-3">
                                    <span class="text-warning">Models:</span>
                                    @forelse ($car->carModels as $model)
                                        <span class="text-danger">
                                            {{ $model['model_name'] }},
                                        </span>
                                    @empty
                                        <span class="text-danger">Nothing to found</span>
                                    @endforelse
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a href="#" class="btn btn-primary mr-1">Book now</a>
                                    <a href="/cars/{{ $car->id }}" class="btn btn-secondary mr-1">Details</a>
                                    <a href="/cars/{{ $car->id }}/edit" class="btn btn-warning mr-1">Edit</a>
                                <form action="/cars/{{ $car->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input  class="btn btn-danger mt-2" type="submit" value="Delete">
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
