<div class="flex-1 overflow-y-auto divide-y divide-gray-200">
    <div class="px-4 py-6 sm:px-6">
        <ul role="list" class="space-y-8">
        @foreach ($messages as $message)
            {{-- @livewire('threads.messages.message', [
                'key' => $message->id,
                'message' => $message,
            ]) --}}
            <livewire:threads.messages.message
                :key="$message->id"
                :message="$message"
            />
        @endforeach
        </ul>
    </div>
</div>
