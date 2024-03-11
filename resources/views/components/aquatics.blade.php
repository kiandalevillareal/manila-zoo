{{-- BENGAL TIGER --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/bengal_tiger.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Bengal Tiger is the largest tiger subspecies. It is found in India, Bangladesh, and Nepal.
        </div>
    @endslot

    @slot('cname')
        Bengal Tiger
    @endslot

    @slot('sname')
        Panthera tigris
    @endslot

    @slot('lifespan')
        Lifespan: 8-10 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-skull"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-skull"></i>
        </div>  
    @endslot
</x-card>

{{-- AFRICAN LION --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/african_lion.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            African Lion is the second largest big cat in the world, after the tiger. It is found in sub-Saharan Africa and is the only cat that lives in groups, called prides.
        </div>
    @endslot

    @slot('cname')
        African Lion
    @endslot

    @slot('sname')
        Panthera leo
    @endslot

    @slot('lifespan')
        Lifespan: 10-14 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-skull"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>  
    @endslot
</x-card>

{{-- ASIAN ELEPHANT --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/asian_elephant.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Asian Elephant is the largest land mammal in Asia. It is found in India, Sri Lanka, and Southeast Asia.
        </div>
    @endslot

    @slot('cname')
        Asian Elephant
    @endslot

    @slot('sname')
        Elephas maximus
    @endslot

    @slot('lifespan')
        Lifespan: 60-70 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>  
    @endslot
</x-card>

{{-- CELEBES BLACK APE --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/black_ape.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Celebes Black Ape is the largest ape in Asia. It is found on the island of Sulawesi in Indonesia.
        </div>
    @endslot

    @slot('cname')
        Celebes Black Ape
    @endslot

    @slot('sname')
        Macaca nigra
    @endslot

    @slot('lifespan')
        Lifespan: 30-40 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div> 
    @endslot
</x-card>

{{-- HEBRA --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/hebra.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Hebra is a cross between a horse and a zebra. It is found in South Africa.
        </div>
    @endslot

    @slot('cname')
        Hebra
    @endslot

    @slot('sname')
        Equus ferus caballus
    @endslot

    @slot('lifespan')
        Lifespan: 25-30 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-thumbs-up"></i>
        </div>  
    @endslot
</x-card>

{{-- PHILIPPINE DEAR --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/philippine_dear.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Philippine Deer is the smallest deer in the world. It is found in the Philippines.
        </div>
    @endslot

    @slot('cname')
        Philippine Dear
    @endslot

    @slot('sname')
        Cervus mariannus
    @endslot

    @slot('lifespan')
        Lifespan: 15-20 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>  
    @endslot
</x-card>

{{-- SIBERIAN TIGER --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/siberian_tiger.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Siberian Tiger is the largest tiger subspecies. It is found in Russia, China, and Mongolia.
        </div>
    @endslot

    @slot('cname')
        Siberian Tiger
    @endslot

    @slot('sname')
        Panthera tigris altaica
    @endslot

    @slot('lifespan')
        Lifespan: 10-15 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-skull"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-skull"></i>
        </div>  
    @endslot
</x-card>

{{-- PHILIPPINE MONKEY --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/philippine_monkey.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Philippine Monkey is the only monkey species found in the Philippines. It is found on the islands of Luzon, Mindoro, and Palawan.
        </div>
    @endslot

    @slot('cname')
        Philippine Monkey
    @endslot

    @slot('sname')
        Macaca fascicularis
    @endslot

    @slot('lifespan')
        Lifespan: 20-30 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>  
    @endslot
</x-card>

{{-- PHILIPPINE PALM CIVET --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/palm_civet.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Philippine Palm Civet is a nocturnal animal that is found in the Philippines. It is found on the islands of Luzon, Mindoro, and Palawan.
        </div>
    @endslot

    @slot('cname')
        Philippine Palm Civet
    @endslot

    @slot('sname')
        Paradoxurus philippinensis
    @endslot

    @slot('lifespan')
        Lifespan: 15-20 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-thumbs-up"></i>
        </div> 
    @endslot
</x-card>

{{-- BORNEAN BEARDED PIG --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/bearded_pig.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Bornean Bearded Pig is the largest pig in Southeast Asia. It is found on the island of Borneo.
        </div>
    @endslot

    @slot('cname')
        Bornean Bearded Pig
    @endslot

    @slot('sname')
        Sus barbatus
    @endslot

    @slot('lifespan')
        Lifespan: 20-25 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-thumbs-up"></i>
        </div>  
    @endslot
</x-card>

{{-- VISAYAN WARTY PIG --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/warty_pig.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Visayan Warty Pig is a large pig that is found in the Philippines. It is found on the islands of Panay and Negros.
        </div>
    @endslot

    @slot('cname')
        Visayan Warty Pig
    @endslot

    @slot('sname')
        Sus cebifrons
    @endslot

    @slot('lifespan')
        Lifespan: 15-20 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>  
    @endslot
</x-card>

{{-- PHILIPPINE MOUSE DEER --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/mouse_deer.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Philippine Mouse Deer is the smallest deer in the world. It is found in the Philippines.
        </div>
    @endslot

    @slot('cname')
        Philippine Mouse Deer
    @endslot

    @slot('sname')
        Tragulus nigricans
    @endslot

    @slot('lifespan')
        Lifespan: 10-12 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-thumbs-up"></i>
        </div>  
    @endslot
</x-card>

{{-- VISAYAN SPOTTED DEAR --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/spotted_deer.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Visayan Spotted Dear is a small deer that is found in the Philippines. It is found on the islands of Panay and Negros.
        </div>
    @endslot

    @slot('cname')
        Visayan Spotted Deer
    @endslot

    @slot('sname')
        Rusa alfredi
    @endslot

    @slot('lifespan')
        Lifespan: 15-20 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>  
    @endslot
</x-card>

{{-- TAMARAW --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/tamaraw.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Tamaraw is a small, wild water buffalo that is found in the Philippines. It is found on the island of Mindoro.
        </div>
    @endslot

    @slot('cname')
        Tamaraw
    @endslot

    @slot('sname')
        Bubalus mindorensis 
    @endslot

    @slot('lifespan')
        Lifespan: 25-30 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-skull"></i>
        </div> 
    @endslot
</x-card>

{{-- BINTURONG --}}
<x-card class="card__container">
    @slot('trivia')
        <i class="fa-solid fa-circle-info"></i>
    @endslot

    @slot('image')
        <img src="{{Vite::asset('resources/images/animals/binturong.png')}}" class="card-image" alt="">
        <div class="card__fact hidden">
            Hebra is a cross between a horse and a zebra. It is found in South Africa.
        </div>
    @endslot

    @slot('cname')
        Binturong
    @endslot

    @slot('sname')
        Arctictis binturong
    @endslot

    @slot('lifespan')
        Lifespan: 20-30 years
    @endslot

    @slot('icons')
        <div class="icon icons__food">
            <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="icon icons__wildness">
            <i class="fa-solid fa-paw"></i>
        </div>
        <div class="icon icons__population">
            <i class="fa-solid fa-thumbs-up"></i>
        </div>  
    @endslot
</x-card>