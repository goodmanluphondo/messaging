<x-app-layout>
    <section class="min-w-0 flex-1 h-full flex flex-col overflow-hidden xl:order-last">
        @include('threads._partials.controls')

        <div class="min-h-0 flex-1 flex flex-col overflow-hidden">
            @livewire('threads.participants', [
                'users' => $thread->users,
            ])

            @livewire('threads.messages', [
                'thread' => $thread,
                'messages' => $thread->messages,
            ])

            @livewire('threads.compose', [
                'thread' => $thread,
            ])
        </div>
    </section>

    @livewire('threads.aside', ['threads' => $threads])
</x-app-layout>
