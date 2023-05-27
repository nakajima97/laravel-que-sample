<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Comment extends Component
{
    public $authorName;
    public $createdAt;
    public $comment;

    /**
     * Create a new component instance.
     */
    public function __construct($authorName, $createdAt, $comment)
    {
        $this->authorName = $authorName;
        $this->createdAt = $createdAt;
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment');
    }
}
