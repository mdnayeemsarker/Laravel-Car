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
                        <span>Create <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <form action="/cars" method="POST">
                @csrf
                <label class="col-6">
                    <h2 class="justify-center">Create a new Car</h2>
                </label>
                <div class="form-group row">
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="name" name="name" placeholder="Brand Name..." type="text"
                                aria-describedby="nameHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="nameHelpBlock" class="form-text text-muted">Maruti</span>
                    </div>
                    
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="model_name" name="model_name" placeholder="Model Name..." type="text"
                                aria-describedby="model_nameHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="model_nameHelpBlock" class="form-text text-muted">like: A1</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar-minus-o"></i>
                                </div>
                            </div>
                            <input id="founded" name="founded" placeholder="Founded" type="number"
                                aria-describedby="foundedHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="foundedHelpBlock" class="form-text text-muted">like: 2016</span>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-usd"></i>
                                </div>
                            </div>
                            <input id="price" name="price" placeholder="Price" type="number"
                                aria-describedby="priceHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="priceHelpBlock" class="form-text text-muted">like: $2685</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <textarea id="description" name="description" cols="40" rows="5" required="required" class="form-control"
                            aria-describedby="descriptionHelpBlock">This is an marutis description</textarea>
                        <span id="descriptionHelpBlock" class="form-text text-muted">This is an marutis description</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <input type="checkbox" name="aircondition" id="aircondition">
                        <label for="aircondition">Airconditions</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="child_seat" id="child_seat">
                        <label for="child_seat">Child Seat</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="gps" id="gps">
                        <label for="gps">GPS</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="luggage" id="luggage">
                        <label for="luggage">Luggage</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="music" id="music">
                        <label for="music">Music</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="seat_belt" id="seat_belt">
                        <label for="seat_belt">Seat Belt</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <input type="checkbox" name="sleeping_bag" id="sleeping_bag">
                        <label for="sleeping_bag">Sleeping Bag</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="watter" id="watter">
                        <label for="watter">Watter</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="bluetooth" id="bluetooth">
                        <label for="bluetooth">Bluetooth</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="on_board_computer" id="on_board_computer">
                        <label for="on_board_computer">Board Computer</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="audio_input" id="audio_input">
                        <label for="audio_input">Audio Input</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="car_kit" id="car_kit">
                        <label for="car_kit">Car Kit</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <input type="checkbox" name="remote_control_locking" id="remote_control_locking">
                        <label for="remote_control_locking">Remote Control Locking</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="climate_control" id="climate_control">
                        <label for="climate_control">Climate Control</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="long_term_trips" id="long_term_trips">
                        <label for="long_term_trips">long Term Trips</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-5 col-8">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
