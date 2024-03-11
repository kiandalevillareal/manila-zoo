@extends('welcome')

@section('assets')
    <link rel="stylesheet" href="{{Vite::asset('resources/css/animals.css')}}">
    <link rel="stylesheet" href="{{Vite::asset('resources/css/card.css')}}">
@stop

@section('content')

    <x-header/>

    <div class="main-container">
        {{-- MAMMALS --}}
        <div class="category">
            <div class="category__title">Mammals</div>
            <div class="category__desc">
                Mammals are warm-blooded vertebrates that have hair or fur, give birth to live young, and nurse their young with milk. They are the most diverse group of vertebrates on Earth, with over 6,000 species. Mammals can be found in a wide variety of habitats, from the frozen Arctic to the hot deserts.
            </div>

            <div class="prev-btn btn">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>

            <div class="category__cards">
                @include('components.mammals')
            </div>

            <div class="next-btn btn">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>

        {{-- REPTILES --}}
        <div class="category">
            <div class="category__title">Reptiles</div>
            <div class="category__desc">
                Reptiles are tetrapod vertebrates, creatures that either have four limbs or, like snakes, are descended from four-limbed ancestors. Unlike amphibians, reptiles do not have an aquatic larval stage. They are air-breathing vertebrates covered in special skin made up of scales, bony plates, or a combination of both. Their metabolism depends on the temperature of their environment. Unlike birds and mammals, reptiles do not maintain a constant internal body temperature.
            </div>

            <div class="prev-btn btn">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>

            <div class="category__cards">
                @include('components.reptiles')
            </div>

            <div class="next-btn btn">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>

        {{-- AQUATICS --}}
        <div class="category">
            <div class="category__title">Aquatics</div>
            <div class="category__desc">
                Aquatic animals are fascinating creatures that live in water. They have special adaptations that help them survive and move around in their watery homes. Some of these animals, like fish, have gills to breathe underwater, while others, like whales and dolphins, come up to the surface to take in air. Aquatic animals can be found in oceans, seas, rivers, lakes, and even in the zoo's very own aquatic exhibits. Come and explore the incredible diversity of aquatic life, from colorful tropical fish to graceful sea turtles and majestic sharks!
            </div>

            <div class="prev-btn btn">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>

            <div class="category__cards">
                @include('components.aquatics')
            </div>

            <div class="next-btn btn">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>

        {{-- AVIANS --}}
        <div class="category">
            <div class="category__title">Avians</div>
            <div class="category__desc">
                Avian animals, commonly known as birds, are a fascinating group of creatures that have the amazing ability to fly. They are characterized by their feathered bodies, beaks, and wings. Birds come in all shapes, sizes, and colors, from tiny hummingbirds to majestic eagles. At our zoo, you can discover a wide variety of avian species, each with its own unique adaptations and behaviors.
            </div>

            <div class="prev-btn btn">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>

            <div class="category__cards">
                @include('components.avians')
            </div>

            <div class="next-btn btn">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>
    </div>

    <x-footer/>
    
    <script src="{{Vite::asset('resources/js/card.js')}}"></script>
@stop