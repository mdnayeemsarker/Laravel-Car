@extends('layouts.app')
@section('title')
    Add Footer - DL Laravel
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
                        <span>Footer <i class="ion-ios-arrow-forward"></i></span>
                        <span>Add Footer Details <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <form action="/storefooter" method="POST">
                @csrf
                <label class="col-6">
                    <h2 class="justify-center">Update Footer Details</h2>
                </label>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="phone" name="phone" placeholder="Phone..." type="number"
                                aria-describedby="phoneHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="phoneHelpBlock" class="form-text text-muted">like: +880 1714 466703</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="email" name="email" placeholder="Email..." type="email"
                                aria-describedby="emailHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="emailHelpBlock" class="form-text text-muted">like: admin@email.com</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="address" name="address" placeholder="Address..." type="text"
                                aria-describedby="addressHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="addressHelpBlock" class="form-text text-muted">like: Textile More</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="city" name="city" placeholder="City" type="text"
                                aria-describedby="cityHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="cityHelpBlock" class="form-text text-muted">like: Rangpur</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="post_code" name="post_code" placeholder="Post Code" type="text"
                                aria-describedby="post_codeHelpBlock" required="required" maxlength="4"
                                class="form-control">
                        </div>
                        <span id="post_codeHelpBlock" class="form-text text-muted">like: 5460</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="country" name="country" placeholder="Country" type="text"
                                aria-describedby="countryHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="countryHelpBlock" class="form-text text-muted">like: Bangladesh</span>
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
