@extends('welcome')

@section('assets')
    <link rel="stylesheet" href="{{Vite::asset('resources/css/home.css')}}">
@stop

@section('content')

    <x-header/>

    <div class="main-container">
        <div class="headline">
            <div class="headline__text">
                <p>A jungle in the heart of</p>
                <p class="manila">Manila</p>
            </div>
            <div class="headline__buttons">
                <button id="get-tix" class="get-tix">Get Tickets</button>
                <button id="loc-map" class="loc-map" onclick="location.href='https://maps.app.goo.gl/uNAEpwf79doGWfaz8'">Location Map</button>
            </div>
        </div>
    </div>

    <div class="intro1">
        <div class="intro1__title">the new manila zoo</div>
        <p>Rediscover and experience the newly-renovated and modernized  Manila Zoo. <span>Discover. Learn. Get involved.</span></p>
        <div class="intro1__pics">
            <img src="{{Vite::asset('resources/images/location1.png')}}" alt="">
            <img src="{{Vite::asset('resources/images/location2.png')}}" alt="">
        </div>
    </div>

    <div class="intro2">
        <div class="intro2__title">
            <p>discover life</p>
            <p class="interact">INTERACT</p>
        </div>
        <div class="intro2__details">
            <p>
                The Manila Zoological and Botanical Garden is home to about a thousand animals from 90 species as of April 2015. Giving life to the modernized and improved Manila Zoo are a Bengal tiger, Malayan civet, monitor lizard and hippopotamus, among others, and many of which were born in captivity with three month-old juveniles recently born in April 2015 and Botanical Garden is home to about a thousand animals from 90 species as of April 2015. Giving life to the modernized and improved Manila Zoo are a Bengal tiger, Malayan civet, monitor lizard and hippopotamus, among others, and many of which were born in captivity with three month-old juveniles recently born in April 2015 and Botanical Garden is home to about a thousand animals from 90 species as of April 2015. Giving life to the modernized and improved Manila Zoo are a Bengal tiger, Malayan civet, monitor lizard and hippopotamus, among others, and many of which were born in captivity
            </p>
        </div>
    </div>

    <div class="intro3">
        <div class="intro3__pics">
            <img src="{{Vite::asset('resources/images/animal4.png')}}" alt="">
            <img src="{{Vite::asset('resources/images/animal3.png')}}" alt="">
            <img src="{{Vite::asset('resources/images/animal2.png')}}" alt="">
            <img src="{{Vite::asset('resources/images/animal1.png')}}" alt="">
        </div>
        <div class="intro3__title">
            <p>explore our animals</p>
            <button class="view-more" onclick="location.href='{{route('animals')}}'">View more</button>
        </div>
    </div>

    <x-footer/>
@stop