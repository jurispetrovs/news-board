<x-layout>
    <x-news.sort/>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 pt-4">
                @foreach($newsList as $news)
                    <x-news.board :news="$news">
                        <x-bookmarks.save :news="$news" :cookieData="$cookieData"/>
                    </x-news.board>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-delfi" role="tabpanel" aria-labelledby="pills-delfi-tab">
            <div class="row row-cols-4 pt-4">
                @foreach($newsList as $news)
                    @if($news->is_paid !== '1' && $news->channel_id === '1')
                        <x-news.board :news="$news">
                            <x-bookmarks.save :news="$news" :cookieData="$cookieData"/>
                        </x-news.board>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-delfiPlus" role="tabpanel" aria-labelledby="pills-delfiPLus-tab">
            <div class="row row-cols-4 pt-4">
                @foreach($newsList as $news)
                    @if($news->is_paid === '1')
                        <x-news.board :news="$news">
                            <x-bookmarks.save :news="$news" :cookieData="$cookieData"/>
                        </x-news.board>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-mvp" role="tabpanel" aria-labelledby="pills-mvp-tab">
            <div class="row row-cols-4 pt-4">
                @foreach($newsList as $news)
                    @if($news->is_paid === '1' && $news->channel_id === '70')
                        <x-news.board :news="$news">
                            <x-bookmarks.save :news="$news" :cookieData="$cookieData"/>
                        </x-news.board>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
