@extends('admin.layout.main')
@section('title', 'All galleries | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Galleries</h5>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('galleries.create') }}">New
                            Doctor</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">File</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($galleries as $gallery)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $gallery->type }}</td>

                                        {{-- <td>{{ Str::limit($gallery->description, 100, '...') }}</td> --}}
                                        <td>
                                            @if ($gallery->type == 'image')
                                                <img src="{{ asset('storage/' . $gallery->image) }}" alt=""
                                                    srcset="" height="100px" width="100px">
                                            @else
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('galleries.edit', $gallery->slug) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('galleries.destroy', $gallery->slug) }}"
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
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
