<div class="position-absolute" style="top: 25px; padding-left: 90%;">
    <form method="post" action="{{ route('bookmarks.destroy', $news->news_id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger rounded-circle" onclick="return confirm('Are you sure ?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" c
                 lass="bi bi-bookmark-dash-fill" viewBox="0 0 16 16"
            >
                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM6 6a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6z"/>
            </svg>
        </button>
    </form>
</div>
