<?php

namespace App\View\Components;

use App\Models\Video;
use Illuminate\View\Component;

class mostViewedVideos extends Component
{
    public $mostViewedVideos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mostViewedVideos = Video::all()->random(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.most-viewed-videos');
    }
}
