<?php

namespace App\View\Components;

use App\Models\Video;
use Illuminate\View\Component;

class mostPopularVideos extends Component
{
    public $mostPopularVideos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mostPopularVideos = Video::all()->random(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.most-popular-videos');
    }
}
