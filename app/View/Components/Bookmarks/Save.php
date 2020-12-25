<?php

namespace App\View\Components\Bookmarks;

use Illuminate\View\Component;

class Save extends Component
{
    public $news;
    public $cookieData;

    /**
     * Create a new component instance.
     *
     * @param $news
     * @param $cookieData
     */
    public function __construct($news, $cookieData)
    {
        $this->news = $news;
        $this->cookieData = $cookieData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.bookmarks.save');
    }
}
