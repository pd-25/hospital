@extends('admin.layout.main')
@section('title', 'All Jobs | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Jobs</h5>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('jobs.create') }}">New
                            Job</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($allJobs as $allJob)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $allJob->title }}</td>

                                        <td>{{ $allJob->desc }}</td>
                                        <td>{{ $allJob->created_at }}</td>
                                        <td>
                                            <a href="{{ route('jobs.edit', $allJob->slug) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST"
                                                action="{{ route('jobs.destroy', $allJob->slug) }}"
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
                                @endforeach
                               
                            </tbody>
                           
                        </table>
                        <div class="pagination-wrapper">
                            {{ $allJobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
