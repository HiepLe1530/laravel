@extends('layout.main')
@section('content')
    <form action="/khoahoc/postadd" method="POST">
        <div class="mb-3">
            <label for="">Image-code</label>
            <input type="text" class="form-control" name="image" placeholder="Image-code......" value={{old('image')}}>
            @error('image')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title.." value={{old('title')}}>
            @error('title')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description.." value={{old('description')}}>
            @error('description')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
    
@endsection
