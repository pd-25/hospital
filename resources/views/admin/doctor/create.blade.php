@extends('admin.layout.main')
@section('title', 'Create Doctor | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Doctor</h5>
                        <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                           
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
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
                                <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="type" class="form-control">
                                        <option value="">--select---</option>
                                        <option value="GENERAL SURGERY OPD">GENERAL SURGERY OPD</option>
                                        <option value="GENERAL MEDICINE OPD">GENERAL MEDICINE OPD</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Degree</label>
                                <div class="col-sm-10">
                                    <input type="text" name="degree" class="form-control" placeholder="M.B.B.S., M.S., F.R.C.S." >
                                    @error('degree')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Available On</label>
                                <div class="col-sm-10">
                                    <input type="text" name="available_on" class="form-control" placeholder="Eg. MON - 11:00 AM">
                                    @error('available_on')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label"> Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" >
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save </button>
                                    <a href="{{route('doctors.index')}}" type="submit" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
