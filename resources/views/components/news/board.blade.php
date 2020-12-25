<div class="col">
    <div class="pt-4 position-relative">
        <a href="{{ $news->url }}" target="_blank">
            <img class="img-fluid rounded" src="{{ $news->picture }}" alt="Description">
        </a>

        {{ $slot }}

    </div>
    <div class="pt-4 pb-5">
        <a href="{{ $news->url }}" class="text-dark" style="text-decoration: none;" target="_blank">
            <p class="h4"><strong>{!! $news->title !!}</strong></p>
        </a>
    </div>
</div>
