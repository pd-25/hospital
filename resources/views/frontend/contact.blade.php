@extends('frontend.layouts.app')
@section('content')
    <section id="innerPG-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="banner-item col-lg-12">
                    <img src="{{ asset('frontend/images/inner-banner.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->


    <section id="docPG-section">
        <div class="container">
            <div class="row mt-lg-5">
                <div class="col-lg-12">
                    <h2 class="mb-3">Contact Us</h2>
                    @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                </div>
                <div class="col-lg-8">
                    <form role="form" action="{{ route('frontend.contactPost') }}" method="post" id="contact-form">
                      @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="First Name"
                                            class="form-control" name="first_name" id="first_name">
                                            @error('first_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Last Name"
                                            class="form-control" name="last_name" id="last_name">
                                            @error('last_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" required="required" placeholder="Phone" class="form-control"
                                            name="form_Phone" id="form_Phone">
                                            @error('form_Phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Email" class="form-control"
                                            name="form_Email" id="form_Email">
                                            @error('form_Email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message..."
                                            class="form-control" name="form_message" id="form_message"></textarea>
                                            @error('form_message')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <input type="submit" value="Submit Now" class="banner-btn">
                                </div>
                            </div>


                        </div>
                    </form>

                </div>
                <div class="col-lg-4">
                    <div class="benefit-box">
                        <h4>Our Address</h4>
                        <hr>
                        <p>Diamond Harbour Road, Joka, P.O. – Pailan, Kolkata – 700 104</p>
                        <hr>
                        <p class="mb-0">Call For Emergencies</p>
                        <p class="mb-2"><i class="fa fa-phone" aria-hidden="true"></i> <b>O33 9876 5432</b></p>
                        <hr>
                        <p class="mb-0">Call For Appointments</p>
                        <p class="mb-2"><i class="fa fa-phone" aria-hidden="true"></i> <b>O33 2345 6789</b></p>
                        <hr>
                        <p class="mb-0">Email Us</p>
                        <p class="mb-2"><i class="fa fa-envelope" aria-hidden="true"></i> <b>bsshos@gmail.com</b></p>


                    </div>
                </div>
            </div>


        </div>
    </section>




    <section id="map-section">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.6164958874465!2d88.3186854752978!3d22.48104147955703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027bb69682e351%3A0x6ea6470293efc0ff!2sWebredas%20Technologies!5e0!3m2!1sen!2sin!4v1715268062860!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>
@endsection
