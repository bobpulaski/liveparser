<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCrud extends Component
{
    public $posts;

    public function render ()
    {
        $this->posts = Post::all ();
        return view ('livewire.post-crud');

    }

    public function delete ($id)
    {
        Post::find ($id)->delete ();
        session()->flash('message', 'Post deleted.');
    }
}
