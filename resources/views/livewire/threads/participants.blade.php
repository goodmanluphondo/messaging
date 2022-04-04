<div class="py-3 px-6 min-h-0 flex-shrink-0 border-b border-gray-200">
    <div class="flex space-x-8 items-center justify-between">
        <div class="flex  space-x-2 items-center">
            <span>{{__('In conversation:')}}</span>
            <span class="flex space-x-2 items-center">
            @foreach ($users as $user)
                <span class="py-1 px-3 rounded-full bg-cyan-600 text-xs text-white">
                    {{ $user->present()->name() }}
                </span>
            @endforeach
            </span>
        </div>
    </div>
</div>
