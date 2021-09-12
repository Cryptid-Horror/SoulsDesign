<div class="hovereffect mw-100 d-flex justify-content-center">
    <img class="img-responsive" src="{{ $imageUrl }}" alt="">
    <div class="overlay">
        <h2>{{ $header }}</h2>
        <ul class="list-group list-group-flush">
            @foreach($links as $title => $link)
            <li class="list-group-item"><a href="{{ $link }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>