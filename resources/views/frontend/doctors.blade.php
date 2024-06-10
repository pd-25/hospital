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
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-11 section-head">
                    <h1>Our Doctors</h1>
                    <p>Mauris elementum libero sit amet ante blandit, id gravida tortor vehicula. Sed nec dui ornare,
                        elementum diam vitae, tempus nunc. Class aptent taciti sociosqu ad litora torquent per conubia
                        nostra, per inceptos himenaeos. Quisque fringilla euismod augue vitae porttitor</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <hr>
                    <h3 class="py-4">General Medicine OPD</h3>
                    <hr>
                </div>
                @forelse ($doctors as $doctorM)
                    @if ($doctorM->type == 'GENERAL MEDICINE OPD')
                        <div class="col-lg-3 mb-5">
                            <div class="expert-box">
                                <div class="expert-box-img">
                                    <img src="{{ asset('storage/' . $doctorM->image) }}" class="img-fluid">
                                </div>
                                <div class="expert-box-ctn">
                                    <h4>{{ $doctorM->title }}</h4>
                                    <p>{{ $doctorM->degree }}</p>
                                    <p>{{ $doctorM->available_on }}</p>
                                    {{-- <a href="single-doctors.html" class="bbBox-btn">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse








            </div>



            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <hr>
                    <h3 class="py-4">General Surgery OPD</h3>
                    <hr>
                </div>
                @forelse ($doctors as $doctorSa)
                    @if ($doctorSa->type == 'GENERAL SURGERY OPD')
                        <div class="col-lg-3 mb-5">
                            <div class="expert-box">
                                <div class="expert-box-img">
                                    <img src="{{ asset('storage/' . $doctorSa->image) }}" class="img-fluid">
                                </div>
                                <div class="expert-box-ctn">
                                    <h4>{{ $doctorSa->title }}</h4>
                                    <p>{{ $doctorSa->degree }}</p>
                                    <p>{{ $doctorSa->available_on }}</p>
                                    {{-- <a href="single-doctors.html" class="bbBox-btn">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse








            </div>


        </div>
    </section>
@endsection
