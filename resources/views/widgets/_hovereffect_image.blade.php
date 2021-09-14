<div class="mb-5">
    <h2 class="text-center mb-0">{{ $header }}</h2>
    <div class="hovereffect mw-100 d-flex justify-content-center">
        <img class="img-responsive" src="{{ $imageUrl }}" alt="">
        <div class="overlay">
            <ul class="list-group list-group-flush">
                @foreach($links as $title => $link)
                <li class="list-group-item"><a href="{{ $link }}">{{ $title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>