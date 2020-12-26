<div class="position-absolute" style="top: 25px; padding-left: 90%;">
    @if(in_array($news->news_id, $cookieData))
        <button class="btn btn-success rounded-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-check" viewBox="0 0 16 16"
            >
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg>
        </button>
    @else
        <form method="post" action="{{ route('bookmarks.store') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $news->news_id }}">
            <button type="submit" class="btn btn-primary rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16"
                >
                    <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4.5 4.5a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                </svg>
            </button>
        </form>
    @endif
</div>
