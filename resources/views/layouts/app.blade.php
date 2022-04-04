<x-base-layout>
    <div class="h-full flex flex-col">
        @livewire('navigation.topbar')

        <div class="min-h-0 flex-1 flex overflow-hidden">
            @livewire('navigation.sidebar')

            <main class="min-w-0 flex-1 border-t border-gray-200 xl:flex">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-base-layout>
