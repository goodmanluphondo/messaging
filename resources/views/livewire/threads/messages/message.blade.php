<li>
    <div class="flex space-x-3">
        <div class="flex-shrink-0">
            <x-user.avatar />
        </div>
        <div>
            <div class="text-sm">
                <a href="#" class="font-medium text-gray-900">
                    {{ $message->user->present()->name }}
                </a>
            </div>
            <div class="mt-1 text-sm text-gray-700">
                <p>{!! $message->body !!}</p>
            </div>
            <div class="mt-2 text-sm space-x-2">
                <span class="text-gray-500 font-medium">4d ago</span>
                @if ($message->isMine())
                <span class="text-gray-500 font-medium">&middot;</span>
                <button wire:click.prevent="delete" type="button" class="text-gray-900 font-medium">Delete</button>
                @endif
            </div>
        </div>
    </div>
</li>
