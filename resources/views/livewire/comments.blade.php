<div>
    <h1 class="my-10 text-3xl">Comments</h1>
    <div class="mb-4 flex">
        <input type="text" wire:model.lazy="comment" class="w-full border-gray-300 rounded">
        <button wire:click="addComment">Add Comment</button>
    </div>
    @foreach($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="text-gray-500">
                {{ $comment['created_at'] }}
            </div>
            <div class="text-gray-500">
                {{ $comment['creator'] }}
            </div>
            <div class="mb-2">
                {{ $comment['body'] }}
            </div>
        </div>
    @endforeach
</div>
