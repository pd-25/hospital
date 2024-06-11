@extends('frontend.layouts.app')
@section('content')
    <section id="innerPG-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="banner-item col-lg-12">
                    <img src="{{ asset('frontend/images//inner-banner.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="docPG-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <h2>{{ $career->title }}</h2>
                </div>
                <div class="col-lg-6">
                    <p>{{ $career->desc }}</p>

                </div>
                <div class="col-lg-6 jpost-box">
                  @if (Session::has('msg'))
                  <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif
                    <form role="form" action="{{ route('Careerapplication', $career->id) }}" method="post" id="contact-form" enctype="multipart/form-data">
                      @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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

                                <div class="col-md-6">
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

                                <div class="col-md-6">
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message for me"
                                            class="form-control" name="form_message" id="form_message"></textarea>
                                            @error('form_message')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                                        @error('fileToUpload')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>



                                <div class="col-md-12 mt-3">
                                    <input type="submit" value="Submit Now" class="rm-btn">
                                </div>
                            </div>


                        </div>
                    </form>

                </div>
            </div>


        </div>
    </section>
@endsection
