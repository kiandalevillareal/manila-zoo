{{-- <div {{$attributes-> merge(['class' => 'card'])}}>
    {{$slot}}
</div> --}}

<div {{$attributes-> merge(['class' => 'card'])}}>
    <div class="card__trivia">{{$trivia}}</div>
    <div class="card__image">{{$image}}</div>
    <div class="card__cname">{{$cname}}</div>
    <div class="card__sname">{{$sname}}</div>
    <div class="card__lifespan">{{$lifespan}}</div>
    <div class="card__icons">{{$icons}}</div>
</div>