<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $search = "";

    public function render()
    {
        if(!$this->search){
            $post = Post::all();
        } else {
            $post = Post::where('title', $this->search)->get();
        }
        return view('livewire.search-posts', compact('posts'));
    }
}
