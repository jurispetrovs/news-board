<?php

namespace App\View\Components\News;

use Illuminate\View\Component;

class Board extends Component
{
    public $news;

    /**
     * Create a new component instance.
     *
     * @param $news
     */
    public function __construct($news)
    {
        $this->news = $news;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.news.board');
    }
}
