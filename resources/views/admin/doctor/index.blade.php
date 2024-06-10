@extends('admin.layout.main')
@section('title', 'All doctor | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Doctors</h5>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('doctors.create') }}">New Doctor</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Available On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($doctors as $doctor)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $doctor->title }}</td>
                                        <td>{{ $doctor->type }}</td>
                                        <td>{{ $doctor->degree }}</td>
                                        <td>{{ $doctor->available_on }}</td>

                                        {{-- <td>{{ Str::limit($doctor->description, 100, '...') }}</td> --}}
                                        <td><img src="{{ asset('storage/' . $doctor->image) }}" alt=""
                                                srcset="" height="100px" width="100px"></td>
                                        <td>
                                            <a href="{{ route('doctors.edit', $doctor->slug) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('doctors.destroy', $doctor->slug) }}"
                                                class="d-inline-block pl-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm"
                                                    data-toggle="tooltip" title='Delete'>

                                                    <i class="ri-delete-bin-2-fill"></i>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No Record Found...</td>
                                        
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $doctors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
