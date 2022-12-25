@extends('layouts.app')
@section('title')
    Cars - DL Laravel
@endsection
@section('hero')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('images/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Car Details</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="img rounded">
                            <img class="img rounded" src="{{ asset('images/' . $car->image_path) }}">
                        </div>
                        <div class="text text-center">
                            <span class="subheading">Founded: {{ $car->founded }}</span>
                            <h2>{{ $car->name }}</h2>
                            <p class="price ml-auto text-primary">${{ $car->price }} <span>/day</span></p>

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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-dashboard"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Mileage
                                        <span>40,000</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-pistons"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Transmission
                                        <span>Manual</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-car-seat"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Seats
                                        <span>5 Adults</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-backpack"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Luggage
                                        <span>4 Bags</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-diesel"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Fuel
                                        <span>Petrol</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                        role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <div class="row">
                                    @foreach ($car->carModels as $model)
                                        @foreach ($car->carFeatures as $feature)
                                            @if ($model->id == $feature->model_id)
                                                <div class="col-md-4">
                                                    <ul class="features">
                                                        @if ($feature['aircondition'] == 'on')
                                                            <li class="check"><span
                                                                    class="ion-ios-checkmark"></span>Airconditions</li>
                                                        @else
                                                            <li class="remove"><span
                                                                    class="ion-ios-close"></span>Airconditions</li>
                                                        @endif
                                                        @if ($feature['child_seat'] == 'on')
                                                            <li class="check"><span
                                                                    class="ion-ios-checkmark"></span>Child Seat</li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Child
                                                                Seat</li>
                                                        @endif
                                                        @if ($feature['gps'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>GPS
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>GPS</li>
                                                        @endif
                                                        @if ($feature['luggage'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Luggage
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Luggage</li>
                                                        @endif
                                                        @if ($feature['music'] == 'on')
                                                            <li class="check"><span
                                                                    class="ion-ios-checkmark"></span>Music</li>
                                                        @else
                                                            <li class="remove"><span
                                                                    class="ion-ios-close"></span>Music</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="features">
                                                        @if ($feature['seat_belt'] == 'on')
                                                            <li class="check"><span
                                                                    class="ion-ios-checkmark"></span>Seat Belt</li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Seat Belt</li>
                                                        @endif
                                                        @if ($feature['sleeping_bag'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Sleeping Bag
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Sleeping Bag</li>
                                                        @endif
                                                        @if ($feature['watter'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Watter
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Watter</li>
                                                        @endif
                                                        @if ($feature['bluetooth'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Bluetooth</li>
                                                        @endif
                                                        @if ($feature['on_board_computer'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>On Board Computer
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>On Board Computer</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="features">
                                                        @if ($feature['audio_input'] == 'on')
                                                            <li class="check"><span
                                                                    class="ion-ios-checkmark"></span>Audio Input</li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Audio Input</li>
                                                        @endif
                                                        @if ($feature['car_kit'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Car Kit
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Car Kit</li>
                                                        @endif
                                                        @if ($feature['remote_control_locking'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Remote Control Locking
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Remote Control Locking</li>
                                                        @endif
                                                        @if ($feature['climate_control'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Climate Control
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Climate Control</li>
                                                        @endif
                                                        @if ($feature['long_term_trips'] == 'on')
                                                            <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips
                                                            </li>
                                                        @else
                                                            <li class="remove"><span class="ion-ios-close"></span>Long Term Trips</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab">
                                <p>{{ $car->description }}</p>
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (98%)
                                                    </span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (85%)
                                                    </span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (70%)
                                                    </span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (10%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (0%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-2">
                    <h2 class="mb-2">Related Cars</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($r_cars as $r_car)
                    @if ($car->id != $r_car->id)
                        <div class="col-md-4">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end">
                                    <img class="img rounded" src="{{ asset('images/' . $car->image_path) }}">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="/cars/{{ $r_car->id }}">{{ $r_car->name }}</a>
                                    </h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Founded: {{ $r_car->founded }}</span>
                                        <p class="price ml-auto">${{ $r_car->price }} <span>/day</span></p>
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
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Book
                                            now</a> <a href="/cars/{{ $r_car->id }}"
                                            class="btn btn-secondary py-2 ml-1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
