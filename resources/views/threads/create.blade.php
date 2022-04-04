<x-app-layout>
    <section class="min-w-0 flex-1 h-full flex flex-col overflow-hidden xl:order-last">
        @livewire('threads.create')
    </section>

    @livewire('threads.aside', ['threads' => $threads])
</x-app-layout>
