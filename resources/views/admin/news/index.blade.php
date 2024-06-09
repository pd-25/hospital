@extends('admin.layout.main')
@section('title', 'All News | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All News</h5>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('news-events.create') }}">New
                            News</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($newss as $news)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $news->title }}</td>

                                        <td>{{ Str::limit($news->description, 100, '...') }}</td>
                                        <td><img src="{{ asset('storage/' . $news->image) }}" alt=""
                                                srcset="" height="100px" width="100px"></td>
                                        <td>
                                            <a href="{{ route('news-events.edit', $news->slug) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('news-events.destroy', $news->slug) }}"
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
