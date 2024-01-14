<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public string $comment;
    public array $comments = [
        [
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget tempor aliquam, nunc libero ultrices nunc,',
        'created_at' => '2 days ago',
        'creator' => 'John Doe',
        ],
    ];
    public function render()
    {
        return view('livewire.comments');
    }

    public function addComment()
    {
        array_unshift($this->comments, [
            'body' => $this->comment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Adam',
        ]);
        $this->comment = '';
    }
}
