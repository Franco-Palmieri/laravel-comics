@extends('components.base')
@section('title', 'Homepage')
@section('content')

<main class="main-home-page">
    <div class="container">
        <div class="row comics-content">
            @foreach($details as $detail)
                <div class="box-comics">
                    <div class="content-box">
                        <div class="image-box">
                            <img src="{{$detail['thumb']}}" alt="">
                        </div>
                        <div class="title-box">
                            {{$detail['title']}}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="load-button">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </div>
    <div class="main-bar">
        <div class="container"></div>
    </div>
</main>
@endsection
