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
    <!-- Page Content -->


    <section id="docPG-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h1>Careers</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lortis lorem sed magna vehicula
                        mattis sit amet in ex. Vivamus auctor urna nisi. Viamus auctor urna nisi. Lorem ipsum dolor sit
                        amet, consectetur adipicing elit.</p>
                </div>
                @foreach ($careers as $career)
                    <div class="col-lg-12 jpost-box">
                        <h3>{{ $career->title }}</h3>
                        <p class="job-loc">{{ $career->location }}</p>
                        <p class="job-detl">Job Details</p>
                        <p>{{ Str::limit($career->desc, 100, '...') }}</p>
                        <a href="{{ route('CareerSingle',$career->slug) }}" class="rm-btn">Apply Now!</a>
                    </div>
            @endforeach

        </div>
    </section>
@endsection
