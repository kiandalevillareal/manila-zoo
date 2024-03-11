@extends('welcome')

@section('assets')
    <link rel="stylesheet" href="{{Vite::asset('resources/css/guidelines.css')}}">
@stop

@section('content')

    <x-header/>

    <div class="main-container">
        <div class="guidelines">
            <div class="guidelines__title">Guidelines for a <span>FUN ZOO EXPERIENCE</span></div>
            <div class="guidelines__details">
                <div class="guidelines__general">
                    <p>The Manila Zoo under Public Recreations Bureau (PRB) has created a set of rules and guidelines for the safety and welfare of both our guests and the animals.</p>
                    <strong>Please obey all rules, guidelines and posted signs throughout the Zoo premises.</strong>
                </div>
                <div class="guidelines__list">
                    <p>1. Respect the animals.</p>
                    <p>2. Do not feed the animals.</p>
                    <p>3. No smoking.</p>
                    <p>4. No littering.</p>
                    <p>5. No outside food and drinks allowed.</p>
                    <p>6. Pets are not allowed inside the zoo premises.</p>
                    <p>7. Balloons and all kinds of toys are not allowed inside.</p>
                    <p>8. Children must be supervised at all times.</p>
                    <p>9. Do not pluck the flowers.</p>
                    <p>10. Do not step on the grass.</p>
                </div>
             </div>
        </div>
    </div>

    <x-footer/>
@stop

