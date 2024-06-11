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


    <section id="innPG-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <img src="{{ asset('frontend/images/blog-image-sm.jpg') }}" class="img-fluid w-100 border-radius">
                </div>
                <div class="col-lg-5 align-self-center">
                    <h2>{{ $news->title }}</h2>
                    <ul class="blog-dtl">
                        <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{{ $news->created_at->format('F j, Y') }}</li>
                        <li><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>By admin</li>
                        {{-- <li><span><i class="fa fa-folder" aria-hidden="true"></i></span>Uncategorized</li> --}}
                    </ul>
                </div>
                <div class="col-lg-12 mt-lg-4">
                    <p>{{ $news->description }} </p>
                </div>
            </div>






        </div>
    </section>
@endsection
