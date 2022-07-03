<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::toBase()->get();
        //dd ($this->posts);
        return view('livewire.show-posts', [$this->posts]);
    }
}
