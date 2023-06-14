@extends('layout.main')
@section('content')
    
    @if(empty($khoahoc))
        <h5>Ko co khoa hoc nao</h5>
    @else
        <div class="container d-flex flex-wrap">
            @foreach($khoahoc as $kh)
                <div class="card" style="width: 18rem;">
                    <img src="{{$kh->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$kh->title}}</h5>
                        <p class="card-text">{{$kh->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
@section('css')
    <style>
        .card{
            margin: 3px 3px;
            flex-basis: 24%;
        }
        .content{
            margin-top: 30px;
        }
    </style>
@endsection