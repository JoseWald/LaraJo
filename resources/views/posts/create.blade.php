@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        <div class="col-8 offset-2">
            <div class="row text-md-center p-2">
                <h1>Add new post</h1>
            </div>
            <!-- Row for the caption input -->
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-end p-2">Posts caption</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Row for the file input -->
            <div class="form-group row mt-3">
                <label for="image" class="col-md-4 col-form-label text-md-end p-2">Upload image</label>

                <div class="col-md-6">
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mt-4">
                <button class="btn btn-primary ">
                        Add new post
                </button>
            </div>
        </div>  
    </form>
</div>
@endsection
