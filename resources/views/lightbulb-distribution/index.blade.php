
@extends('index')

@section('section')
<div class="container mt-4">
    @error('file')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="file" class="form-control" id="file" name="file" aria-describedby="file" aria-label="Upload">
                    <button class="btn btn-outline-primary" type="submit" id="file">Procesar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection