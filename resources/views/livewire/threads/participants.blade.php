<div class="py-3 px-6 min-h-0 flex-shrink-0 border-b border-gray-200">
    <div class="flex space-x-8 items-center justify-between">
    @foreach ($users as $user)
        {{ $user->present()->name() }}
    @endforeach
        <div>
            <x-button.white>
                {{__('Add Participant')}}
            </x-button.white>
        </div>
    </div>
</div>
