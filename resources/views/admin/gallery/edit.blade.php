@extends('admin.layout.main')
@section('title', 'Create Gallery | ')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Galleries</h5>
                    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row mb-3">
                            <label for="fileType" class="col-sm-2 col-form-label">File Type</label>
                            <div class="col-sm-10">
                                <select name="type" id="fileType" class="form-control">
                                    <option value="">--select type--</option>
                                    <option value="video">Video</option>
                                    <option value="image">Image</option>
                                </select>
                                @error('type')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3" id="file-area">
                            <label for="fileInput" id="fileLabel" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="file[]" id="fileInput" class="form-control" multiple>
                                @error('file')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 d-none" id="video-area">
                            <label for="videoInput" class="col-sm-2 col-form-label">YouTube Embed Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="video" id="videoInput" class="form-control" placeholder="Enter YouTube Embed Code">
                                @error('video')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save</button>
                                <a href="{{route('galleries.index')}}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileTypeSelect = document.getElementById('fileType');
    const fileArea = document.getElementById('file-area');
    const videoArea = document.getElementById('video-area');

    fileTypeSelect.addEventListener('change', function() {
        const selectedType = this.value;
        
        if (selectedType === 'video') {
            fileArea.classList.add('d-none');
            videoArea.classList.remove('d-none');
        } else if (selectedType === 'image') {
            videoArea.classList.add('d-none');
            fileArea.classList.remove('d-none');
        } else {
            fileArea.classList.remove('d-none');
            videoArea.classList.add('d-none');
        }
    });
});
</script>
@endsection
