<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Video;
class RelatedVideos extends Component
{
    public $findRelatedVideos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Video $video)
    {
        $this->findRelatedVideos = $video->relatedVideos(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.related-videos');
    }
}
