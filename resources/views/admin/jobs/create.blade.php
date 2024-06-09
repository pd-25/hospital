@extends('admin.layout.main')
@section('title', 'Create Job | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Job</h5>
                        <form action="{{ route('jobs.store') }}" method="POST">
                            @method('POST')
                            @csrf
                           
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Job Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" >
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" name="location" class="form-control" >
                                    @error('location')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="desc" class="form-control" cols="30" rows="10"></textarea>
                                    @error('desc')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save Job</button>
                                    <a href="{{route('jobs.index')}}" type="submit" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
