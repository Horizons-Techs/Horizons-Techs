<?php

namespace App\View\Components\Slider;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public string $title;
    public string $content;
    public string $image;
    public string $publication_date;
    public string $author;
    public string $url;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title,
        string $content,
        string $image,
        string $publication_date,
        string $author,
        string $url
    ) {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->publication_date = $publication_date;
        $this->author = $author;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('components.slider.item');
    }
}
