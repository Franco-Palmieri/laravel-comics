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
        <div class="container">
            <div class="row content-main-bar">
                <div class="icon-main-box">
                    <div class="icon-main">
                        <img src="/images/buy-comics-digital-comics.png" alt="">
                    </div>
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="icon-main-box">
                    <div class="icon-main">
                        <img src="/images/buy-comics-merchandise.png" alt="">
                    </div>
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="icon-main-box">
                    <div class="icon-main">
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                    </div>
                    <span>SUBSCRIPTIONS</span>
                </div>
                <div class="icon-main-box">
                    <div class="icon-main">
                        <img src="/images/buy-comics-shop-locator.png" alt="">
                    </div>
                    <span>SHOP LOCATOR</span>
                </div>
                <div class="icon-main-box">
                    <div class="icon-main">
                        <img src="/images/buy-dc-power-visa.svg" alt="">
                    </div>
                    <span>DC POWERVISA</span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
