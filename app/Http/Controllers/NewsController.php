<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class NewsController extends Controller
{
    public function index()
    {
        $this->store();

        $news = News::query()
            ->orderBy('publish_date', 'desc')
            ->take(20)
            ->get();

        $cookieData = json_decode(Cookie::get('bookmarks'));

        if(!isset($cookieData)) {
            $cookieData = [];
        }

        return view('welcome', [
            'newsList' => $news,
            'cookieData' => $cookieData
        ]);
    }

    public function store()
    {
        $response = Http::get('https://www.delfi.lv/misc/task_2020/')->json();

        foreach ($response as $item)
        {
            News::updateOrCreate([
                'news_id' => $item['id'],
            ], [
                'news_id' => $item['id'],
                'title' => $item['title'],
                'channel_id' => $item['channel_id'],
                'is_paid' => $item['is_paid'],
                'url' => $item['url'],
                'picture' => $item['pictures']['350x400'],
                'picture_alt' => $item['picture_alt'],
                'publish_date' => $item['publish_date'],
            ]);
        }
    }
}
