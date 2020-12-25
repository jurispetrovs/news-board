<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BookmarksController extends Controller
{
    public function index()
    {
        $news = json_decode(Cookie::get('bookmarks'));

        $newsList = null;

        if(isset($news)) {
            $newsList = News::query()
                ->whereIn('news_id', $news)
                ->get();
        }

        return view('bookmarks', [
            'newsList' => $newsList
        ]);
    }

    public function store(Request $request)
    {
        $cookieData = Cookie::get('bookmarks');

        if ($cookieData) {
            $news = json_decode($cookieData);
            $news[] = $request['id'];
        } else {
            $news[] = $request['id'];
        }

        Cookie::queue('bookmarks', json_encode($news), 43200);

        return redirect(route('news'));
    }


    public function destroy($news)
    {
        $cookieData = Cookie::get('bookmarks');
        $newsList = json_decode($cookieData);

        $newsList = array_values(array_diff($newsList, [$news]));

        if(empty($newsList)) {
            Cookie::queue(Cookie::forget('bookmarks'));
        } else {
            Cookie::queue('bookmarks', json_encode($newsList), 43200);
        }

        return redirect(route('bookmarks.index'));
    }
}
