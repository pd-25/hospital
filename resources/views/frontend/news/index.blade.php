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
                <div class="col-lg-12 text-center mb-4">
                    <h2>Our Blogs</h2>
                    <p>Donec et lobortis urna. Pellentesque id sem ac sem rhoncus rhoncus et hendrerit odio. Sed aliquet
                        imperdiet scelerisque. Nulla a eros tincidunt, laoreet nulla et, ultricies nibh. Duis eget orci sed
                        felis pretium rutrum. </p>
                </div>
            </div>


            @forelse ($newss as $news)
                <div class="row mb-lg-5">
                    <div class="col-lg-6">
                        <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid w-100 border-radius">
                    </div>

                    <div class="col-lg-6 align-self-center">
                        <h3>{{ $news->title }}</h3>
                        <ul class="blog-dtl">
                            <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{{ $news->created_at->format('F j, Y') }}</li>
                            <li><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>By admin</li>
                            {{-- <li><span><i class="fa fa-folder" aria-hidden="true"></i></span>Uncategorized</li> --}}
                        </ul>
                        <p>{{ Str::limit($news->description, 100, '...') }} </p>
                        <a href="{{ route('newsSingle', $news->slug) }}" class="banner-btn">Read More</a>
                    </div>
                </div>
            @empty
            @endforelse






            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            {{ $newss->links() }}
                            {{-- <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </section>
@endsection
