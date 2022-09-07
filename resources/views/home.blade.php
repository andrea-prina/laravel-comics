@extends('layouts.main-layout')

@section('content')

    <div class="container-fluid jumbotron"></div>

    <div class="container d-flex flex-wrap justify-content-center pt-4 pb-4 position-relative">
        <div class="section-label">CURRENT SERIES</div>

        {{-- CARDS --}}
        @foreach ($comics as $comic)
            <div class="comic-card">
                <a href="">
                    <img src="{{ $comic->image }}" alt="">
                    <p class="text-uppercase text-center">{{ $comic->title }}</p>
                </a>
            </div>
        @endforeach

    </div>
    {{--TODO: FIX BUTTON --}}
    <button class="btn branded-button">LOAD MORE</button>
    
    <div class="action-bar">
        <div class="container">
            <div class="row p-5">
                <div class="col text-center"><img src="{{ asset('assets/img/buy-comics-digital-comics.png') }}" alt="">DIGITAL COMICS</div>
                <div class="col text-center"><img src="{{ asset('assets/img/buy-comics-merchandise.png') }}" alt="">DC MERCHANDISE</div>
                <div class="col text-center"><img src="{{ asset('assets/img/buy-comics-subscriptions.png') }}" alt="">SUBSCRIPTIONS</div>
                <div class="col text-center"><img src="{{ asset('assets/img/buy-comics-shop-locator.png') }}" alt="">COMIC SHOP LOCATOR</div>
                <div class="col text-center"><img src="{{ asset('assets/img/buy-dc-power-visa.svg') }}" alt="">DC POWER VISA</div>
            </div>
        </div>
    </div>

    <div class="social-bar">
        <div class="container d-flex justify-content-between">
            <a href="" class="btn">SIGN-UP NOW!</a>
            <div class="d-flex align-items-center">
                <h6 class="mb-0"><a href="">FOLLOW US</a></h6>
                <a class="ms-3" href=""><img src="{{ asset('../assets/img/footer-facebook.png') }}" alt="facebook-logo"></a>
                <a class="ms-3" href=""><img src="{{ asset('../assets/img/footer-twitter.png') }}" alt="twitter-logo"></a>
                <a class="ms-3" href=""><img src="{{ asset('../assets/img/footer-youtube.png') }}" alt="youtube-logo"></a>
                <a class="ms-3" href=""><img src="{{ asset('../assets/img/footer-pinterest.png') }}" alt="pinterest-logo"></a>
                <a class="ms-3" href=""><img src="{{ asset('../assets/img/footer-periscope.png') }}" alt="periscope-logo"></a>
            </div>
        </div>
    </div>


@endsection