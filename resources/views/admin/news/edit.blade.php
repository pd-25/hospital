@extends('admin.layout.main')
@section('title', 'Edit News & Event | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit News & Event</h5>
                        @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                        <form action="{{ route('news-events.update', $news->slug) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                           
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$news->title}}" name="title" class="form-control" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" cols="30" rows="10">{{$news->description}}</textarea>
                                    @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <img src="{{asset('storage/'.$news->image)}}" alt="" height="100px" width="100px">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Update Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control">
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update </button>
                                    <a href="{{route('news-events.index')}}" type="submit" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
