@extends('frontend.layouts.app')
@section('content')
    <section id="banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('frontend/images/banner.jpg') }}');">
                    <div class="carousel-caption first-cc">
                        <p>Entrust your health our doctors</p>
                        <h1>Medical services that you can trust</h1>
                        <a href="{{ route('contact') }}" class="banner-btn">Contact Us</a>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/banner.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Entrust your health our doctors</p>
                        <h1>Medical services that you can trust</h1>
                        <a href="{{ route('contact') }}" class="banner-btn">Contact Us</a>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/banner.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Entrust your health our doctors</p>
                        <h1>Medical services that you can trust</h1>
                        <a href="{{ route('contact') }}" class="banner-btn">Contact Us</a>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><img
                        src="{{ asset('frontend/images/ban-left-btn.png') }}" class="img-fluid"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><img
                        src="{{ asset('frontend/images/ban-right-btn.png') }}" class="img-fluid"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Page Content -->


    <section id="banner-bottom-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 p-0">
                    <div class="bbBox box-one">
                        <img src="{{ asset('frontend/images/bb-icon1.png') }}" class="img-fluid">
                        <h4>Find A Doctor</h4>
                        <p>Praesent magna ipsumt sit amet iacu lis sit amet lacinia et turpis.</p>
                        <a href="{{ route('doctors') }}" class="bbBox-btn">Find Now</a>
                    </div>
                </div>

                <div class="col-lg-3 p-0">
                    <div class="bbBox box-two">
                        <img src="{{ asset('frontend/images/bb-icon2.png') }}" class="img-fluid">
                        <h4>Download Report</h4>
                        <p>Praesent magna ipsumt sit amet iacu lis sit amet lacinia et turpis.</p>
                        <a target="_blank" href="http://103.48.50.171:1029/" class="bbBox-btn">Log In</a>
                    </div>
                </div>

                <div class="col-lg-3 p-0">
                    <div class="bbBox box-three">
                        <img src="{{ asset('frontend/images/bb-icon3.png') }}" class="img-fluid">
                        <h4>24 Hours Service</h4>
                        <p>Praesent magna ipsumt sit amet iacu lis sit amet lacinia et turpis.</p>
                        <a href="{{ route('services') }}" class="bbBox-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 p-0">
                    <div class="bbBox box-four">
                        <img src="{{ asset('frontend/images/bb-icon4.png') }}" class="img-fluid">
                        <h4>Top Doctors</h4>
                        <p>Praesent magna ipsumt sit amet iacu lis sit amet lacinia et turpis.</p>
                        <a href="{{ route('doctors') }}" class="bbBox-btn">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('frontend/images/wel-pic.jpg') }}" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h1>BHARAT SEVASHRAM SANGHA</h1>
                    <p class="sec-caption">Yugacharya Swami Pranabanandaji Maharaj (Founder)</p>
                    <p>Maecenas felis neque, tempor et lectus sed, ultricies ullamcorper tortor. Mauris sem sapien, ultrices
                        ac volutpat in, malesuada id libero. Maecenas sollicitudin aliquet ipsum, a tempus sem suscipit sed.
                        Integer ultricies vestibulum ultrices. Aliquam eget augue ante. Morbi ac sem et felis placerat
                        dignissim.</p>
                    <p>Aliquam ipsum tellus, varr iohus, auctor pntdfdfesque libero. Vestibulum ultricies, neque inasd dfsae
                        elementum ultricies, ex feu giat lacus, sagittis faucibus mi gthddui at purus dis gnissim feugiat.
                    </p>
                    <a href="{{ route('about') }}" class="rm-btn">About More</a>
                </div>

            </div>
        </div>
    </section>

    <section id="service-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">

                    <h2>PRESENT SERVICES</h2>
                    <p class="head-caption">We cover a big variety of medical services</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-service" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="service-box text-center">
                                    <div class="service-box-img">
                                        <img src="{{ asset('frontend/images/serv-icon1.png') }}" class="img-fluid mb-3">
                                    </div>
                                    <div class="service-box-ctn">
                                        <h4>OPD CLINICS</h4>
                                        <p>Quisque vel arcu a nisl eleifend finibus dignis sim faucibus hendrerit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box text-center">
                                    <div class="service-box-img">
                                        <img src="{{ asset('frontend/images/serv-icon1.png') }}" class="img-fluid mb-3">
                                    </div>
                                    <div class="service-box-ctn">
                                        <h4>OPD CLINICS</h4>
                                        <p>Quisque vel arcu a nisl eleifend finibus dignis sim faucibus hendrerit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box text-center">
                                    <div class="service-box-img">
                                        <img src="{{ asset('frontend/images/serv-icon1.png') }}" class="img-fluid mb-3">
                                    </div>
                                    <div class="service-box-ctn">
                                        <h4>OPD CLINICS</h4>
                                        <p>Quisque vel arcu a nisl eleifend finibus dignis sim faucibus hendrerit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box text-center">
                                    <div class="service-box-img">
                                        <img src="{{ asset('frontend/images/serv-icon1.png') }}" class="img-fluid mb-3">
                                    </div>
                                    <div class="service-box-ctn">
                                        <h4>OPD CLINICS</h4>
                                        <p>Quisque vel arcu a nisl eleifend finibus dignis sim faucibus hendrerit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box text-center">
                                    <div class="service-box-img">
                                        <img src="{{ asset('frontend/images/serv-icon2.png') }}" class="img-fluid mb-3">
                                    </div>
                                    <div class="service-box-ctn">
                                        <h4>DIAGNOSTIC TESTS</h4>
                                        <p>Quisque vel arcu a nisl eleifend finibus dignis sim faucibus hendrerit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box text-center">
                                    <div class="service-box-img">
                                        <img src="{{ asset('frontend/images/serv-icon3.png') }}" class="img-fluid mb-3">
                                    </div>
                                    <div class="service-box-ctn">
                                        <h4>EMERGENCY DEPARTMENT</h4>
                                        <p>Quisque vel arcu a nisl eleifend finibus dignis sim faucibus hendrerit.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section id="experts-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12">
                    <h2>Our Clinical Experts</h2>
                    <p class="head-caption">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form. </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-experts" class="owl-carousel owl-theme">
                            @forelse ($doctors as $doctor)
                                <div class="item">
                                    <div class="expert-box">
                                        <div class="expert-box-img">
                                            <img src="{{ asset('storage/' . $doctor->image) }}" class="img-fluid">
                                        </div>
                                        <div class="expert-box-ctn">
                                            <h4>{{ $doctor->title }}</h4>
                                            <p class="listing-certificate sing-listing"><i class="fa fa-certificate"
                                                    aria-hidden="true"></i> {{ $doctor->degree }}</p>
                                            <p class="listing-date sing-listing mb-3"><i class="fa fa-calendar"
                                                    aria-hidden="true"></i> <b>Available on:</b>
                                                {{ $doctor->available_on }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                            {{-- 
                            <div class="item">
                                <div class="expert-box">
                                    <div class="expert-box-img">
                                        <img src="{{ asset('frontend/images/exp-pic2.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="expert-box-ctn">
                                        <h4>Dr. N. S. Bakshi</h4>
                                        <p>Aliquam eget augue ante. Morbi ac anssim goors fulter.</p>
                                        <a href="" class="bbBox-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="expert-box">
                                    <div class="expert-box-img">
                                        <img src="{{ asset('frontend/images/exp-pic3.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="expert-box-ctn">
                                        <h4>Dr. K. B. Halder</h4>
                                        <p>Aliquam eget augue ante. Morbi ac anssim goors fulter.</p>
                                        <a href="" class="bbBox-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="expert-box">
                                    <div class="expert-box-img">
                                        <img src="{{ asset('frontend/images/exp-pic4.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="expert-box-ctn">
                                        <h4>Dr. Debratan Nandi</h4>
                                        <p>Aliquam eget augue ante. Morbi ac anssim goors fulter.</p>
                                        <a href="" class="bbBox-btn">Read More</a>
                                    </div>
                                </div>
                            </div> --}}



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>








    <section id="pod-section">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-12">
                    <h2>TOP PROCEDURES</h2>
                    <p class="head-caption">Fusce ultricies blandit odio, at dictum libero posuere sed. Phasellus vitae
                        metus id dolor consequat consequat.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <img src="{{ asset('frontend/images/pod-pic.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <div class="mr-100">
                        <div class="pod-box">
                            <div class="media">
                                <img src="{{ asset('frontend/images/pod-icon1.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body pt-4">
                                    <h5 class="mt-0">Plastic Surgery</h5>
                                    <p>Nullam venenatis condimentum quiertito raitor lacinia aodio sodales sagittis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pod-box">
                            <div class="media">
                                <img src="{{ asset('frontend/images/pod-icon2.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body pt-4">
                                    <h5 class="mt-0">Rhinology</h5>
                                    <p>Nullam venenatis condimentum quiertito raitor lacinia aodio sodales sagittis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pod-box">
                            <div class="media">
                                <img src="{{ asset('frontend/images/pod-icon3.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body pt-4">
                                    <h5 class="mt-0">Gastroenterology</h5>
                                    <p>Nullam venenatis condimentum quiertito raitor lacinia aodio sodales sagittis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pod-box">
                            <div class="media">
                                <img src="{{ asset('frontend/images/pod-icon4.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body pt-4">
                                    <h5 class="mt-0">Otology</h5>
                                    <p>Nullam venenatis condimentum quiertito raitor lacinia aodio sodales sagittis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pod-box">
                            <div class="media">
                                <img src="{{ asset('frontend/images/pod-icon5.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body pt-4">
                                    <h5 class="mt-0">Pulmonology</h5>
                                    <p>Nullam venenatis condimentum quiertito raitor lacinia aodio sodales sagittis.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="bookapp-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="media">
                        <img src="{{ asset('frontend/images/doc-icon.png') }}" class="mr-2" alt="...">
                        <div class="media-body">
                            <h5 class="mt-1">Looking for professinal & trusted medical healthcare? </h5>
                            <p>Don’t hasitate to contact us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="{{ route('contact') }}" class="book-btn">Contact Us </a>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-12">
                    <h2>What people say about Us</h2>
                    <p class="head-caption">Fusce ultricies blandit odio, at dictum libero posuere sed. Phasellus vitae
                        metus id dolor consequat consequat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-testimonial" class="owl-carousel owl-theme">
                            @forelse ($videos as $video)
                                <div class="item m-2">
                                    {!! $video->file !!}
                                    {{-- <a class="youtube-link" youtubeid="IcVJ-R6RlM4"> <img src="{{ $video->file }}"
                                            class="img-fluid"> <span class="playbtn-img"><img
                                                src="{{ asset('frontend/images/play-btn.png') }}"></span></a> --}}
                                </div>
                            @empty
                            @endforelse
                            {{-- <div class="item">
                                <a class="youtube-link" youtubeid="IcVJ-R6RlM4"> <img
                                        src="{{ asset('frontend/images/video-bg2.jpg') }}" class="img-fluid"> <span
                                        class="playbtn-img"><img
                                            src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                            </div>
                            <div class="item">
                                <a class="youtube-link" youtubeid="IcVJ-R6RlM4"> <img
                                        src="{{ asset('frontend/images/video-bg3.jpg') }}" class="img-fluid"> <span
                                        class="playbtn-img"><img
                                            src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                            </div>
                            <div class="item">
                                <a class="youtube-link" youtubeid="IcVJ-R6RlM4"> <img
                                        src="{{ asset('frontend/images/video-bg1.jpg') }}" class="img-fluid"> <span
                                        class="playbtn-img"><img
                                            src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                            </div>
                            <div class="item">
                                <a class="youtube-link" youtubeid="IcVJ-R6RlM4"> <img
                                        src="{{ asset('frontend/images/video-bg2.jpg') }}" class="img-fluid"> <span
                                        class="playbtn-img"><img
                                            src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                            </div>
                            <div class="item">
                                <a class="youtube-link" youtubeid="IcVJ-R6RlM4"> <img
                                        src="{{ asset('frontend/images/video-bg3.jpg') }}" class="img-fluid"> <span
                                        class="playbtn-img"><img
                                            src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12">
                    <h2>Stories, Tips & Latest News </h2>
                </div>
            </div>


            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">

                    <div class="row">
						@forelse ($newss->take(2) as $news) <div class="col-lg-6 blogBox">
							<img src="{{ asset('storage/' . $news->image) }}" class="img-fluid" alt="...">
							<ul class="blog-list">
							  <li class="blog-date"><a href=""><i class="fa fa-calendar" aria-hidden="true"></i> {{ $news->created_at->format('F j, Y') }}</a></li>
							  <li class="blog-category"><a href=""><i class="fa fa-folder-open" aria-hidden="true"></i> By admin</a></li>
							</ul>
							<h5>{{ $news->title }}</h5>
							<p>{{ Str::limit($news->description, 100, '...') }}</p>
						  </div>
						@empty
						  <p>No news items found.</p>
						@endforelse
                        {{-- <div class="col-lg-6 blogBox">
                            <img src="{{ asset('frontend/images/blog-pic2.jpg') }}" class="img-fluid" alt="...">
                            <ul class="blog-list">
                                <li class="blog-date"><a href=""><i class="fa fa-calendar"
                                            aria-hidden="true"></i> Jun 03, 2020</a></li>
                                <li class="blog-category"><a href=""><i class="fa fa-folder-open"
                                            aria-hidden="true"></i> Heath Care</a></li>
                            </ul>
                            <h5>How to handle patient body in MRI</h5>
                            <p>Cras auctor erat ut euismod ornare. Curabitur non sollicitudin mauris luctus purus...</p>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4">
					@forelse ($newss->skip(2) as $news) <div class="blogBox-snd pb-4">
						<ul class="blog-list">
						  <li class="blog-date"><a href=""><i class="fa fa-calendar" aria-hidden="true"></i> {{ $news->created_at->format('F j, Y') }}</a></li>
						  <li class="blog-category"><a href=""><i class="fa fa-folder-open" aria-hidden="true"></i> By admin</a></li>
						</ul>
						<h5>{{ $news->title }}</h5>
					  </div>
					  <hr>
					@empty
					  @endforelse
                    {{-- <div class="blogBox-snd pb-4">
                        <ul class="blog-list">
                            <li class="blog-date"><a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Jun 03, 2020</a></li>
                            <li class="blog-category"><a href=""><i class="fa fa-folder-open"
                                        aria-hidden="true"></i> Heath Care</a></li>
                        </ul>
                        <h5>How to handle patient body in MRI</h5>
                    </div>
                    <hr>
                    <div class="blogBox-snd pb-2">
                        <ul class="blog-list">
                            <li class="blog-date"><a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Jun 03, 2020</a></li>
                            <li class="blog-category"><a href=""><i class="fa fa-folder-open"
                                        aria-hidden="true"></i> Heath Care</a></li>
                        </ul>
                        <h5>How to handle patient body in MRI</h5>
                    </div>
                    <hr>
                    <div class="blogBox-snd pt-3">
                        <ul class="blog-list">
                            <li class="blog-date"><a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Jun 03, 2020</a></li>
                            <li class="blog-category"><a href=""><i class="fa fa-folder-open"
                                        aria-hidden="true"></i> Heath Care</a></li>
                        </ul>
                        <h5>How to handle patient body in MRI</h5>
                    </div> --}}

                </div>
            </div>





        </div>
    </section>
@endsection
